// Глобальная функция для прокрутки к форме
function scrollToForm() {
  const form = document.getElementById("consultation-form")
  if (form) {
    form.scrollIntoView({
      behavior: "smooth",
    })
  }
}

document.addEventListener("DOMContentLoaded", () => {
  // Якорные ссылки - простая функция
  if (window.location.hash) {
    const element = document.getElementById(window.location.hash.substring(1))
    if (element) {
      setTimeout(() => {
        element.scrollIntoView({ behavior: "smooth" })
      }, 100)
    }
  }

  // Обработка отправки формы
  const contactForm = document.getElementById("contactForm")

  if (contactForm) {
    contactForm.addEventListener("submit", async (e) => {
      e.preventDefault()

      const submitButton = document.querySelector(".submit-button")
      const submitText = submitButton.querySelector(".submit-text")
      const formData = new FormData(contactForm)

      // Проверка заполнения полей
      const name = formData.get("name")
      const email = formData.get("email")
      const phone = formData.get("phone")

      if (!name || !email || !phone) {
        alert("Пожалуйста, заполните все поля формы")
        return
      }

      // Проверка email
      if (!isValidEmail(email)) {
        alert("Пожалуйста, введите корректный email")
        return
      }

      // Показываем состояние загрузки
      submitText.textContent = "ОТПРАВКА..."
      submitButton.disabled = true

      try {
        const response = await fetch(contactForm.action, {
          method: "POST",
          body: formData,
          headers: {
            "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute("content"),
            Accept: "application/json",
          },
        })

        const result = await response.json()

        if (result.success) {
          submitText.textContent = "ОТПРАВЛЕНО!"
          submitButton.style.backgroundColor = "#28a745"

          // Сброс формы
          setTimeout(() => {
            contactForm.reset()
            submitText.textContent = "ЗАПИСАТЬСЯ"
            submitButton.style.backgroundColor = "#140085"
            submitButton.disabled = false
          }, 2000)
        } else {
          throw new Error(result.message || "Ошибка отправки")
        }
      } catch (error) {
        alert(error.message || "Произошла ошибка при отправке заявки. Попробуйте еще раз.")
        submitText.textContent = "ЗАПИСАТЬСЯ"
        submitButton.disabled = false
      }
    })
  }

  function isValidEmail(email) {
    const re =
      /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
    return re.test(String(email).toLowerCase())
  }

  // Плавная прокрутка для якорных ссылок
  document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
    anchor.addEventListener("click", function (e) {
      e.preventDefault()

      const targetId = this.getAttribute("href")
      if (targetId === "#") return

      const targetElement = document.querySelector(targetId)
      if (targetElement) {
        targetElement.scrollIntoView({
          behavior: "smooth",
        })
      }
    })
  })

  // СЛАЙДЕР УСЛУГ
  const servicesSection = document.querySelector(".services-section")
  const nextButton = document.querySelector(".next-button")
  const prevButton = document.querySelector(".prev-button")

  if (!servicesSection || !nextButton || !prevButton) return

  const activeCardsCount = 4 // 4 позиции
  let currentSlideIndex = 0
  const step = 420 // Шаг прокрутки
  let autoSlideInterval = null
  const autoSlideDelay = 5000

  function goToSlide(index) {
    if (index < 0) index = 0
    if (index > activeCardsCount - 1) index = activeCardsCount - 1

    currentSlideIndex = index
    const currentPosition = -index * step

    servicesSection.style.transition = "transform 0.5s ease"
    servicesSection.style.transform = "translateX(" + currentPosition + "px)"

    updateButtonState()
    resetAutoSlide()
  }

  function moveCards(direction) {
    if (direction === "next" && currentSlideIndex < activeCardsCount - 1) {
      goToSlide(currentSlideIndex + 1)
    } else if (direction === "prev" && currentSlideIndex > 0) {
      goToSlide(currentSlideIndex - 1)
    }
  }

  function updateButtonState() {
    prevButton.disabled = currentSlideIndex <= 0
    nextButton.disabled = currentSlideIndex >= activeCardsCount - 1

    prevButton.style.opacity = prevButton.disabled ? "0.5" : "1"
    nextButton.style.opacity = nextButton.disabled ? "0.5" : "1"
  }

  function startAutoSlide() {
    if (autoSlideInterval) {
      clearInterval(autoSlideInterval)
    }

    autoSlideInterval = setInterval(() => {
      if (currentSlideIndex >= activeCardsCount - 1) {
        goToSlide(0)
      } else {
        moveCards("next")
      }
    }, autoSlideDelay)
  }

  function resetAutoSlide() {
    if (autoSlideInterval) {
      clearInterval(autoSlideInterval)
    }
    startAutoSlide()
  }

  // Инициализация
  updateButtonState()
  startAutoSlide()

  // Обработчики событий
  nextButton.addEventListener("click", () => {
    moveCards("next")
    clearInterval(autoSlideInterval)
    setTimeout(startAutoSlide, autoSlideDelay * 2)
  })

  prevButton.addEventListener("click", () => {
    moveCards("prev")
    clearInterval(autoSlideInterval)
    setTimeout(startAutoSlide, autoSlideDelay * 2)
  })

  // Поддержка свайпов
  let touchStartX = 0
  let touchEndX = 0

  servicesSection.addEventListener(
    "touchstart",
    (e) => {
      touchStartX = e.changedTouches[0].screenX
      clearInterval(autoSlideInterval)
    },
    { passive: true },
  )

  servicesSection.addEventListener(
    "touchend",
    (e) => {
      touchEndX = e.changedTouches[0].screenX
      handleSwipe()
      setTimeout(startAutoSlide, autoSlideDelay)
    },
    { passive: true },
  )

  function handleSwipe() {
    const swipeThreshold = 50

    if (touchEndX < touchStartX - swipeThreshold) {
      moveCards("next")
    } else if (touchEndX > touchStartX + swipeThreshold) {
      moveCards("prev")
    }
  }

  // Остановка автопрокрутки при неактивной вкладке
  document.addEventListener("visibilitychange", () => {
    if (document.hidden) {
      clearInterval(autoSlideInterval)
    } else {
      startAutoSlide()
    }
  })

  // Переходы с карточек слайдера на страницу услуг
  const serviceCards = document.querySelectorAll(".service-card")
  serviceCards.forEach((card, index) => {
    card.addEventListener("click", () => {
      const serviceRoutes = [
        "/services#development", // Разработка сайтов под ключ
        "/services#landing", // Лендинги
        "/services#redesign", // Редизайн сайтов
        "/services#ecommerce", // Интернет-магазины
        "/services#corporate", // Корпоративные сайты
      ]

      if (serviceRoutes[index]) {
        window.location.href = serviceRoutes[index]
      }
    })

    // Добавляем курсор pointer для указания кликабельности
    card.style.cursor = "pointer"
  })
})

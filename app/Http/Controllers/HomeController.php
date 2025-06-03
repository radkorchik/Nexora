<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Данные для услуг
        $services = [
            [
                'id' => 1,
                'title' => 'Разработка сайтов «ПОД КЛЮЧ»',
                'description' => 'Мы берем на себя весь процесс: от идеи и дизайна до программирования и настройки. Ваш сайт будет полностью готов к использованию и адаптирован под ваши бизнес-цели.',
                'link' => route('services.index'),
                'class' => 'service-card-1'
            ],
            [
                'id' => 2,
                'title' => 'ЛЕНДИНГИ',
                'description' => 'Продающие страницы для эффективного привлечения клиентов.',
                'link' => route('services.index'),
                'class' => 'service-card-2'
            ],
            [
                'id' => 3,
                'title' => 'РЕДИЗАЙН',
                'description' => 'Обновление и улучшение ваших текущих сайтов.',
                'link' => route('services.index'),
                'class' => 'service-card-3'
            ],
            [
                'id' => 4,
                'title' => 'ИНТЕРНЕТ-МАГАЗИНЫ',
                'description' => 'Функциональные онлайн-магазины с удобной системой управления товарами.',
                'link' => route('services.index'),
                'class' => 'service-card-4'
            ],
            [
                'id' => 5,
                'title' => 'КОРПОРАТИВНЫЕ САЙТЫ',
                'description' => 'Представительство вашей компании в интернете с полным набором необходимых функций. Профессиональный дизайн и удобный интерфейс для вашего бизнеса.',
                'link' => route('services.index'),
                'class' => 'service-card-5'
            ]
        ];

        // Данные для кейсов
        $cases = [
            [
                'id' => 1,
                'title' => 'Редизайн интернет-магазина Demetr',
                'image' => 'case-study-image-1.svg'
            ],
            [
                'id' => 2,
                'title' => 'Лэндинг для компании "Компьютерный мастер на все руки"',
                'image' => 'case-study-image-2.svg'
            ],
            [
                'id' => 3,
                'title' => 'Сайт свадебного салона "Empire of Love"',
                'image' => 'case-study-image-3.svg'
            ]
        ];

        return view('home', compact('services', 'cases'));
    }
}

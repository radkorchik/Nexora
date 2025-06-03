<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(ContactRequest $request)
    {
        // Получаем валидированные данные
        $validated = $request->validated();
        
        // Здесь можно сохранить данные в БД или отправить email
        // Mail::to(config('mail.admin_email'))->send(new ContactFormMail($validated));
        
        return response()->json([
            'success' => true,
            'message' => 'Ваша заявка успешно отправлена! Мы свяжемся с вами в ближайшее время.'
        ]);
    }
}

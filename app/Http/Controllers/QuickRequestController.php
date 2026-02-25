<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuickRequestController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'address' => 'nullable|string|max:500',
        ]);

        // Здесь можно сохранить в базу данных (опционально)
        // QuickRequest::create($request->all());

        // Отправка уведомления на почту менеджеру
        $details = [
            'name' => $request->name,
            'phone' => $request->phone,
            'address' => $request->address ?? 'Не указан',
            'time' => now()->format('d.m.Y H:i')
        ];

        // Пример отправки письма
        // Mail::send('emails.quick-request', $details, function ($message) {
        //     $message->to('manager@severstroy.ru')->subject('Новая быстрая заявка');
        // });

        return response()->json(['success' => true, 'message' => 'Заявка принята!']);
    }
}

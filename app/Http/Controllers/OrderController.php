<?php

namespace App\Http\Controllers;

use App\Mail\OrderMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'product'  => 'required|string|max:255',
            'quantity' => 'required|numeric|min:1',
            'unit'     => 'required|in:ton,cube',
            'name'     => 'required|string|max:255',
            'phone'    => 'required|string|max:20',
            'email'    => 'required|email|max:255',
            'address'  => 'nullable|string|max:500',
            'comment'  => 'nullable|string|max:1000',
            'total_price' => 'nullable|string|max:50',
        ]);

        $details = [
            'product'     => $request->product,
            'quantity'    => $request->quantity,
            'unit'        => $request->unit,
            'total_price' => $request->total_price ?? 'Не рассчитано',
            'name'        => $request->name,
            'phone'       => $request->phone,
            'email'       => $request->email,
            'address'     => $request->address ?? 'Не указан',
            'comment'     => $request->comment ?? 'Нет',
            'time'        => now()->format('d.m.Y H:i'),
        ];

        $recipient = env('MAIL_TO_ADDRESS') ?: env('MAIL_FROM_ADDRESS');

        Mail::to($recipient)->send(new OrderMail($details));

        return response()->json(['success' => true, 'message' => 'Заявка отправлена!']);
    }
}

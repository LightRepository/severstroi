<?php

namespace App\Http\Controllers;

use App\Mail\QuickRequestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class QuickRequestController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name'     => 'required|string|max:255',
            'phone'    => 'required|string|max:20',
            'material' => 'nullable|string|max:100',
            'tons'     => 'nullable|numeric|min:0',
            'address'  => 'nullable|string|max:500',
        ]);

        $details = [
            'name'     => $request->name,
            'phone'    => $request->phone,
            'material' => $request->material ?? 'Не указан',
            'tons'     => $request->tons ?? 'Не указано',
            'address'  => $request->address ?? 'Не указан',
            'time'     => now()->format('d.m.Y H:i'),
        ];

        Mail::to(config('mail.to_address', 'manager@severstroi.ru'))
            ->send(new QuickRequestMail($details));

        return response()->json(['success' => true, 'message' => 'Заявка принята!']);
    }
}

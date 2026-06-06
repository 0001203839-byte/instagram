<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MensagemController extends Controller
{
    public function index()
    {
        $username = 'CarGram_Oficial';

        $conversations = [
            [
                'name'         => 'Ferrari_Brasil',
                'avatar'       => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=56&h=56&fit=crop&crop=face',
                'last_message' => 'Que carro incrível! 🔥',
                'time'         => '2m',
                'online'       => true,
                'unread'       => 3,
                'active'       => true,
            ],
            [
                'name'         => 'Porsche_News',
                'avatar'       => 'https://images.unsplash.com/photo-1522075469751-3a6694fb2f61?w=56&h=56&fit=crop&crop=face',
                'last_message' => 'Viu o novo 911 GT3?',
                'time'         => '15m',
                'online'       => true,
                'unread'       => 0,
                'active'       => false,
            ],
            [
                'name'         => 'Lamborghini_BR',
                'avatar'       => 'https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?w=56&h=56&fit=crop&crop=face',
                'last_message' => 'Foto',
                'time'         => '1h',
                'online'       => false,
                'unread'       => 1,
                'active'       => false,
            ],
            [
                'name'         => 'BMW_M_World',
                'avatar'       => 'https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=56&h=56&fit=crop&crop=face',
                'last_message' => 'M Power forever! 💪',
                'time'         => '3h',
                'online'       => false,
                'unread'       => 0,
                'active'       => false,
            ],
        ];

        $activeConv = $conversations[0];

        $messages = [
            [
                'text' => 'Cara, você viu o novo Ferrari SF90? 🔥',
                'time' => '14:22',
                'mine' => false,
            ],
            [
                'text' => '986cv de V8 híbrido. Uma obra de arte! 🏎️',
                'time' => '14:23',
                'mine' => true,
            ],
            [
                'image' => 'https://images.unsplash.com/photo-1544636331-e26879cd4d9b?w=300&h=200&fit=crop',
                'time'  => '14:24',
                'mine'  => false,
            ],
            [
                'text' => 'Olha esse ângulo! Incrível! 🔥',
                'time' => '14:24',
                'mine' => false,
            ],
            [
                'text' => 'Essa traseira é esculpida pelos deuses 😍',
                'time' => '14:25',
                'mine' => true,
            ],
            [
                'text' => 'Você vai no CarShow de SP no sábado?',
                'time' => '14:26',
                'mine' => false,
            ],
            [
                'text' => 'Vou sim! Já comprei o ingresso 🤙',
                'time' => '14:28',
                'mine' => true,
            ],
        ];

        return view('mensagens.index', compact('username', 'conversations', 'activeConv', 'messages'));
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function index()
    {
        $videos = [
            [
                'user'     => 'Vinicius_junior',
                'avatar'   => 'https://img.olympics.com/images/image/private/t_s_pog_staticContent_hero_lg_2x/f_auto/primary/ksvgo8bmwn7zzbdstq0g',
                'youtube'  => 'https://pixabay.com/pt/videos/download/video-232234_medium.mp4',
                'likes'    => 141823,
                'comments' => 156,
                'caption'  => '🔴 Ferrari F8 Tributo — som do V8 que arrepia! #Ferrari #CarGram',
            ],
            [
                'user'     => 'Marcel_philippe',
                'avatar'   => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQmtbk1KElfAW6o3hXVuzyUbrW4hUjZxC6x1A&s',
                'youtube'  => 'https://pixabay.com/pt/videos/download/video-19627_medium.mp4',
                'likes'    => 92401,
                'comments' => 88,
                'caption'  => '🏁 Porsche 911 GT3 no Nürburgring! #Porsche #GT3',
            ],
            [
                'user'     => 'jojo_todynho',
                'avatar'   => 'https://forbes.com.br/wp-content/uploads/2023/12/Jojo.jpg',
                'youtube'  => 'https://www.youtube.com/shorts/ZU6cxeYUuAg',
                'likes'    => 221450,
                'comments' => 203,
                'caption'  => '🟡 Lamborghini Huracán — V10 na redline! #Lamborghini',
            ],
            [
                'user'     => 'Anitta',
                'avatar'   => 'https://br.web.img2.acsta.net/pictures/20/11/19/16/21/4456129.jpg',
                'youtube'  => 'https://www.youtube.com/shorts/t1qNowk_MJ4',
                'likes'    => 74634,
                'comments' => 72,
                'caption'  => '💙 BMW M3 Competition — aceleração brutal! #BMW #MPower',
            ],
            [
                'user'     => 'leonel_messi',
                'avatar'   => 'https://assets.goal.com/images/v3/bltd58c4d60ecd9275e/GOAL_-_Blank_WEB_-_Facebook_-_2023-06-13T135350.847.png?auto=webp&format=pjpg&width=3840&quality=60',
                'youtube'  => 'https://www.youtube.com/shorts/6hpepBuGejA',
                'likes'    => 583590,
                'comments' => 61,
                'caption'  => '⚫ Audi R8 V10 — Quattro na pista! #Audi #R8',
            ],
            [
                'user'     => 'Cristiano',
                'avatar'   => 'https://www.meiahora.com/_midias/jpg/2019/06/09/000_1hd8nq-11495652.jpg',
                'youtube'  => 'https://www.youtube.com/shorts/fKdhijbWMtM',
                'likes'    => 118205,
                'comments' => 130,
                'caption'  => '🇺🇸 Mustang Shelby GT500 — V8 rugindo! #Mustang',
            ],
        ];

        return view('videos.index', compact('videos'));
    }
}

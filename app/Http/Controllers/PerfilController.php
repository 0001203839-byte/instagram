<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerfilController extends Controller
{
    public function index()
    {
        $user = [
            'username'  => 'Paull_Walker',
            'name'      => 'CarGram Brasil 🚗',
            'bio'       => '🏎️ Apaixonado por carros | 📍 Brasil | A vida é curta demais para dirigir carros sem graça',
            'website'   => 'www.cargram.localhost',
            'avatar'    => 'https://i.redd.it/d3yppj9g65da1.jpg',
            'posts'     => 9,
            'followers' => 632728832,
            'following' => 244,
        ];

        $highlights = [
            ['title' => 'Ferrari',     'cover' => 'https://admin.cnnbrasil.com.br/wp-content/uploads/sites/12/2021/06/15138_ACAAFF189FB11CF1.jpg?w=1024'],
            ['title' => 'Porsche',     'cover' => 'https://garagem360.com.br/wp-content/uploads/2024/03/porsche-911-gt3-rs-2024-1.jpeg'],
            ['title' => 'Lamborghini', 'cover' => 'https://res.cloudinary.com/unix-center/image/upload/c_limit,dpr_3.0,f_auto,fl_progressive,g_center,h_580,q_75,w_906/tnt1sdreuccr9iqjyewf.jpg'],
            ['title' => 'BMW M3',       'cover' => 'https://cdn.motor1.com/images/mgl/1ZQrxK/s1/2023-bmw-m3-cs-first-drive-review.webp'],
            ['title' => 'Track Day',   'cover' => 'https://wallpapers.com/images/featured/imagens-de-paisagens-a3hr6gk3xfx36dyg.jpg'],
        ];

        $profilePosts = [
            ['image' => 'https://wallpapers.com/images/hd/brian-s-car-fast-and-furious-desktop-9u5k56su0od4wu15.jpg', 'likes' => 14823, 'comments_count' => 156, 'is_video' => false],
            ['image' => 'https://t.ctcdn.com.br/xvpl5fU29TIeasK1YDQmhH3fS2o=/1200x675/smart/i834059.jpeg', 'likes' => 920191,  'comments_count' => 88,  'is_video' => false],
            ['image' => 'https://i.pinimg.com/236x/47/78/da/4778dacfa3ebc6a123b2e26f279e23ad.jpg', 'likes' => 2145220, 'comments_count' => 203, 'is_video' => true],
            ['image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRdeitiiAhroC7ionW6B0Tj-7ia8RH_Wb_A8g&s', 'likes' => 763534,  'comments_count' => 72,  'is_video' => false],
            ['image' => 'https://br.web.img2.acsta.net/r_1280_720/newsv7/21/03/24/20/58/4461113.jpg', 'likes' => 589530,  'comments_count' => 61,  'is_video' => false],
            ['image' => 'https://www.webmotors.com.br/wp-content/uploads/2021/05/24121334/supravelozesefuriosos2.jpg', 'likes' => 832531,  'comments_count' => 94,  'is_video' => true],
            ['image' => 'https://observatoriodocinema.com.br/wp-content/uploads/2019/08/brian-velozes-furiosos.jpg', 'likes' => 1187205, 'comments_count' => 130, 'is_video' => false],
            ['image' => 'https://s2.glbimg.com/Qqh_xkw9Gy66JNlkfxUdrc2-9h4=/1200x630/s.glbimg.com/jo/g1/f/original/2013/12/01/thefastandthefurious.jpg', 'likes' => 450653,  'comments_count' => 45,  'is_video' => false],
            ['image' => 'https://static.wikia.nocookie.net/velozes-e-furiosos/images/4/4e/Dominic_Toretto_-_Brian_Entrega_as_Chaves.png/revision/latest?cb=20180224194706&path-prefix=pt-br', 'likes' => 712430,  'comments_count' => 67,  'is_video' => false],
        ];

        return view('perfil.index', compact('user', 'highlights', 'profilePosts'));
    }
}
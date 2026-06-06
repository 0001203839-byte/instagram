<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FeedController extends Controller
{
    public function index()
    {
        $stories = [
            ['user' => 'Ferrari_BR',   'avatar' => 'https://upload.wikimedia.org/wikipedia/commons/0/04/Ferrari_458_Fort_Worth_June_2016_56_%28Ferrari%29_%28cropped-2%29.jpg', 'viewed' => false],
            ['user' => 'Porsche_F',    'avatar' => 'https://hips.hearstapps.com/hmg-prod/images/2025-porsche-911-gt3-touring-007-a9200906-69529b959b250.jpg?crop=0.590xw:0.498xh;0.226xw,0.332xh&resize=1200:*', 'viewed' => false],
            ['user' => 'Lambo_BR',     'avatar' => 'https://cdn.motor1.com/images/mgl/kNREB/s3/lamborghini-huracan-sto.jpg', 'viewed' => false],
            ['user' => 'BMW_M',        'avatar' => 'https://quatrorodas.abril.com.br/wp-content/uploads/2026/05/BMW_01_97895e.jpg?crop=1&resize=1212,909', 'viewed' => false],
            ['user' => 'Audi_Sport',   'avatar' => 'https://cdn.motor1.com/images/mgl/8g0W3/s1/2015-547228-2015-audi-r8-v10-plus1.jpg', 'viewed' => false],
            ['user' => 'McLaren_BR',   'avatar' => 'https://static.wikia.nocookie.net/pedrofilms-inc/images/7/75/3240px-McLaren_P1.jpg/revision/latest?cb=20230510135230&path-prefix=pt-br', 'viewed' => true],
            ['user' => 'Mustang_BR',   'avatar' => 'https://hips.hearstapps.com/hmg-prod/images/2022-ford-mustang-shelby-gt500-02-1636734552.jpg', 'viewed' => true],
        ];

        $posts = [
            [
                'user'     => 'Neymar_Junior',
                'avatar'   => 'https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?w=56&h=56&fit=crop&crop=face',
                'location' => 'São Paulo, SP',
                'image'    => 'https://d20f7dynuzdeeg.cloudfront.net/speedclean/35482/foto-Album-de-FERRARI-F8-TRIBUTO-A31795-68794f4027137.webp',
                'likes'    => 142823,
                'caption'  => '🔴 Ferrari F8 Tributo — 710cv de pura adrenalina. Esse vermelho é vida! #Ferrari #F8 #CarGram',
                'time'     => 'HÁ 2 HORAS',
                'comments' => [
                    ['user' => 'Porsche_Fan',   'text' => 'Que obra de arte! Vermelho Ferrari é incomparável 🔥'],
                    ['user' => 'CarLover_Paulo', 'text' => 'Sonho de consumo! 😍'],
                ],
            ],
            [
                'user'     => 'Vin_diesel',
                'avatar'   => 'https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=56&h=56&fit=crop&crop=face',
                'location' => 'Nürburgring, Alemanha',
                'image'    => 'https://cdn.motor1.com/images/mgl/9mQYrl/s1/porsche-911-gt3-rs-br.webp',
                'likes'    => 923201,
                'caption'  => '🏁 Porsche 911 GT3 — flat-six atmosférico, som puro. Nürburgring é a casa dele! #Porsche #GT3 #911',
                'time'     => 'HÁ 4 HORAS',
                'comments' => [
                    ['user' => 'SpeedLover_BR', 'text' => 'Esse som é terapia pra alma! 🎵'],
                ],
            ],
            [
                'user'     => 'trump',
                'avatar'   => 'https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?w=56&h=56&fit=crop&crop=face',
                'location' => 'Belo Horizonte, MG',
                'image'    => 'https://upload.wikimedia.org/wikipedia/commons/7/78/Lamborghini_Huracan_Evo_Genf_2019_1Y7A5452.jpg',
                'likes'    => 233450,
                'caption'  => '🟡 Lamborghini Huracán — V10 naturalmente aspirado, 640cv. Amarelo que chama atenção! #Lamborghini #Huracan',
                'time'     => 'HÁ 6 HORAS',
                'comments' => [
                    ['user' => 'Ferrari_Brasil', 'text' => 'Rival do coração! 🔥'],
                    ['user' => 'AutoMania_BR',   'text' => 'Esse amarelo é perfeito! 😍'],
                ],
            ],
            [
                'user'     => 'Flavio_bolsonaro',
                'avatar'   => 'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=56&h=56&fit=crop&crop=face',
                'location' => 'Curitiba, PR',
                'image'    => 'https://cdn.motor1.com/images/mgl/R09nm/s1/bmw-m3-2021-im-test.jpg',
                'likes'    => 763214,
                'caption'  => '💙 BMW M3 Competition — 510cv, tração traseira, barulho de fazer chorar! #BMW #M3 #MPower',
                'time'     => 'HÁ 10 HORAS',
                'comments' => [
                    ['user' => 'Audi_Fan_BR', 'text' => 'M Power sempre na frente! 💪'],
                ],
            ],
            [
                'user'     => 'lula_ofc',
                'avatar'   => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=56&h=56&fit=crop&crop=face',
                'location' => 'Brasília, DF',
                'image'    => 'https://www.hiltonandmoss.com/image-blobs/stock/590953/images/819ebf3e-d721-495a-9d45-06c1917021b0/audi_r8_v10_performance_parts_hilton_and_moss_01.jpg?width=2000&height=1333',
                'likes'    => 532890,
                'caption'  => '⚫ Audi R8 V10 Plus — 620cv e Quattro. O supercar mais prático do mundo! #Audi #R8 #V10',
                'time'     => 'HÁ 1 DIA',
                'comments' => [
                    ['user' => 'BMW_M_World', 'text' => 'Audi sempre no design! 🔥'],
                ],
            ],
            [
                'user'     => 'Putin_russo',
                'avatar'   => 'https://images.unsplash.com/photo-1522075469751-3a6694fb2f61?w=56&h=56&fit=crop&crop=face',
                'location' => 'Route 66, EUA',
                'image'    => 'https://www.topgear.com/sites/default/files/2024/12/54196859052_9249719e93_o.jpg',
                'likes'    => 112025,
                'caption'  => '🇺🇸 Ford Mustang — ícone americano. V8 rugindo na Route 66 é experiência única! #Mustang #V8 #AmericanMuscle',
                'time'     => 'HÁ 2 DIAS',
                'comments' => [
                    ['user' => 'V8_Brasil',   'text' => 'Esse V8 é lendário! 🎶'],
                    ['user' => 'AmericanCar', 'text' => 'Muscle car puro! ❤️'],
                ],
            ],
        ];

        $suggestions = [
            ['name' => 'McLaren_BR',     'handle' => 'Sugerido para você',     'avatar' => 'https://cdn.motor1.com/images/mgl/6Z4JRe/s3/larry-ellison-s-1997-mclaren-f1-auction.jpg'],
            ['name' => 'Mercedes_AMG_BR','handle' => 'Seguido por Neymar_junior', 'avatar' => 'https://mclarenautomoveis.com.br/uploads/2026/06/1-476295838-concept-mercedes-amg-gt-xx-bate-recordes-5479-km-em-1.jpg'],
            ['name' => 'TopGear_Brasil', 'handle' => 'Sugerido para você',     'avatar' => 'https://motorshow.com.br/wp-content/uploads/sites/2/2024/10/kardian03.jpg'],
            ['name' => 'Mustang_Lovers', 'handle' => 'Novo no CarGram',        'avatar' => 'https://quatrorodas.abril.com.br/wp-content/uploads/2021/02/Shelby-GT500-CR-Fibra-de-Carbono-frente-e1612798942767.jpg?crop=1&resize=1212,909'],
            ['name' => 'CarDetail_BR',   'handle' => 'Sugerido para você',     'avatar' => 'https://i0.wp.com/pneu100.com/wp-content/uploads/2022/10/5-modelos-de-carros-lancados-no-Brasil-em-2022.jpg?fit=1000%2C500&ssl=1'],
        ];

        return view('feed.index', compact('stories', 'posts', 'suggestions'));
    }
}
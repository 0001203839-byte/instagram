@extends('layouts.app')

@section('title', 'Vídeos - CarGram')

@section('content')

<div style="max-width:935px;margin:0 auto;padding:24px 20px 60px;">

    <h2 style="font-size:20px;font-weight:700;margin-bottom:24px;">🎬 Vídeos de Carros</h2>

    <div style="display:grid;grid-template-columns:repeat(2,1fr);gap:24px;">

        @foreach($videos as $video)
        <div style="background:#fff;border:1px solid #dbdbdb;border-radius:12px;overflow:hidden;">

            {{-- Header --}}
            <div style="display:flex;align-items:center;gap:10px;padding:12px 16px;">
                <img src="{{ $video['avatar'] }}" style="width:40px;height:40px;border-radius:50%;object-fit:cover;">
                <div>
                    <p style="font-weight:600;font-size:14px;margin:0;">{{ $video['user'] }}</p>
                </div>
            </div>

            {{-- Video YouTube embed --}}
            <div style="position:relative;padding-bottom:56.25%;height:0;overflow:hidden;">
                <iframe
                    src="https://www.youtube.com/embed/{{ $video['youtube'] }}?rel=0&modestbranding=1"
                    style="position:absolute;top:0;left:0;width:100%;height:100%;border:none;"
                    allowfullscreen
                    loading="lazy">
                </iframe>
            </div>

            {{-- Ações --}}
            <div style="padding:10px 16px 4px;display:flex;gap:12px;">
                <button class="like_btn" style="background:none;border:none;font-size:22px;cursor:pointer;">
                    <i class="far fa-heart"></i>
                </button>
                <button style="background:none;border:none;font-size:22px;cursor:pointer;">
                    <i class="far fa-comment"></i>
                </button>
                <button style="background:none;border:none;font-size:22px;cursor:pointer;">
                    <i class="far fa-paper-plane"></i>
                </button>
                <button style="background:none;border:none;font-size:22px;cursor:pointer;margin-left:auto;">
                    <i class="far fa-bookmark"></i>
                </button>
            </div>

            {{-- Curtidas --}}
            <div class="post_likes" style="padding:0 16px 4px;">
                <p style="font-weight:600;font-size:14px;margin:0;">{{ number_format($video['likes'], 0, ',', '.') }} curtidas</p>
            </div>

            {{-- Legenda --}}
            <div style="padding:0 16px 12px;font-size:14px;">
                <span style="font-weight:600;">{{ $video['user'] }}</span> {{ $video['caption'] }}
            </div>

        </div>
        @endforeach

    </div>
</div>

@endsection
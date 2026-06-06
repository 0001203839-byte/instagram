@extends('layouts.app')

@section('title', 'Feed - CarGram')

@section('content')

<div class="second_container">

    <div class="main_section">
        <div class="posts_container">

            {{-- Stories --}}
            <div class="stories">
                <div class="owl-carousel items">
                    @foreach($stories as $story)
                    <div class="item" style="display:flex;flex-direction:column;align-items:center;gap:6px;cursor:pointer;">
                        <div style="background:linear-gradient(45deg,#f09433,#e6683c,#dc2743,#cc2366,#bc1888);border-radius:50%;padding:2px;">
                            <img src="{{ $story['avatar'] }}" style="width:56px;height:56px;border-radius:50%;border:2px solid white;">
                        </div>
                        <p style="font-size:11px;color:#999;margin:0;max-width:64px;text-align:center;overflow:hidden;text-overflow:ellipsis;white-space:nowrap;">{{ $story['user'] }}</p>
                    </div>
                    @endforeach
                </div>
            </div>

            {{-- Posts --}}
            <div class="posts">
                @foreach($posts as $post)
                    @include('components.post-card', ['post' => $post])
                @endforeach
            </div>

        </div>
    </div>

    {{-- Painel lateral --}}
    <div class="followers_container">
        @include('components.user-card', [
            'name'       => 'Paull_Walker',
            'handle'     => 'Sua conta',
            'avatar'     => 'https://i.redd.it/d3yppj9g65da1.jpg',
            'showSwitch' => true
        ])

        <div class="suggestions">
            <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:16px;">
                <h4 style="font-size:14px;font-weight:600;color:#999;margin:0;">Sugestões para você</h4>
                <a href="{{ url('/explorar') }}" style="font-size:12px;font-weight:700;color:#262626;">Ver tudo</a>
            </div>
            @foreach($suggestions as $s)
                @include('components.user-card', [
                    'name'       => $s['name'],
                    'handle'     => $s['handle'],
                    'avatar'     => $s['avatar'],
                    'showFollow' => true
                ])
            @endforeach
        </div>
    </div>

</div>

{{-- Modal Comentários --}}
<div class="modal fade" id="message_modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Comentários</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <div style="display:flex;gap:12px;margin-bottom:16px;">
                    <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=44&h=44&fit=crop&crop=face" style="width:44px;height:44px;border-radius:50%;">
                    <div>
                        <p style="margin:0;font-size:14px;"><strong>Ferrari_Brasil</strong> Que máquina incrível! 🔥</p>
                        <p style="margin:4px 0 0;font-size:12px;color:#999;">2h &nbsp; Curtir &nbsp; Responder</p>
                    </div>
                </div>
                <div style="display:flex;gap:12px;">
                    <img src="https://images.unsplash.com/photo-1522075469751-3a6694fb2f61?w=44&h=44&fit=crop&crop=face" style="width:44px;height:44px;border-radius:50%;">
                    <div>
                        <p style="margin:0;font-size:14px;"><strong>Porsche_Fan</strong> Esse motor é puro som! 🎵</p>
                        <p style="margin:4px 0 0;font-size:12px;color:#999;">5h &nbsp; Curtir &nbsp; Responder</p>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div style="display:flex;align-items:center;gap:10px;width:100%;">
                    <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=32&h=32&fit=crop&crop=face" style="width:32px;height:32px;border-radius:50%;">
                    <input type="text" placeholder="Adicione um comentário..." style="flex:1;border:none;outline:none;font-size:14px;">
                    <button style="background:none;border:none;color:#0095f6;font-weight:600;">Publicar</button>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
<script>
$(document).ready(function(){
    $(".owl-carousel.items").owlCarousel({
        loop: false,
        margin: 12,
        nav: false,
        dots: false,
        responsive: {
            0:   { items: 4 },
            576: { items: 5 },
            768: { items: 6 }
        }
    });

    $(document).on('click', '.like_btn', function(){
        var $icon = $(this).find('i');
        if($icon.hasClass('far')){
            $icon.removeClass('far').addClass('fas').css('color','#ed4956');
        } else {
            $icon.removeClass('fas').addClass('far').css('color','');
        }
    });
});
</script>
@endsection
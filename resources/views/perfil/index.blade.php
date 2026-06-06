@extends('layouts.app')

@section('title', 'Perfil - CarGram')

@section('content')

<div class="profile_page">

    <div class="profile_header">
        <div class="profile_pic">
            <div style="background:linear-gradient(45deg,#f09433,#e6683c,#dc2743,#cc2366,#bc1888);border-radius:50%;padding:3px;display:inline-block;">
                <img src="{{ $user['avatar'] }}" alt="{{ $user['username'] }}" class="profile_avatar">
            </div>
        </div>

        <div class="profile_info">
            <div class="profile_top">
                <h2 class="username">{{ $user['username'] }}</h2>
                <button class="btn btn-outline-secondary btn-sm" style="border-radius:8px;font-weight:600;">Editar perfil</button>
                <button class="btn btn-outline-secondary btn-sm"><i class="fas fa-cog"></i></button>
            </div>

            <div class="profile_stats">
                <div class="stat">
                    <span class="stat_num">{{ number_format($user['posts']) }}</span>
                    <span class="stat_label">publicações</span>
                </div>
                <div class="stat">
                    <span class="stat_num">{{ number_format($user['followers']) }}</span>
                    <span class="stat_label">seguidores</span>
                </div>
                <div class="stat">
                    <span class="stat_num">{{ number_format($user['following']) }}</span>
                    <span class="stat_label">seguindo</span>
                </div>
            </div>

            <div class="profile_bio">
                <p style="font-weight:600;">{{ $user['name'] }}</p>
                <p>{{ $user['bio'] }}</p>
                <a href="#" style="color:#00376b;font-weight:600;">{{ $user['website'] }}</a>
            </div>
        </div>
    </div>

    {{-- Highlights --}}
    <div class="profile_highlights">
        @foreach($highlights as $h)
        <div class="highlight_item">
            <div class="highlight_ring">
                <img src="{{ $h['cover'] }}" alt="{{ $h['title'] }}">
            </div>
            <p>{{ $h['title'] }}</p>
        </div>
        @endforeach
        <div class="highlight_item">
            <div class="highlight_ring add_highlight">
                <i class="fas fa-plus" style="font-size:24px;color:#999;"></i>
            </div>
            <p>Novo</p>
        </div>
    </div>

    {{-- Tabs --}}
    <div class="profile_tabs">
        <button class="tab_btn active_tab">
            <i class="fas fa-th"></i>
            <span class="d-none d-md-inline ms-1">PUBLICAÇÕES</span>
        </button>
        <button class="tab_btn">
            <i class="fas fa-film"></i>
            <span class="d-none d-md-inline ms-1">REELS</span>
        </button>
        <button class="tab_btn">
            <i class="far fa-bookmark"></i>
            <span class="d-none d-md-inline ms-1">SALVOS</span>
        </button>
        <button class="tab_btn">
            <i class="fas fa-user-tag"></i>
            <span class="d-none d-md-inline ms-1">MARCAÇÕES</span>
        </button>
    </div>

    {{-- Grid de posts --}}
    <div class="profile_grid">
        @foreach($profilePosts as $post)
        <div class="grid_item"
             data-bs-toggle="modal"
             data-bs-target="#post_modal"
             data-image="{{ $post['image'] }}"
             data-likes="{{ number_format($post['likes']) }}"
             data-video="{{ $post['is_video'] ? '1' : '0' }}">
            <img src="{{ $post['image'] }}" alt="Post">
            <div class="grid_overlay">
                <span><i class="fas fa-heart"></i> {{ number_format($post['likes']) }}</span>
                <span><i class="fas fa-comment"></i> {{ $post['comments_count'] }}</span>
            </div>
            @if($post['is_video'])
            <div class="video_badge"><i class="fas fa-play"></i></div>
            @endif
        </div>
        @endforeach
    </div>

</div>

{{-- Modal post --}}
<div class="modal fade" id="post_modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-body p-0">
                <div class="row g-0">
                    <div class="col-md-7">
                        <img id="modal_post_img" src="" style="width:100%;height:600px;object-fit:cover;">
                    </div>
                    <div class="col-md-5 d-flex flex-column">
                        <div class="p-3 border-bottom d-flex align-items-center gap-2">
                            <img src="{{ $user['avatar'] }}" style="width:40px;height:40px;border-radius:50%;">
                            <strong>{{ $user['username'] }}</strong>
                        </div>
                        <div class="p-3 flex-grow-1">
                            <p style="font-size:14px;">
                                <strong>{{ $user['username'] }}</strong>
                                🔥 Que máquina incrível! #CarGram #Supercar
                            </p>
                            <div style="margin-top:12px;">
                                <p style="font-size:14px;margin:0;"><strong>Ferrari_Brasil</strong> Que carro lindo! 😍</p>
                                <p style="font-size:14px;margin:4px 0;"><strong>Porsche_Fan</strong> Sonho de consumo! 🔥</p>
                            </div>
                        </div>
                        <div class="p-3 border-top">
                            <div style="display:flex;gap:12px;margin-bottom:12px;">
                                <button class="like_btn" style="background:none;border:none;font-size:22px;"><i class="far fa-heart"></i></button>
                                <button style="background:none;border:none;font-size:22px;"><i class="far fa-comment"></i></button>
                                <button style="background:none;border:none;font-size:22px;"><i class="far fa-paper-plane"></i></button>
                                <button style="background:none;border:none;font-size:22px;margin-left:auto;"><i class="far fa-bookmark"></i></button>
                            </div>
                            <p class="post_likes" style="font-weight:600;font-size:14px;margin-bottom:8px;" id="modal_likes">0 curtidas</p>
                            <div class="d-flex align-items-center gap-2">
                                <input type="text" placeholder="Adicione um comentário..." style="flex:1;border:none;outline:none;font-size:14px;">
                                <button class="publicar_btn" style="background:none;border:none;color:#0095f6;font-weight:600;">Publicar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button type="button" class="btn-close position-absolute top-0 end-0 m-2" data-bs-dismiss="modal"></button>
        </div>
    </div>
</div>

@endsection

@section('scripts')
<script>
$(document).on('click', '.grid_item', function(){
    var img    = $(this).data('image');
    var likes  = $(this).data('likes');
    $('#modal_post_img').attr('src', img);
    $('#modal_likes').text(likes + ' curtidas');
});
</script>
@endsection
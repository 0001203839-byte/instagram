@extends('layouts.app')

@section('title', 'Explorar - CarGram')

@section('content')

<div class="explore_page">

    {{-- Busca --}}
    <div class="explore_search" style="margin-bottom:16px;position:relative;">
        <i class="fas fa-search" style="position:absolute;left:14px;top:50%;transform:translateY(-50%);color:#8e8e8e;"></i>
        <input type="text" placeholder="Buscar carros, marcas, modelos..." class="explore_input">
    </div>

    {{-- Filtros --}}
    <div class="explore_filters">
        @foreach($filters as $filter)
        <button class="filter_btn {{ $filter['active'] ? 'active_filter' : '' }}" data-category="{{ strtolower($filter['label']) }}">
            <i class="{{ $filter['icon'] }}"></i>
            {{ $filter['label'] }}
        </button>
        @endforeach
    </div>

    {{-- Grid --}}
    <div class="explore_grid" id="explore_grid">
        @foreach($explorePosts as $post)
        <div class="explore_item {{ $post['featured'] ? 'featured' : '' }}" data-category="{{ $post['category'] }}" data-bs-toggle="modal" data-bs-target="#explore_modal">
            <img src="{{ $post['image'] }}" alt="Post">
            <div class="explore_overlay">
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

{{-- Modal --}}
<div class="modal fade" id="explore_modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-body p-0">
                <div class="row g-0">
                    <div class="col-md-7">
                        <img src="https://images.unsplash.com/photo-1592198084033-aade902d1aae?w=800&h=800&fit=crop" style="width:100%;height:600px;object-fit:cover;">
                    </div>
                    <div class="col-md-5 d-flex flex-column">
                        <div class="p-3 border-bottom d-flex align-items-center gap-2">
                            <img src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?w=40&h=40&fit=crop&crop=face" style="width:40px;height:40px;border-radius:50%;">
                            <strong>Ferrari_Brasil</strong>
                            <button class="ms-auto follow_text" style="background:none;border:none;color:#0095f6;font-weight:600;">Seguir</button>
                        </div>
                        <div class="p-3 flex-grow-1">
                            <p style="font-size:14px;"><strong>Ferrari_Brasil</strong> 🔥 Que máquina incrível! #CarGram</p>
                        </div>
                        <div class="p-3 border-top">
                            <div class="d-flex align-items-center gap-2">
                                <input type="text" placeholder="Adicione um comentário..." style="flex:1;border:none;outline:none;font-size:14px;">
                                <button style="background:none;border:none;color:#0095f6;font-weight:600;">Publicar</button>
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
$(document).ready(function(){
    $(document).on('click', '.filter_btn', function(){
        $('.filter_btn').removeClass('active_filter');
        $(this).addClass('active_filter');

        var category = $(this).data('category');

        if(category === 'tudo'){
            $('.explore_item').show();
        } else {
            $('.explore_item').each(function(){
                if($(this).data('category') === category){
                    $(this).show();
                } else {
                    $(this).hide();
                }
            });
        }
    });
});
</script>
@endsection
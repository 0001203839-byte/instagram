<div class="post_item">
    <div class="post_header">
        <div class="user_info">
            <img src="{{ $post['avatar'] }}" alt="{{ $post['user'] }}" style="width:44px;height:44px;border-radius:50%;object-fit:cover;margin-right:10px;">
            <div class="info">
                <p style="font-weight:600;font-size:14px;margin:0;">{{ $post['user'] }}</p>
                <p style="font-size:12px;color:#999;margin:0;">{{ $post['location'] ?? 'Brasil' }}</p>
            </div>
        </div>
        <button style="background:none;border:none;font-size:20px;">
            <i class="fas fa-ellipsis-h"></i>
        </button>
    </div>

    <div class="post_img">
        <img src="{{ $post['image'] }}" alt="Post" style="width:100%;max-height:600px;object-fit:cover;display:block;">
    </div>

    <div class="post_actions">
        <div class="left_icons" style="display:flex;gap:8px;">
            <button class="like_btn" style="background:none;border:none;font-size:26px;color:#262626;padding:4px;">
                <i class="far fa-heart"></i>
            </button>
            <button style="background:none;border:none;font-size:26px;padding:4px;">
                <i class="far fa-comment"></i>
            </button>
            <button style="background:none;border:none;font-size:26px;padding:4px;">
                <i class="far fa-paper-plane"></i>
            </button>
        </div>
        <button style="background:none;border:none;font-size:26px;padding:4px;">
            <i class="far fa-bookmark"></i>
        </button>
    </div>

    <div class="post_likes" style="padding:0 16px 4px;">
        <p style="font-weight:600;font-size:14px;margin:0;">{{ number_format($post['likes'], 0, ',', '.') }} curtidas</p>
    </div>

    <div style="padding:0 16px 4px;font-size:14px;">
        <span style="font-weight:600;">{{ $post['user'] }}</span> {{ $post['caption'] }}
    </div>

    @if(isset($post['comments']) && count($post['comments']) > 0)
    <div style="padding:0 16px 4px;">
        <p style="font-size:14px;color:#999;cursor:pointer;">
            Ver todos os {{ count($post['comments']) }} comentários
        </p>
        @foreach($post['comments'] as $comment)
        <p style="font-size:14px;margin:2px 0;">
            <span style="font-weight:600;">{{ $comment['user'] }}</span> {{ $comment['text'] }}
        </p>
        @endforeach
    </div>
    @endif

    <div style="padding:0 16px 8px;">
        <p style="font-size:10px;color:#999;text-transform:uppercase;letter-spacing:0.04em;">{{ $post['time'] }}</p>
    </div>

    <div class="post_comments_list" style="padding:0 16px 4px;"></div>

    <div class="add_comment" style="display:flex;align-items:center;justify-content:space-between;padding:10px 16px;border-top:1px solid #dbdbdb;gap:10px;">
        <input type="text" placeholder="Adicione um comentário..." style="border:none;outline:none;font-size:14px;flex:1;background:transparent;">
        <button class="publicar_btn" style="background:none;border:none;color:#0095f6;font-weight:600;font-size:14px;opacity:0.4;">Publicar</button>
    </div>
</div>
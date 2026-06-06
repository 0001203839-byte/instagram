<div class="cart">
    <div style="display:flex;align-items:center;gap:12px;">
        <img src="{{ $avatar ?? 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=56&h=56&fit=crop&crop=face' }}"
             alt="{{ $name ?? 'Usuário' }}"
             style="width:44px;height:44px;border-radius:50%;object-fit:cover;border:1px solid #dbdbdb;">
        <div>
            <p style="font-size:14px;font-weight:600;margin:0;">{{ $name ?? 'usuario_cargram' }}</p>
            <p style="font-size:12px;color:#999;margin:0;">{{ $handle ?? 'CarGram User' }}</p>
        </div>
    </div>

    @if(isset($showFollow) && $showFollow)
        <button class="follow_text" style="color:#0095f6;font-weight:600;background:none;border:none;font-size:13px;">Seguir</button>
    @elseif(isset($showSwitch) && $showSwitch)
        <a href="#" style="color:#0095f6;font-weight:600;font-size:13px;">Trocar</a>
    @elseif(isset($showRemove) && $showRemove)
        <a href="#" style="color:#999;font-size:13px;">X</a>
    @endif
</div>
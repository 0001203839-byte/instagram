<div class="nav_menu">
    <div class="fix_top">
        <div class="nav d-none d-md-flex">
            <div class="logo">
                <a href="{{ url('/') }}">
                    <span class="logo-text">
                        <i class="fas fa-car"></i>
                        <span class="d-none d-lg-inline"> CarGram</span>
                    </span>
                </a>
            </div>

            <div class="menu">
                <ul>
                    <li>
                        <a class="{{ request()->is('/') ? 'active' : '' }}" href="{{ url('/') }}">
                            <i class="fas fa-home"></i>
                            <span class="d-none d-lg-block">Início</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" data-bs-toggle="offcanvas" data-bs-target="#buscaPanel">
                            <i class="fas fa-search"></i>
                            <span class="d-none d-lg-block">Buscar</span>
                        </a>
                    </li>
                    <li>
                        <a class="{{ request()->is('explorar*') ? 'active' : '' }}" href="{{ url('/explorar') }}">
                            <i class="fas fa-compass"></i>
                            <span class="d-none d-lg-block">Explorar</span>
                        </a>
                    </li>
                    <li>
                        <a class="{{ request()->is('videos*') ? 'active' : '' }}" href="{{ url('/videos') }}">
                            <i class="fas fa-video"></i>
                            <span class="d-none d-lg-block">Vídeos</span>
                        </a>
                    </li>
                    <li>
                        <a class="{{ request()->is('mensagens*') ? 'active' : '' }}" href="{{ url('/mensagens') }}">
                            <i class="fas fa-paper-plane"></i>
                            <span class="d-none d-lg-block">Mensagens</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" data-bs-toggle="offcanvas" data-bs-target="#notificacoesPanel">
                            <i class="fas fa-heart"></i>
                            <span class="d-none d-lg-block">Notificações</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#create_modal">
                            <i class="fas fa-plus-square"></i>
                            <span class="d-none d-lg-block">Criar</span>
                        </a>
                    </li>
                    <li>
                        <a class="{{ request()->is('perfil*') ? 'active' : '' }}" href="{{ url('/perfil') }}">
                            <img src="https://i.redd.it/d3yppj9g65da1.jpg" alt="perfil" style="width:28px;height:28px;border-radius:50%;">
                            <span class="d-none d-lg-block">Perfil</span>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="more">
                <div class="btn-group dropup">
                    <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown">
                        <i class="fas fa-bars"></i>
                        <span class="d-none d-lg-block">Mais</span>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#" data-bs-toggle="offcanvas" data-bs-target="#configPanel"><span>Configurações</span> <i class="fas fa-cog"></i></a></li>
                        <li><a class="dropdown-item" href="#" data-bs-toggle="offcanvas" data-bs-target="#atividadePanel"><span>Sua atividade</span> <i class="fas fa-history"></i></a></li>
                        <li><a class="dropdown-item" href="#" data-bs-toggle="offcanvas" data-bs-target="#salvosPanel"><span>Salvos</span> <i class="fas fa-bookmark"></i></a></li>
                        <li><a class="dropdown-item" href="{{ url('/login') }}"><span>Sair</span> <i class="fas fa-sign-out-alt"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="nav_bottom d-flex d-md-none">
        <a href="{{ url('/') }}"><i class="fas fa-home"></i></a>
        <a href="{{ url('/explorar') }}"><i class="fas fa-compass"></i></a>
        <a href="{{ url('/videos') }}"><i class="fas fa-video"></i></a>
        <a href="#" data-bs-toggle="modal" data-bs-target="#create_modal"><i class="fas fa-plus-square"></i></a>
        <a href="{{ url('/perfil') }}">
            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=32&h=32&fit=crop&crop=face" style="width:28px;height:28px;border-radius:50%;">
        </a>
    </div>
</div>

{{-- Modal Criar Post --}}
<div class="modal fade" id="create_modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Criar novo post</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body text-center p-4">
                <i class="fas fa-car" style="font-size:64px;color:#ccc;margin-bottom:20px;"></i>
                <p style="margin-bottom:16px;">Arraste fotos e vídeos de carros aqui</p>
                <button class="btn btn-primary">Selecionar do computador</button>
            </div>
        </div>
    </div>
</div>

{{-- PAINEL BUSCA --}}
<div class="offcanvas offcanvas-start" tabindex="-1" id="buscaPanel" style="margin-left:245px;width:380px;">
    <div class="offcanvas-header" style="border-bottom:1px solid #dbdbdb;">
        <h5 class="offcanvas-title" style="font-weight:700;">Buscar</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
    </div>
    <div class="offcanvas-body p-0">
        <div style="padding:16px;">
            <div style="position:relative;">
                <i class="fas fa-search" style="position:absolute;left:12px;top:50%;transform:translateY(-50%);color:#999;"></i>
                <input type="text" id="busca_input" placeholder="Buscar jogadores, carros..."
                    style="width:100%;background:#efefef;border:none;border-radius:10px;padding:10px 16px 10px 36px;font-size:14px;outline:none;">
            </div>
        </div>

        <p style="padding:0 16px 8px;font-size:13px;font-weight:600;color:#999;">Recentes</p>

        <div id="busca_resultados">
            <div style="display:flex;align-items:center;gap:12px;padding:10px 16px;cursor:pointer;">
                <img src="https://static.wikia.nocookie.net/futebol/images/0/07/Hulk_Galo.jpg/revision/latest?cb=20220105183923" style="width:44px;height:44px;border-radius:50%;object-fit:cover;">
                <div><p style="font-size:14px;font-weight:600;margin:0;">Hulk_Paraiba</p><p style="font-size:12px;color:#999;margin:0;">Hulk Oficial</p></div>
            </div>
            <div style="display:flex;align-items:center;gap:12px;padding:10px 16px;cursor:pointer;">
                <img src="https://admin.cnnbrasil.com.br/wp-content/uploads/sites/12/2025/08/kaio_jorge_cruzeiro_gol_6beda6-e1755991275740.jpg?w=1200&h=900&crop=1" style="width:44px;height:44px;border-radius:50%;object-fit:cover;">
                <div><p style="font-size:14px;font-weight:600;margin:0;">Kaio_Jorge</p><p style="font-size:12px;color:#999;margin:0;">Kaio Jorge Oficial</p></div>
            </div>
            <div style="display:flex;align-items:center;gap:12px;padding:10px 16px;cursor:pointer;">
                <img src="https://www.band.com.br/_next/image?url=https%3A%2F%2Fimg.band.com.br%2Fimage%2F2025%2F12%2F13%2Fleo-pereira-comemorando-gol-153411.jpg&w=3840&q=75" style="width:44px;height:44px;border-radius:50%;object-fit:cover;">
                <div><p style="font-size:14px;font-weight:600;margin:0;">Leo_Pereira</p><p style="font-size:12px;color:#999;margin:0;">Léo Pereira Oficial</p></div>
            </div>
            <div style="display:flex;align-items:center;gap:12px;padding:10px 16px;cursor:pointer;">
                <img src="https://www.areavip.com.br/wp-content/uploads/2026/05/arrascaeta-696x389.jpg" style="width:44px;height:44px;border-radius:50%;object-fit:cover;">
                <div><p style="font-size:14px;font-weight:600;margin:0;">Arrascaeta</p><p style="font-size:12px;color:#999;margin:0;">Arrascaeta Oficial</p></div>
            </div>
        </div>
    </div>
</div>

{{-- PAINEL NOTIFICAÇÕES --}}
<div class="offcanvas offcanvas-start" tabindex="-1" id="notificacoesPanel" style="margin-left:245px;width:380px;">
    <div class="offcanvas-header" style="border-bottom:1px solid #dbdbdb;">
        <h5 class="offcanvas-title" style="font-weight:700;">Notificações</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
    </div>
    <div class="offcanvas-body p-0">
        <p style="padding:12px 16px;font-size:13px;font-weight:600;color:#999;">Recentes</p>
        <div style="display:flex;align-items:center;gap:12px;padding:12px 16px;border-bottom:1px solid #f5f5f5;">
            <img src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?w=44&h=44&fit=crop&crop=face" style="width:44px;height:44px;border-radius:50%;">
            <p style="font-size:14px;flex:1;margin:0;"><span style="font-weight:600;">Ferrari_Brasil</span> curtiu sua foto. <span style="color:#999;">2h</span></p>
            <img src="https://images.unsplash.com/photo-1592198084033-aade902d1aae?w=44&h=44&fit=crop" style="width:44px;height:44px;border-radius:4px;">
        </div>
        <div style="display:flex;align-items:center;gap:12px;padding:12px 16px;border-bottom:1px solid #f5f5f5;">
            <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=44&h=44&fit=crop&crop=face" style="width:44px;height:44px;border-radius:50%;">
            <p style="font-size:14px;flex:1;margin:0;"><span style="font-weight:600;">Porsche_News</span> começou a te seguir. <span style="color:#999;">5h</span></p>
            <button class="follow_text" style="font-size:13px;">Seguir</button>
        </div>
        <div style="display:flex;align-items:center;gap:12px;padding:12px 16px;border-bottom:1px solid #f5f5f5;">
            <img src="https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?w=44&h=44&fit=crop&crop=face" style="width:44px;height:44px;border-radius:50%;">
            <p style="font-size:14px;flex:1;margin:0;"><span style="font-weight:600;">Lamborghini_BR</span> comentou: "Que carro incrível! 🔥" <span style="color:#999;">8h</span></p>
            <img src="https://images.unsplash.com/photo-1503376780353-7e6692767b70?w=44&h=44&fit=crop" style="width:44px;height:44px;border-radius:4px;">
        </div>
        <div style="display:flex;align-items:center;gap:12px;padding:12px 16px;border-bottom:1px solid #f5f5f5;">
            <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=44&h=44&fit=crop&crop=face" style="width:44px;height:44px;border-radius:50%;">
            <p style="font-size:14px;flex:1;margin:0;"><span style="font-weight:600;">BMW_M_World</span> curtiu sua foto. <span style="color:#999;">1d</span></p>
            <img src="https://images.unsplash.com/photo-1555215695-3004980ad54e?w=44&h=44&fit=crop" style="width:44px;height:44px;border-radius:4px;">
        </div>
        <div style="display:flex;align-items:center;gap:12px;padding:12px 16px;border-bottom:1px solid #f5f5f5;">
            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=44&h=44&fit=crop&crop=face" style="width:44px;height:44px;border-radius:50%;">
            <p style="font-size:14px;flex:1;margin:0;"><span style="font-weight:600;">Audi_Sport_BR</span> começou a te seguir. <span style="color:#999;">2d</span></p>
            <button class="follow_text" style="font-size:13px;">Seguir</button>
        </div>
    </div>
</div>

{{-- PAINEL CONFIGURAÇÕES --}}
<div class="offcanvas offcanvas-end" tabindex="-1" id="configPanel" style="width:380px;">
    <div class="offcanvas-header" style="border-bottom:1px solid #dbdbdb;">
        <h5 class="offcanvas-title" style="font-weight:700;">Configurações</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
    </div>
    <div class="offcanvas-body p-0">
        @foreach([['icon'=>'fas fa-user','label'=>'Editar perfil'],['icon'=>'fas fa-lock','label'=>'Privacidade da conta'],['icon'=>'fas fa-bell','label'=>'Notificações'],['icon'=>'fas fa-shield-alt','label'=>'Segurança'],['icon'=>'fas fa-eye-slash','label'=>'Conteúdo que você vê'],['icon'=>'fas fa-comment-slash','label'=>'Comentários'],['icon'=>'fas fa-share-alt','label'=>'Compartilhamento'],['icon'=>'fas fa-moon','label'=>'Modo escuro'],['icon'=>'fas fa-language','label'=>'Idioma'],['icon'=>'fas fa-info-circle','label'=>'Sobre o CarGram']] as $item)
        <div style="display:flex;align-items:center;gap:16px;padding:16px 20px;border-bottom:1px solid #f5f5f5;cursor:pointer;" onmouseover="this.style.background='#fafafa'" onmouseout="this.style.background='#fff'">
            <i class="{{ $item['icon'] }}" style="width:24px;text-align:center;font-size:18px;color:#262626;"></i>
            <p style="margin:0;font-size:15px;">{{ $item['label'] }}</p>
            <i class="fas fa-chevron-right" style="margin-left:auto;color:#999;font-size:12px;"></i>
        </div>
        @endforeach
    </div>
</div>

{{-- PAINEL SUA ATIVIDADE --}}
<div class="offcanvas offcanvas-end" tabindex="-1" id="atividadePanel" style="width:380px;">
    <div class="offcanvas-header" style="border-bottom:1px solid #dbdbdb;">
        <h5 class="offcanvas-title" style="font-weight:700;">Sua atividade</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
    </div>
    <div class="offcanvas-body p-0">
        <div style="padding:16px;border-bottom:1px solid #dbdbdb;">
            <p style="font-size:13px;color:#999;margin:0;">Resumo da semana</p>
            <p style="font-size:28px;font-weight:700;margin:4px 0;">2h 34min</p>
            <p style="font-size:13px;color:#0095f6;margin:0;">↑ 12% comparado à semana passada</p>
        </div>
        @foreach([['icon'=>'fas fa-heart','label'=>'Curtidas','value'=>'247'],['icon'=>'fas fa-comment','label'=>'Comentários','value'=>'38'],['icon'=>'fas fa-user-plus','label'=>'Novos seguidores','value'=>'14'],['icon'=>'fas fa-bookmark','label'=>'Posts salvos','value'=>'23'],['icon'=>'fas fa-share','label'=>'Compartilhamentos','value'=>'9']] as $item)
        <div style="display:flex;align-items:center;gap:16px;padding:16px 20px;border-bottom:1px solid #f5f5f5;">
            <i class="{{ $item['icon'] }}" style="width:24px;text-align:center;font-size:18px;color:#262626;"></i>
            <p style="margin:0;font-size:15px;flex:1;">{{ $item['label'] }}</p>
            <span style="font-weight:600;font-size:15px;">{{ $item['value'] }}</span>
        </div>
        @endforeach
    </div>
</div>

{{-- PAINEL SALVOS --}}
<div class="offcanvas offcanvas-end" tabindex="-1" id="salvosPanel" style="width:420px;">
    <div class="offcanvas-header" style="border-bottom:1px solid #dbdbdb;">
        <h5 class="offcanvas-title" style="font-weight:700;">Salvos</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
    </div>
    <div class="offcanvas-body p-0">
        <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:2px;padding:2px;">
            @foreach(['https://images.unsplash.com/photo-1592198084033-aade902d1aae?w=200&h=200&fit=crop','https://images.unsplash.com/photo-1503376780353-7e6692767b70?w=200&h=200&fit=crop','https://images.unsplash.com/photo-1471444928139-48c5bf5173f8?w=200&h=200&fit=crop','https://images.unsplash.com/photo-1555215695-3004980ad54e?w=200&h=200&fit=crop','https://images.unsplash.com/photo-1606664515524-ed2f786a0bd6?w=200&h=200&fit=crop','https://images.unsplash.com/photo-1494976388531-d1058494cdd8?w=200&h=200&fit=crop'] as $img)
            <div style="aspect-ratio:1;overflow:hidden;cursor:pointer;">
                <img src="{{ $img }}" style="width:100%;height:100%;object-fit:cover;transition:transform .2s;" onmouseover="this.style.transform='scale(1.05)'" onmouseout="this.style.transform='scale(1)'">
            </div>
            @endforeach
        </div>
    </div>
</div>
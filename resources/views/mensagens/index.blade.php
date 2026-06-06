@extends('layouts.app')

@section('title', 'Mensagens - CarGram')

@section('content')

<div class="messages_page">

    {{-- Lista de conversas --}}
    <div class="messages_list">
        <div class="messages_header">
            <h3>{{ $username }}</h3>
            <button style="background:none;border:none;"><i class="fas fa-edit" style="font-size:20px;"></i></button>
        </div>

        <div class="messages_tabs">
            <button class="msg_tab active_msg_tab">Mensagens</button>
            <button class="msg_tab">Solicitações</button>
        </div>

        <div class="conversation_list">
            @foreach($conversations as $conv)
            <div class="conversation_item {{ $conv['active'] ? 'active_conv' : '' }}">
                <div class="conv_avatar">
                    <img src="{{ $conv['avatar'] }}" alt="{{ $conv['name'] }}">
                    @if($conv['online'])
                    <span class="online_dot"></span>
                    @endif
                </div>
                <div class="conv_info">
                    <p class="conv_name">{{ $conv['name'] }}</p>
                    <p class="conv_last">{{ $conv['last_message'] }} · {{ $conv['time'] }}</p>
                </div>
                @if($conv['unread'] > 0)
                <span class="unread_badge">{{ $conv['unread'] }}</span>
                @endif
            </div>
            @endforeach
        </div>
    </div>

    {{-- Área do chat --}}
    <div class="chat_area">
        <div class="chat_header">
            <div style="display:flex;align-items:center;gap:12px;">
                <img src="{{ $activeConv['avatar'] }}" style="width:44px;height:44px;border-radius:50%;">
                <div>
                    <p style="margin:0;font-weight:600;">{{ $activeConv['name'] }}</p>
                    <p style="margin:0;font-size:12px;color:#999;">{{ $activeConv['online'] ? 'Ativo agora' : 'Ativo há 3h' }}</p>
                </div>
            </div>
            <div style="display:flex;gap:16px;">
                <button style="background:none;border:none;font-size:22px;"><i class="fas fa-phone"></i></button>
                <button style="background:none;border:none;font-size:22px;"><i class="fas fa-video"></i></button>
                <button style="background:none;border:none;font-size:22px;"><i class="fas fa-info-circle"></i></button>
            </div>
        </div>

        <div class="chat_messages" id="chat_messages">
            @foreach($messages as $msg)
                @if($msg['mine'])
                <div class="message_row mine">
                    <div class="message_bubble mine_bubble">
                        @if(isset($msg['image']))
                            <img src="{{ $msg['image'] }}" style="max-width:200px;border-radius:12px;">
                        @else
                            {{ $msg['text'] }}
                        @endif
                    </div>
                    <span class="msg_time">{{ $msg['time'] }}</span>
                </div>
                @else
                <div class="message_row theirs">
                    <img src="{{ $activeConv['avatar'] }}" style="width:28px;height:28px;border-radius:50%;align-self:flex-end;">
                    <div class="message_bubble their_bubble">
                        @if(isset($msg['image']))
                            <img src="{{ $msg['image'] }}" style="max-width:200px;border-radius:12px;">
                        @else
                            {{ $msg['text'] }}
                        @endif
                    </div>
                    <span class="msg_time">{{ $msg['time'] }}</span>
                </div>
                @endif
            @endforeach
        </div>

        <div class="chat_input">
            <button style="background:none;border:none;font-size:22px;color:#0095f6;"><i class="far fa-smile"></i></button>
            <input type="text" id="msg_input" placeholder="Mensagem..." class="msg_text_input">
            <button style="background:none;border:none;font-size:20px;color:#0095f6;"><i class="fas fa-heart"></i></button>
            <button id="send_btn" style="background:none;border:none;color:#0095f6;font-weight:600;font-size:14px;opacity:0.4;">Enviar</button>
        </div>
    </div>

</div>

@endsection

@section('scripts')
<script>
$(document).ready(function(){
    var chatEl = document.getElementById('chat_messages');
    if(chatEl) chatEl.scrollTop = chatEl.scrollHeight;

    $('#msg_input').on('input', function(){
        $('#send_btn').css('opacity', $(this).val().length > 0 ? '1' : '0.4');
    });

    $('#send_btn').on('click', function(){
        var text = $('#msg_input').val().trim();
        if(!text) return;
        $('#chat_messages').append(
            '<div class="message_row mine">' +
            '<div class="message_bubble mine_bubble">' + text + '</div>' +
            '<span class="msg_time">Agora</span></div>'
        );
        $('#msg_input').val('');
        $('#send_btn').css('opacity','0.4');
        chatEl.scrollTop = chatEl.scrollHeight;
    });

    $('#msg_input').on('keypress', function(e){
        if(e.which === 13) $('#send_btn').click();
    });
});
</script>
@endsection
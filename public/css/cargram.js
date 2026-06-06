$(document).ready(function () {

    // LIKE TOGGLE COM CONTADOR
    $(document).on('click', '.like_btn', function () {
        var $icon = $(this).find('i');
        var $post = $(this).closest('.post_item');
        var $counter = $post.find('.post_likes p');
        var texto = $counter.text().replace(/\./g, '').replace(' curtidas', '').trim();
        var num = parseInt(texto);

        if ($icon.hasClass('far')) {
            $icon.removeClass('far').addClass('fas').css('color', '#ed4956');
            $counter.text((num + 1).toLocaleString('pt-BR') + ' curtidas');
        } else {
            $icon.removeClass('fas').addClass('far').css('color', '');
            $counter.text((num - 1).toLocaleString('pt-BR') + ' curtidas');
        }
    });

    // HABILITAR BOTÃO AO DIGITAR
    $(document).on('input', '.add_comment input', function () {
        var $btn = $(this).siblings('.publicar_btn');
        if ($(this).val().length > 0) {
            $btn.css('opacity', '1');
        } else {
            $btn.css('opacity', '0.4');
        }
    });

    // PUBLICAR COMENTÁRIO
    $(document).on('click', '.publicar_btn', function (e) {
        e.preventDefault();
        var $input = $(this).siblings('input');
        var text = $input.val().trim();
        if (text === '') return;

        var $post = $(this).closest('.post_item');
        var $lista = $post.find('.post_comments_list');

        $lista.append(
            '<p style="font-size:14px;margin:4px 16px;">' +
            '<span style="font-weight:600;">Você</span> ' +
            text + '</p>'
        );

        $input.val('');
        $(this).css('opacity', '0.4');
    });

    // ENTER PARA COMENTAR
    $(document).on('keypress', '.add_comment input', function (e) {
        if (e.which === 13) {
            $(this).siblings('.publicar_btn').click();
        }
    });

    // FOLLOW TOGGLE
    $(document).on('click', '.follow_text', function () {
        var $btn = $(this);
        if ($btn.text().trim() === 'Seguir') {
            $btn.text('Seguindo').css({ 'color': '#262626', 'font-weight': '400' });
        } else {
            $btn.text('Seguir').css({ 'color': '#0095f6', 'font-weight': '700' });
        }
    });

    // BOOKMARK TOGGLE
    $(document).on('click', '.fa-bookmark', function () {
        var $icon = $(this);
        if ($icon.hasClass('far')) {
            $icon.removeClass('far').addClass('fas').css('color', '#262626');
        } else {
            $icon.removeClass('fas').addClass('far').css('color', '');
        }
    });

    // PROFILE TABS
    $(document).on('click', '.tab_btn', function () {
        $('.tab_btn').removeClass('active_tab');
        $(this).addClass('active_tab');
    });

    // FILTER BUTTONS
    $(document).on('click', '.filter_btn', function () {
        $('.filter_btn').removeClass('active_filter');
        $(this).addClass('active_filter');
    });

    // MESSAGES SEND
    $(document).on('input', '.msg_text_input', function () {
        $('#send_btn').css('opacity', $(this).val().length > 0 ? '1' : '0.4');
    });

    // OWL CAROUSEL
    if ($(".owl-carousel.items").length) {
        $(".owl-carousel.items").owlCarousel({
            loop: false,
            margin: 8,
            nav: false,
            dots: false,
            responsive: {
                0:   { items: 4 },
                400: { items: 5 },
                576: { items: 6 },
                768: { items: 7 }
            }
        });
    }

    // BUSCA AO DIGITAR
    $(document).on('input', '#busca_input', function () {
        var termo = $(this).val().toLowerCase();
        var contas = [
            { name: 'Hulk_Paraiba', handle: 'Hulk Oficial',       img: 'https://static.wikia.nocookie.net/futebol/images/0/07/Hulk_Galo.jpg/revision/latest?cb=20220105183923' },
            { name: 'Kaio_Jorge',   handle: 'Kaio Jorge Oficial',  img: 'https://admin.cnnbrasil.com.br/wp-content/uploads/sites/12/2025/08/kaio_jorge_cruzeiro_gol_6beda6-e1755991275740.jpg?w=1200&h=900&crop=1' },
            { name: 'Leo_Pereira',  handle: 'Léo Pereira Oficial', img: 'https://www.band.com.br/_next/image?url=https%3A%2F%2Fimg.band.com.br%2Fimage%2F2025%2F12%2F13%2Fleo-pereira-comemorando-gol-153411.jpg&w=3840&q=75' },
            { name: 'Arrascaeta',   handle: 'Arrascaeta Oficial',  img: 'https://www.areavip.com.br/wp-content/uploads/2026/05/arrascaeta-696x389.jpg' },
        ];

        if (termo.length === 0) return;

        var html = '';
        contas.forEach(function (c) {
            if (c.name.toLowerCase().includes(termo) || c.handle.toLowerCase().includes(termo)) {
                html += '<div style="display:flex;align-items:center;gap:12px;padding:10px 16px;cursor:pointer;border-bottom:1px solid #f5f5f5;">' +
                    '<img src="' + c.img + '" style="width:44px;height:44px;border-radius:50%;object-fit:cover;">' +
                    '<div><p style="font-size:14px;font-weight:600;margin:0;">' + c.name + '</p>' +
                    '<p style="font-size:12px;color:#999;margin:0;">' + c.handle + '</p></div></div>';
            }
        });

        if (html === '') html = '<p style="padding:16px;color:#999;font-size:14px;">Nenhum resultado encontrado</p>';

        $('#busca_resultados').html(html);
    });

});
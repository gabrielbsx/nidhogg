var Item = {
    compra_bloqueada: false,

    /*
     * Construtor
     */
    init: function() {
        var self = this;

        $("form[name=comprar_item]").submit(function() {
            if(!window.buttonSubmitDisabled)
                self.confirm("Deseja mesmo comprar esse item?");
        });

        $(".close-light-box").click(function() {
           self.close_light_box();
        });
        // self.close_light_box();

        self.filterCharByServer();
    },

    filterCharByServer: function() {
        var self = this;
        var dataCharServer = $('[data-char-server]');
        $('[data-server]').click(function() {
            var server = $(this).attr('data-server');
            dataCharServer.find('input').attr('disabled', true);
            dataCharServer.find('input').prop('checked', false);
            dataCharServer.hide();
            $('[data-char-server='+server+']').find('input').removeAttr('disabled');
            $('[data-char-server='+server+']').css('display', 'flex');
            $('.js-cdz-inventory').fadeIn();
        });
    },

    /*
     * Close Light Box
     */
     close_light_box: function() {
        var self = this;

        $('.fixed-box').addClass('hide-opacity');
        $('#random-box').fadeOut();
        self.compra_bloqueada = false;
    },

    /*
     * Abre uma janela de para confirmar a compra
     */
    confirm: function(mensagem) {
        var self = this;
        var fixedBox = $('.fixed-box');
        var buy_box = $('#aviso-box-buy');

        fixedBox.removeClass('hide-opacity');
        buy_box.find('#aviso-box__title').html(mensagem);

        $('#aviso-box-random').hide();

        buy_box.show();

        /*buy_box.find("button[id=item-comprar]").off('click').click(function() {
            self.ajax_submit($("form[name=comprar_item]").serialize(), $("form[name=comprar_item] input[name=url]").val());
        });*/
    },

    /*
     * Abre uma janela do random box
     */
    open_random_box_window: function(data) {
        var self = this;

        $('#aviso-box-buy').hide();
        // volta o texto do botão
        $("form[name=comprar_item] button").html('Comprar');

        var random_box = $('#aviso-box-random');

        random_box.find('#random-box-name').html(data.random_box_name);
        random_box.find('#item-name').html(data.item_name);
        random_box.find('#item-img').attr('src', data.item_img);

        random_box.find('.js-ver-item').attr('href', data.redirect);

        $(".close-light-box").click(function() {
            // window.location.href = data.redirect;
            location.reload()
        });

        $('.fixed-box').removeClass('hide-opacity');
        random_box.show();

        random_box.find("#random-comprar").off('click').click(function() {
            self.confirm("Deseja mesmo comprar esse item novamente?");
        });

        // random_box.find("#comprar").click(function() {
        //     self.ajax_submit($("form[name=comprar_item]").serialize(), $("form[name=comprar_item] input[name=url]").val());
        // });
    },

    /*
     * Faz uma animação de countdown do Cash e da Milhagem no momento da compra
     */
    animacao: function() {
        var self = this;

        // cash
        var valor_cash = $(".valor-Cash").html();

        if (valor_cash) {
            valor_cash = parseInt(valor_cash.replace(".", ""));
            var cash_usuario = $(".total-de-cash").html();
            var cash_usuario = parseInt(cash_usuario.replace(".", ""));
            var novo_cash = cash_usuario - valor_cash;
        }

        // milhagem
        var valor_milhagem = $(".valor-Milhagem").html();

        if (valor_milhagem) {
            valor_milhagem = parseInt(valor_milhagem.replace(".", ""));
            var milhagem_usuario = $(".total-de-milhagem").html();
            milhagem_usuario = parseInt(milhagem_usuario.replace(".", ""));
            var novo_milhagem = milhagem_usuario - valor_milhagem;
        }

        var intervalo = setInterval(function() {
            //cash
            if (valor_cash) {
                if (cash_usuario > novo_cash) {
                    cash_usuario = cash_usuario - 10;
                    $(".total-de-cash").text(self.separador_de_milhar(cash_usuario));
                } else {
                    clearInterval(intervalo);
                    window.location.href = self.url;
                }
            // milhagem
            } else if (valor_milhagem) {
                if (milhagem_usuario > novo_milhagem) {
                    milhagem_usuario = milhagem_usuario - 10;
                    $(".total-de-milhagem").text(separador_de_milhar(milhagem_usuario));
                } else {
                    clearInterval(intervalo);
                    window.location.href = self.url;
                }
            } else {
                clearInterval(intervalo);
                window.location.href = self.url;
            }
        }, 1);
    },


    /*
     * Executa a compra
     */
    ajax_submit: function(dados_formulario, url_formulario) {
        var self = this;

        // se estiver efeturando uma compra, daqui não passará!
        if (self.compra_bloqueada) {
            return false;
        }

        // troca o nome do botão
        $("form[name=comprar_item] button").html('Comprando...');

        // bloqueia compras
        self.compra_bloqueada = true;

        // carrega o csrftoken
        var csrftoken = getCookie("csrftoken");

        $.ajax({
            url: url_formulario,
            type: "POST",
            data: dados_formulario,

            beforeSend: function(xhr, settings) {
                if (!csrfSafeMethod(settings.type) && sameOrigin(settings.url)) {
                    xhr.setRequestHeader("X-CSRFToken", csrftoken);
                }
            },

            statusCode: {
                403: function() {
                    location.reload()
                },
                404: function() {
                    location.reload()
                }
            }

        }).done(function(data) {
            // se o retorno for ok, esconde o aviso e chama a self.animacao();
            if (data.item_name && data.random_box_name) {
                self.url = data.redirect;
                // $("#retorno_compra").slideUp();
                self.open_random_box_window(data);
                // setTimeout(function() {
                //     self.animacao();
                // }, 4000);

            } else if (data.redirect) {
                self.close_light_box();
                self.url = data.redirect;
                $("#retorno_compra").slideUp();
                self.animacao();

            // se o retorno for logar, redireciona pro login.ongame
            // } else if (data === "logar") {
            //     var url = window.location.href;
            //     window.location.href="https://minhaconta.ongame.net/entrar/?url=" + url;

            // se for qualquer outro retorno, só mostra na caixa de aviso
            } else {
                self.close_light_box();
                var retorno_compra = $("#retorno_compra");
                retorno_compra.slideDown();
                retorno_compra.html(data);

                // habilita compra e retorna o texto do boão
                self.compra_bloqueada = false;
                $("form[name=comprar_item] button").html('Comprar');

            }
            window.buttonSubmitDisabled = false;

        // se der algum problema, como erro 500
        }).fail(function() {
            self.close_light_box();
            var retorno_compra = $("#retorno_compra");
            // volta o texto do botão
            $("form[name=comprar_item] button").html('Comprar');

            // desce o aviso
            retorno_compra.slideDown();

            // mostra essa msg na caixa de aviso
            retorno_compra.html('Não foi possível realizar a compra. Tente novamente mais tarde.');

            self.compra_bloqueada = false;
        });
    },

    /*
     * Load user balance
     */
    load_balance: function(item_mall_url, payment_id) {
        var self = this;

        $.ajax({
            url: '/' + item_mall_url + 'load-balance/' + payment_id + '/',
            type: "POST",
            beforeSend: function(xhr, settings) {
                if (!csrfSafeMethod(settings.type) && sameOrigin(settings.url)) {
                    xhr.setRequestHeader("X-CSRFToken", csrftoken);
                }
            }

        }).done(function(data) {
            var balance_total = $("#balance-total");
            balance_total.text(self.separador_de_milhar(data.amount));
            // Removida animação em 10/10/2018 a pedido do leandro
            // console.log(data);
            // var balance = 0;
            // var balance_total = $("#balance-total");
            //
            // var balance_interval = setInterval(function() {
            //     if (balance < data.amount) {
            //         balance = balance + parseInt((data.amount / 50));
            //         balance_total.text(self.separador_de_milhar(balance));
            //         self.compra_bloqueada = true;
            //
            //     } else {
            //         balance = data.amount;
            //         clearInterval(balance_interval);
            //         self.compra_bloqueada = false;
            //     }
            //
            //     balance_total.text(self.separador_de_milhar(balance));
            // }, 10);
        });
    },

    /*
     * Load item price
     */
    load_price: function(item_mall_url, item_slug) {
        var self = this;

        $.ajax({
            url: '/' + item_mall_url + 'load-price/' + item_slug + '/',
            type: "POST",
            beforeSend: function(xhr, settings) {
                if (!csrfSafeMethod(settings.type) && sameOrigin(settings.url)) {
                    xhr.setRequestHeader("X-CSRFToken", csrftoken);
                }
            }

        }).done(function(data) {
            var html_price = $(".load-price");
            var html_promotion = $(".load-promotion");

            html_price.text(self.separador_de_milhar(data.price) + ' ' + data.payment);
            html_promotion.text(self.separador_de_milhar(data.promotion) + ' ' + data.payment);
        });
    },

    /*
     * Coloca ponto no milhar
     */
    separador_de_milhar: function(num) {
        return ("" + num).replace(/(\d)(?=(\d\d\d)+(?!\d))/g, function($1) {
            return $1 + "."
        });
    }
};

var Busca = {
    box_busca: null,
    itemListAll: null,
    itemListFilter: null,
    /*
     * Construtor
     */
    init: function() {
        var self = this;
        self.box_busca = $("#search-item");
        self.itemListAll = $("#item-list-all");
        self.itemListFilter = $("#item-list-filter");
        self.itemListFilter.hide();

        self.box_busca.find("input").keyup(function() {
            Busca.buscar($(this).val());
        });
    },

    /*
     * Chama a página da busca. Pecorre o Json, se existir. Esconde o elemento '.lista' 
     * E append o resultado da busca no lugar dele
     */
    buscar: function(q) {
        var self = this;

        if (q.length < 3) {
            self.box_busca.find("span").text(' ');
            self.mostrar_campos();
            return false;
        } else {
            $.ajax({
                url: $('#search-href').text() + q,
                type: "GET",
                beforeSend: function(xhr, settings) {
                    if (!csrfSafeMethod(settings.type) && sameOrigin(settings.url)) {
                        xhr.setRequestHeader("X-CSRFToken", csrftoken);
                    }
                }
            }).done(function(data) {
                // grava no G.A.
                ga('send', 'pageview', {
                    'page': $('#search-href').text() + q,
                    'title': 'Busca - ' + q
                });

                // Se tiver retorno do json
                if (data[0].name) {
                    // mostra a legenda da busca
                    if (data.length === 1) self.box_busca.find("span").text(data.length + ' item encontrado');
                    if (data.length > 1) self.box_busca.find("span").text(data.length + ' itens encontrados');

                    // esconde a lista de itens
                    self.itemListAll.hide();
                    self.itemListFilter.empty();
                    self.itemListFilter.css('display', 'flex');

                    // remove seach elemment
                    // $(".item-search").remove();

                    // add seach elemment
                    // var structure = '<div class="row item-search" id="meio"></div>';
                    // $(".container").find('.row').find('div').first().append(structure);
                    var structure;
                    // para cada objeto da lista
                    $.each(data, function(index, item) {
                        structure = $('#item-clone').find('.item').clone();
                        structure.find('a').attr('href', item.url);
                        structure.find('a').attr('title', item.name);
                        structure.find('.item-title').text(item.name);
                        structure.find('img').attr('src', item.image);
                        structure.find('img').attr('alt', item.name);
                        structure.find('image').attr('xlink:href', item.image);
                        var price = item.price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
                        var promotion = item.promotion.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
                        if (item.is_promotion) {
                            structure.find('.price').addClass('d-none');
                            structure.find('.from').find('.text').text(price);
                            structure.find('.promotion').find('.text').text(promotion);
                        } else {
                            structure.find('.from').addClass('d-none');
                            structure.find('.promotion').addClass('d-none');
                            structure.find('.price').find('.text').text(price)
                        }
                        (item.units && item.units > 1) ? structure.find('.units').find('.text').text(item.units) : structure.find('.units').addClass('d-none');
                        (item.available && item.available > 1) ? structure.find('.available').find('.text').text(item.available) : structure.find('.available').addClass('d-none');
                        (item.duration && item.duration !== null) ? structure.find('.duration').find('.text').text(item.duration) : structure.find('.duration').addClass('d-none');
                        (item.amount && item.amount > 1) ? structure.find('.amount').find('.text').text(item.amount) : structure.find('.amount').addClass('d-none');
                        (item.function) ? structure.find('.function').find('.text').text(item.function) : structure.find('.function').addClass('d-none');
                        if (item.new) {
                            structure.find('.new').removeClass('d-none');
                        }
                        structure.appendTo(self.itemListFilter);
                        $('.function').clamp();
                    });

                // caso não encontrou nada
                } else {
                    self.box_busca.find("span").text('Nada encontrado');
                    self.mostrar_campos();
                }
            });
        }
    },

    /*
     * Construtor
     */
    mostrar_campos: function() {
        var self = this;
        self.itemListAll.css('display', 'flex');
        $('.function').clamp();
        self.itemListFilter.hide();
    }
};

Busca.init();
Item.init();

// $(function(){
//     $('#servidores a').click(function(){
//         if(!($(this).hasClass('ativo'))){
//             $('#servidores a').removeClass('ativo');
//             $(this).addClass('ativo');
//         }
//     });
// });
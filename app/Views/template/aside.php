<?php
$class = [
    '0' => '<img src="' . base_url('assets/images/tk.gif') . '">',
    '1' => '<img src="' . base_url('assets/images/bm.gif') . '">',
    '2' => '<img src="' . base_url('assets/images/fm.gif') . '">',
    '3' => '<img src="' . base_url('assets/images/ht.gif') . '">'
];
$kingdom = [
    '0' => '<img style="height:50%" src="' . base_url('assets/images/white.png') . '">',
    '7' => '<img style="height:50%" src="' . base_url('assets/images/red.png') . '">',
    '8' => '<img style="height:50%" src="' . base_url('assets/images/blue.png') . '">'
];
$evolution = [
    '1' => 'Mortal',
    '2' => 'Arch',
    '3' => 'Celestial',
    '4' => 'Subcelestial'
];
$translate = [
    'nick' => 'Jogador',
    'guild' => 'Guild',
    'level' => 'Nível',
    'kingdom' => 'Reino',
    'class' => 'Classe',
    'evolution' => 'Evolução',
    'city' => 'Cidade',
    'guildmark' => 'Guildmark'
];
?>
<aside class="d-none d-lg-block col-3 pl-0">
    <section class="p-3 border mb_large mt_large" id="login_box">
        <?php if (!session()->has('login')) : ?>
            <div id="login_box_not_logged">
                <a class="ab_db w-100 mb-2 btn" href="<?= base_url('site/login') ?>" title="Entrar">
                    Entrar
                </a>
                <a class="ab_db w-100 mb-2 btn" href="<?= base_url('site/register') ?>" title="Cadastrar">
                    Cadastrar
                </a>
                <div>
                    <a class="main-color font--12" href="<?= base_url('site/recovery') ?>" title="Recuperar Conta">
                        Recuperar Conta
                    </a>
                </div>
            </div>
        <?php else : ?>
            <div id="login_box_not_logged">
                <p class="mb-3 h3 text-center">
                    Olá, <span class="main-color"><?= session()->get('login')['username'] ?></span>!
                </p>

                <?php if (session()->get('login')['access'] == 3) : ?>
                    <div class="p-2 border m-2">
                        <a class="ab_db w-100 mb-2 btn" href="<?= base_urL('admin/news') ?>">
                            Notícias
                        </a>
                        <a class="ab_db w-100 mb-2 btn" href="<?= base_urL('admin/guides') ?>">
                            Guia do Jogo
                        </a>
                        <a class="ab_db w-100 mb-2 btn" href="<?= base_urL('admin/donate') ?>">
                            Doação
                        </a>
                        <a class="ab_db w-100 mb-2 btn" href="<?= base_urL('admin/config') ?>">
                            Configuração
                        </a>
                    </div>
                <?php endif; ?>

                <a class="ab_db w-100 mb-2 btn" href="<?= base_urL('dashboard/alterpass') ?>">
                    Alteração de Senha
                </a>
                <a class="ab_db w-100 mb-2 btn" href="<?= base_urL('dashboard/guildmark') ?>">
                    Guildmark
                </a>
                <a class="ab_db w-100 mb-2 btn" href="<?= base_urL('dashboard/numericpass') ?>">
                    Recuperar Numérica
                </a>
                <a class="ab_db w-100 mb-2 btn" href="<?= base_urL('dashboard/tickets') ?>">
                    Suporte
                </a>
                <a class="ab_db w-100 mb-2 btn" href="<?= base_urL('dashboard/donate') ?>">
                    Doação
                </a>
                <a class="ab_db w-100 btn" href="<?= base_url('dashboard/logout') ?>">
                    Sair
                </a>
            </div>
        <?php endif; ?>
    </section>
</aside>
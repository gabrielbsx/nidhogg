<?= $this->extend('layouts') ?>
<?= $this->section('page') ?>
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


<section class="mb_large" id="news">
    <div id="news_filter">
        <ul class="d-none d-md-flex align-items-md-center border border-bottom-0" id="news_category">
            <li class="active d-flex align-items-center" id="news_all">
                <svg height="16" viewBox="0 0 256 512" width="16">
                    <path d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z" fill="currentColor"></path>
                </svg>
                <a title="Todas">Ranking</a>
            </li>
        </ul>
        <div style="border: 1px solid #222222;">
            <header class="d-md-none component_title border-0">
                <svg height="16" viewBox="0 0 256 512" width="16">
                    <path d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z" fill="currentColor"></path>
                </svg>
                <h2>Ranking</h2>
            </header>
            <ul id="news_list_all container" style="padding:10px;">
                <div class="last-more-fon" style="margin: 0 auto;">
                    <?php if (isset($ranking_paginate) && is_array($ranking_paginate)) : ?>
                        <table class="table table-custom table-striped table-dark table-bordered table-hover table-m2 mb-0 text-center">
                            <thead>
                                <tr>
                                    <?php foreach ($ranking_paginate[0] as $key => $value) : ?>
                                        <?php if (in_array($key, ['id', 'created_at', 'updated_at', 'deleted_at'])) continue; ?>
                                        <th style="padding:10px 0;">
                                            <?= $translate[$key] ?>
                                        </th>
                                    <?php endforeach; ?>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($ranking_paginate as $key => $value) : ?>
                                    <tr>
                                        <?php foreach ($value as $key2 => $char) : ?>
                                            <?php if (in_array($key2, ['id', 'created_at', 'updated_at', 'deleted_at'])) continue; ?>
                                            <td style="padding:10px 0;">
                                                <?php if ($key2 == 'nick') : ?>
                                                    <?= $char ?>
                                                <?php elseif ($key2 == 'level') : ?>
                                                    <?= $char + 1 ?>
                                                <?php elseif ($key2 == 'evolution') : ?>
                                                    <?= $evolution[$char] ?>
                                                <?php elseif ($key2 == 'class') : ?>
                                                    <?= $class[$char] ?>
                                                <?php elseif ($key2 == 'kingdom') : ?>
                                                    <?= $kingdom[$char] ?>
                                                <?php elseif ($key2 == 'guild') : ?>
                                                    <?php $imguild = 'img_guilds/' . ('/b0' . (1000000 + $char)) . '.bmp' ?>
                                                    <?php $defaultguild = 'img_guilds/b01000000.bmp' ?>
                                                    <img src="<?= file_exists(FCPATH . $imguild) ? base_url($imguild) : base_url($defaultguild) ?>">
                                                <?php else : ?>
                                                    <?= $char ?>
                                                <?php endif; ?>
                                            </td>
                                        <?php endforeach; ?>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    <?php else : ?>
                        Aguardando atualização do ranking!
                    <?php endif; ?>
                </div>
            </ul>
            <div class="content-more-news">
                <div class="last-more-fon" style="text-align: center;">
                    <?php if ($ranking_pager) : ?>
                        <?= $ranking_pager->links('ranking', 'pagination') ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>
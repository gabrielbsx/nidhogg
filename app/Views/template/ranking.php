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
<section id="ranking_championships">
    <div class="row">
        <section class="col-12 col-md-12 pr-md-12 mb_large" id="ranking">
            <div class="p-3 border position-relative" id="ranking_wrapper">
                <a class="square_link" href="<?= base_url('site/ranking') ?>" title="Ranking">+</a>
                <header class="component_title">
                    <svg height="16" viewBox="0 0 256 512" width="16">
                        <path d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z" fill="currentColor"></path>
                    </svg>
                    <h2>Ranking</h2>
                </header>
                <div class="table-wrapper">
                    <table class="table table-custom table-striped table-dark table-bordered table-hover table-m2 mb-0">
                        <thead>
                            <tr>
                                <th> </th>
                                <th class="text-center">Nick</th>
                                <th class="text-center">Level</th>
                                <th class="text-center">Classe</th>
                                <th class="text-center">Evolução</th>
                                <th class="text-center">Reino</th>
                                <th class="text-center">Guild</th>
                            </tr>
                        </thead>
                        <tbody id="table-m2-char">
                            <?php for ($i = 0; $i < 10; $i++) : ?>
                                <tr>
                                    <td class="text-center p-2">
                                        <span>
                                            <?= $i + 1 ?>
                                        </span>
                                    </td>
                                    <td class="p-2 text-center">
                                        xSpiritualx
                                    </td>
                                    <td class="p-2 text-center">
                                        400
                                    </td>
                                    <td class="p-2 text-center">
                                        <?= $class[rand(0, 3)] ?>
                                    </td>
                                    <td class="p-2 text-center">
                                        <?= $evolution[rand(1, 4)] ?>
                                    </td>
                                    <td class="p-2 text-center">
                                        <?= $kingdom[rand(7, 8)] ?>
                                    </td>
                                    <td class="p-2 text-center">
                                        <img src="<?= base_url('img_guilds/b01000000.bmp') ?>">
                                    </td>
                                </tr>
                            <?php endfor; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>
</section>
<div class="clearfix"></div>
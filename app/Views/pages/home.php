<?= $this->extend('layouts') ?>
<?= $this->section('page') ?>
<section class="mb_large" id="news">
    <div class="border border-sm-0 mb_large" id="news_slider">
        <div class="block_loading" id="news_slider_list">
            <div class="news_slider_item">
                <a target="_blank" title="Big Sale - Janeiro/21">
                    <figure>
                        <div class="banner lazy-banner" data-lazy-bg="url(https://i.imgur.com/oeuc8Ni.jpg)"></div>
                        <figcaption class="d-sm-flex flex-sm-column justify-content-sm-center">
                            <h3> Open beta Inicio 10/07/2020 termina em 01/08/2020</h3>
                            <p class="d-none d-sm-block">
                                WYD NIDHOGG chegou mostrando para oque veio, com muitas inovações e personalizações exclusivas.
                            </p>
                        </figcaption>
                    </figure>
                </a>
            </div>
        </div>
        <nav class="d-none d-sm-block">
            <ul class="slider_pagination pagination pagination-sm"></ul>
        </nav>
        <div class="clearfix"></div>
    </div>
    <div id="news_filter">
        <ul class="d-none d-md-flex align-items-md-center border border-bottom-0" id="news_category">
            <li class="active d-flex align-items-center" id="news_all">
                <svg height="16" viewBox="0 0 256 512" width="16">
                    <path d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z" fill="currentColor"></path>
                </svg>
                <a title="Todas">Notícias</a>
            </li>
        </ul>
        <div id="news_list_wrapper" style="border: 1px solid #222222;">
            <header class="d-md-none component_title border-0">
                <svg height="16" viewBox="0 0 256 512" width="16">
                    <path d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z" fill="currentColor"></path>
                </svg>
                <h2>Notícias <mark>Principais</mark></h2>
            </header>
            <ul id="news_list_all">
                <?php if ($news_paginate) : ?>
                    <?php foreach ($news_paginate as $key => $value) : ?>
                        <li style="border: 1px solid #222222;">
                            <a href="<?= base_url('site/news/' . $value['id'    ]) ?>" title="<?= $value['title'] ?>">
                                <article class="media">
                                    <span class="news_list_item_category eventos" rel="category" title="Eventos">Eventos</span>
                                    <div class="news_list_item_description media-body">
                                        <header class="d-sm-flex">
                                            <h3 class="mr-auto"><?= $value['title'] ?></h3>
                                            <time datetime="2021-01-18"><?= $value['updated_at'] ?? $value['created_at'] ?></time>
                                        </header>
                                    </div>
                                </article>
                            </a>
                        </li>
                    <?php endforeach; ?>
                <?php endif; ?>
                <li>
                    <?php if ($news_pager) : ?>
                        <?= $news_pager->links('news', 'pagination') ?>
                    <?php endif; ?>
                </li>
            </ul>
        </div>
    </div>
</section>
<?= $this->endSection() ?>
<?= $this->extend('layouts') ?>
<?= $this->section('page') ?>
<section class="mb_large" id="news">
    <div id="news_filter">
        <ul class="d-none d-md-flex align-items-md-center border border-bottom-0" id="news_category">
            <li class="active d-flex align-items-center" id="news_all">
                <svg height="16" viewBox="0 0 256 512" width="16">
                    <path d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z" fill="currentColor"></path>
                </svg>
                <a title="Todas">Guia do Jogo</a>
            </li>
        </ul>
        <div style="border: 1px solid #222222;">
            <header class="d-md-none component_title border-0">
                <svg height="16" viewBox="0 0 256 512" width="16">
                    <path d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z" fill="currentColor"></path>
                </svg>
                <h2>Guia do Jogo</h2>
            </header>
            <ul id="news_list_all container" style="padding:10px;">
                <?php foreach ($guides as $key => $value) : ?>
                    <div style="display:inline-block;width:100%;background-color:rgb(55,55,55);margin-top: 10px;">
                        <div style="width:100%;padding:10px;text-align:center;background-color:rgb(25,25,25);">
                            <?= $value['name'] ?>
                        </div>
                        <div style="padding:20px;display:inline-block;">
                            <div style="display:flex;margin-left:auto;">
                                <?php if (count($value['articles']) > 0) : ?>
                                    <?php foreach ($value['articles'] as $key2 => $value2) : ?>
                                        <div>
                                            <a style="padding: 10px 20px; background-color:rgb(25,25,25);margin:5px;" href="<?= base_url('/site/article/' . $value2['id']) ?>">
                                                <?= $value2['title'] ?>
                                            </a>
                                        </div>
                                    <?php endforeach; ?>
                                <?php else : ?>
                                    <div>
                                        Não há artigos nesse guia
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</section>
<?= $this->endSection() ?>
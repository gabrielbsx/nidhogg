<?= $this->extend('dashboard/layouts') ?>
<?= $this->section('page') ?>
<section class="mb_large" id="news">
    <div id="news_filter">
        <ul class="d-none d-md-flex align-items-md-center border border-bottom-0" id="news_category">
            <li class="active d-flex align-items-center" id="news_all">
                <svg height="16" viewBox="0 0 256 512" width="16">
                    <path d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z" fill="currentColor"></path>
                </svg>
                <a title="Todas">Doação</a>
            </li>
        </ul>
        <div style="border: 1px solid #222222;overflow:hidden;">
            <header class="d-md-none component_title border-0">
                <svg height="16" viewBox="0 0 256 512" width="16">
                    <path d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z" fill="currentColor"></path>
                </svg>
                <h2>Doação</h2>
            </header>
            <ul id="news_list_all container" style="padding:10px;overflow:hidden;">
                <div class="last-more-fon" style="margin: 0 auto;">
                    Escrever os termos aqui
                    <div style="margin:0 auto;margin-top:20px;text-align:center;">
                        <a style="background-color:rgba(55,55,55,1);padding: 10px 30px;" href="<?= base_url('dashboard/donation') ?>">Concordo com os termos</a>
                    </div>
                </div>
            </ul>
        </div>
    </div>
</section>
<?= $this->endSection() ?>
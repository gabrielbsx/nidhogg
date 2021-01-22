<?= $this->extend('dashboard/layouts') ?>
<?= $this->section('page') ?>
<section class="mb_large" id="news">
    <div id="news_filter">
        <ul class="d-none d-md-flex align-items-md-center border border-bottom-0" id="news_category">
            <li class="active d-flex align-items-center" id="news_all">
                <svg height="16" viewBox="0 0 256 512" width="16">
                    <path d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z" fill="currentColor"></path>
                </svg>
                <a title="Todas">Suporte</a>
            </li>
        </ul>
        <div style="border: 1px solid #222222;overflow:hidden;">
            <header class="d-md-none component_title border-0">
                <svg height="16" viewBox="0 0 256 512" width="16">
                    <path d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z" fill="currentColor"></path>
                </svg>
                <h2>Suporte</h2>
            </header>
            <ul id="news_list_all container" style="padding:10px;overflow:hidden;">
                <div class="last-more-fon" style="margin: 0 auto;">
                    <div style="margin:10px 0;text-align:center;">
                        <a href="<?= base_url('dashboard/createticket') ?>" style="background-color:rgb(55,55,55);padding:10px 20px;display:block;width:100%;text-align:center;margin:0 auto;">Adicionar novo ticket</a>
                    </div>
                    <?php if ($paginate_tickets) : ?>
                        <?php foreach ($paginate_tickets as $key => $value) : ?>
                            <div style="display:inline-block;width:100%;background-color:rgb(55,55,55);margin-top: 10px;">
                                <div style="padding:10px;display:flex;">
                                    <span style="padding:10px;">
                                        <?= $value['title'] ?>
                                    </span>
                                    <div style="display:flex;margin-left:auto;">
                                        <a href="<?= base_url('dashboard/answerticket/' . $value['id']) ?>" style="background-color:rgb(25,25,75);padding:10px 20px;">
                                            Abrir
                                        </a>
                                        <?php if ($value['status'] == 0) : ?>
                                            <div style="background-color:rgb(75,75,25);padding:10px 20px;">
                                                Pendente
                                            </div>
                                        <?php else : ?>
                                            <div style="background-color:rgb(75,25,25);padding:10px 20px;">
                                                Encerrado
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                        <?php if ($pager_tickets) : ?>
                            <?= $pager_tickets->links('package', 'pagination') ?>
                        <?php endif; ?>
                    <?php else : ?>
                        <div style="text-align:center;">
                            Não há ticket!
                        </div>
                    <?php endif; ?>
                </div>
            </ul>
        </div>
    </div>
</section>
<?= $this->endSection() ?>
<?= $this->extend('admincp/layouts') ?>
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
        <div style="border: 1px solid #222222;padding:10px;">
            <header class="d-md-none component_title border-0">
                <svg height="16" viewBox="0 0 256 512" width="16">
                    <path d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z" fill="currentColor"></path>
                </svg>
                <h2>Guia do Jogo</h2>
            </header>
            <ul id="news_list_all">
                <div style="margin:10px 0;text-align:center;">
                    <a href="<?= base_url('admin/createguide') ?>" style="background-color:rgb(55,55,55);padding:10px 20px;display:block;width:100%;text-align:center;margin:0 auto;">Adicionar novo guia</a>
                </div>
                <?php if ($paginate_guides) : ?>
                    <?php foreach ($paginate_guides as $key => $value) : ?>
                        <div style="display:inline-block;width:100%;background-color:rgb(55,55,55);margin-top: 10px;">
                            <div style="padding:10px;display:flex;">
                                <span style="padding:10px;">
                                    <?= $value['name'] ?>
                                </span>
                                <div style="display:flex;margin-left:auto;">
                                    <a href="<?= base_url('admin/addarticleguide/' . $value['id']) ?>" style="background-color:rgb(25,25,75);padding:10px 20px;">
                                        Adicionar Artigo
                                    </a>
                                    <a href="<?= base_url('admin/editguide/' . $value['id']) ?>" style="background-color:rgb(25,75,25);padding:10px 20px;">
                                        Editar
                                    </a>
                                    <a href="<?= base_url('auth/delguide/' . $value['id']) ?>" style="background-color:rgb(75,25,25);padding:10px 20px;">
                                        Deletar
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    <?php if ($pager_guides) : ?>
                        <?= $pager_guides->links('guides', 'pagination') ?>
                    <?php endif; ?>
                <?php else : ?>
                    Não há guia!
                <?php endif; ?>
            </ul>
        </div>
    </div>
</section>
<?= $this->endSection() ?>
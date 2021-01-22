<?= $this->extend('admincp/layouts') ?>
<?= $this->section('page') ?>
<section class="mb_large" id="news">
    <div id="news_filter">
        <ul class="d-none d-md-flex align-items-md-center border border-bottom-0" id="news_category">
            <li class="active d-flex align-items-center" id="news_all">
                <svg height="16" viewBox="0 0 256 512" width="16">
                    <path d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z" fill="currentColor"></path>
                </svg>
                <a title="Todas">Editor de Guia</a>
            </li>
        </ul>
        <div style="border: 1px solid #222222;">
            <header class="d-md-none component_title border-0">
                <svg height="16" viewBox="0 0 256 512" width="16">
                    <path d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z" fill="currentColor"></path>
                </svg>
                <h2>Editor de Guia</h2>
            </header>
            <ul id="news_list_all" style="padding:10px;">
                <div class="content-more-news">
                    <div class="last-more-top">
                        Editor de guia
                    </div>
                    <div class="last-more-fon" style="margin: 0 auto;">
                        <?php if (isset($guide)) : ?>
                            <form id="login_form" class="login-form block-p" method="POST" action="<?= base_url('auth/editguide') ?>">
                                <div class="input-user">
                                    <input type="text" class="form-control my-3" name="name" value="<?= $guide['name'] ?>">
                                </div>
                                <input type="hidden" name="id" value="<?= $guide['id'] ?>">
                                <?php if (isset($recaptcha)) : ?>
                                    <div class="g-recaptcha" data-sitekey="<?= $recaptcha ?>"></div>
                                <?php endif; ?>
                                <button  class="text-center ab_db w-100 mb-2 btn my-2" style="text-align:center;margin:0 auto;margin-top:10px;" type="submit">
                                    Editar
                                </button>
                            </form>
                            <a href="<?= base_url('admin/guides') ?>">
                                <button  class="text-center ab_db w-100 mb-2 btn my-2" style="text-align:center;margin:0 auto;margin-top:10px;">
                                    Voltar
                                </button>
                            </a>
                        <?php else : ?>
                            <div style="text-align:center;">
                                Guia inexistente
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="content-more-news">
                    <div class="last-more-top">
                        Editor de guia
                    </div>
                    <div class="last-more-fon" style="margin: 0 auto;">
                        <?php if ($paginate_articles) : ?>
                            <?php foreach ($paginate_articles as $key => $value) : ?>
                                <div style="display:inline-block;width:100%;background-color:rgb(55,55,55);margin-top: 10px;">
                                    <div style="padding:10px;display:flex;">
                                        <span style="padding:10px;">
                                            <?= $value['title'] ?>
                                        </span>
                                        <div style="display:flex;margin-left:auto;">
                                            <a href="<?= base_url('admin/editarticleguide/' . $value['id']) ?>" style="background-color:rgb(25,25,75);padding:10px 20px;">
                                                Alterar Artigo
                                            </a>
                                            <a href="<?= base_url('auth/delarticleguide/' . $value['id']) ?>" style="background-color:rgb(75,25,25);padding:10px 20px;">
                                                Deletar Artigo
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                            <?php if ($pager_articles) : ?>
                                <?= $pager_articles->links('articles', 'pagination') ?>
                            <?php endif; ?>
                        <?php else : ?>
                            <div style="text-align:center;">
                                Não há artigos nesse guia!
                            </div>
                        <?php endif; ?>
                    </div>
                </div>

            </ul>
        </div>
    </div>
</section>
<?= $this->endSection() ?>
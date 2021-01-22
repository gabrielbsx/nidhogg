<?= $this->extend('admincp/layouts') ?>
<?= $this->section('page') ?>
<section class="mb_large" id="news">
    <div id="news_filter">
        <ul class="d-none d-md-flex align-items-md-center border border-bottom-0" id="news_category">
            <li class="active d-flex align-items-center" id="news_all">
                <svg height="16" viewBox="0 0 256 512" width="16">
                    <path d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z" fill="currentColor"></path>
                </svg>
                <a title="Todas">Editor Notícias</a>
            </li>
        </ul>
        <div style="border: 1px solid #222222;">
            <header class="d-md-none component_title border-0">
                <svg height="16" viewBox="0 0 256 512" width="16">
                    <path d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z" fill="currentColor"></path>
                </svg>
                <h2>Editor Notícias</h2>
            </header>
            <ul id="news_list_all" style="padding:10px;">
                <?php if (isset($news)) : ?>
                    <form id="login_form" class="login-form block-p" method="POST" action="<?= base_url('auth/editnews') ?>">
                        <div class="input-user">
                            <label style="margin:10px;text-align:center;display:block;">Título</label>
                            <input class="form-control my-3" type="text" name="title" value="<?= $news['title'] ?>">
                        </div>
                        <textarea class="editor" name="content"><?= $news['content'] ?></textarea>
                        <label style="margin:10px;text-align:center;display:block;">Categorias</label>
                        <select style="margin:10px;text-align:center;display:block;" name="category">
                            <option value="1" <?= $news['category'] == 1 ? 'selected' : '' ?>>Notícia</option>
                            <option value="2" <?= $news['category'] == 2 ? 'selected' : '' ?>>Manutenção</option>
                            <option value="3" <?= $news['category'] == 3 ? 'selected' : '' ?>>Evento</option>
                            <option value="4" <?= $news['category'] == 4 ? 'selected' : '' ?>>Atualização</option>
                        </select>
                        <input type="hidden" name="id" value="<?= $news['id'] ?>">
                        <?php if (isset($recaptcha)) : ?>
                            <div class="g-recaptcha" data-sitekey="<?= $recaptcha ?>"></div>
                        <?php endif; ?>
                        <button class="text-center ab_db w-100 mb-2 btn my-2" style="text-align:center;margin:0 auto;margin-top:10px;" type="submit">
                            Editar
                        </button>
                    </form>
                    <a href="<?= base_url('admin/news') ?>">
                        <button class="text-center ab_db w-100 mb-2 btn my-2" style="text-align:center;margin:0 auto;margin-top:10px;">
                            Voltar
                        </button>
                    </a>
                <?php else : ?>
                    <div style="margin:10px;text-align:center;">
                        Notícia inexistente
                    </div>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</section>
<?= $this->endSection() ?>
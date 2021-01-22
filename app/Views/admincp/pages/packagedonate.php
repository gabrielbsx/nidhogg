<?= $this->extend('admincp/layouts') ?>
<?= $this->section('page') ?>
<section class="mb_large" id="news">
    <div id="news_filter">
        <ul class="d-none d-md-flex align-items-md-center border border-bottom-0" id="news_category">
            <li class="active d-flex align-items-center" id="news_all">
                <svg height="16" viewBox="0 0 256 512" width="16">
                    <path d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z" fill="currentColor"></path>
                </svg>
                <a title="Todas">Sistema de Pacote</a>
            </li>
        </ul>
        <div style="border: 1px solid #222222;">
            <header class="d-md-none component_title border-0">
                <svg height="16" viewBox="0 0 256 512" width="16">
                    <path d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z" fill="currentColor"></path>
                </svg>
                <h2>Sistema de Pacote</h2>
            </header>
            <ul id="news_list_all" style="padding:10px;">
                <form id="login_form" class="login-form block-p" method="POST" action="<?= base_url('auth/createpackage') ?>">
                    <div class="input-user">
                        <input type="text" class="form-control my-3" name="name" placeholder="Nome">
                    </div>
                    <div class="input-user">
                        <input type="text" class="form-control my-3" name="value" placeholder="Valor de doação em R$">
                    </div>
                    <div class="input-user">
                        <input type="text" class="form-control my-3" name="donate" placeholder="Quantidade de donate">
                    </div>
                    <div class="input-user">
                        <input type="text" class="form-control my-3" name="bonus" placeholder="Bônus em [%]">
                    </div>
                    <?php if (isset($recaptcha)) : ?>
                        <div class="g-recaptcha" data-sitekey="<?= $recaptcha ?>"></div>
                    <?php endif; ?>
                    <button class="text-center ab_db w-100 mb-2 btn my-2" style="text-align:center;margin:0 auto;margin-top:10px;" type="submit">
                        Criar pacote
                    </button>
                </form>
                <a href="<?= base_url('admin/donate') ?>">
                    <button class="text-center ab_db w-100 mb-2 btn my-2" style="text-align:center;margin:0 auto;margin-top:10px;">
                        Voltar
                    </button>
                </a>
            </ul>
        </div>
    </div>
</section>
<?= $this->endSection() ?>
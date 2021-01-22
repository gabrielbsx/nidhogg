<?= $this->extend('admincp/layouts') ?>
<?= $this->section('page') ?>
<section class="mb_large" id="news">
    <div id="news_filter">
        <ul class="d-none d-md-flex align-items-md-center border border-bottom-0" id="news_category">
            <li class="active d-flex align-items-center" id="news_all">
                <svg height="16" viewBox="0 0 256 512" width="16">
                    <path d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z" fill="currentColor"></path>
                </svg>
                <a title="Todas">Editor Item para o pacote</a>
            </li>
        </ul>
        <div style="border: 1px solid #222222;">
            <header class="d-md-none component_title border-0">
                <svg height="16" viewBox="0 0 256 512" width="16">
                    <path d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z" fill="currentColor"></path>
                </svg>
                <h2>Editor Item para o pacote</h2>
            </header>
            <ul id="news_list_all">
                <div class="content-more-news">
                    <div class="last-more-fon" style="margin: 0 auto;padding:10px;">
                        <?php if (isset($bonus)) : ?>
                            <form id="login_form" class="login-form block-p" method="POST" action="<?= base_url('auth/edititem') ?>">
                                <div class="input-user">
                                    <label style="display:block;">Nome do item</label>
                                    <input type="text" class="form-control my-3" name="itemname" value="<?= $bonus['itemname'] ?>">
                                </div>
                                <div class="input-user">
                                    <label style="display:block;">Id do item</label>
                                    <input type="number" class="form-control my-3" type="number" name="itemid" value="<?= $bonus['itemid'] ?>">
                                </div>
                                <div class="input-user">
                                    <label style="display:block;">Efeito 1</label>
                                    <input type="number" class="form-control my-3" type="number" name="effect1" value="<?= $bonus['effect1'] ?>">
                                </div>
                                <div class="input-user">
                                    <label style="display:block;">Valor de efeito 1</label>
                                    <input type="number" class="form-control my-3" type="number" name="effect_value1" value="<?= $bonus['effect_value1'] ?>">
                                </div>
                                <div class="input-user">
                                    <label style="display:block;">Efeito 2</label>
                                    <input type="number" class="form-control my-3" type="number" name="effect2" value="<?= $bonus['effect2'] ?>">
                                </div>
                                <div class="input-user">
                                    <label style="display:block;">Valor de efeito 2</label>
                                    <input type="number" class="form-control my-3" type="number" name="effect_value2" value="<?= $bonus['effect_value1'] ?>">
                                </div>
                                <div class="input-user">
                                    <label style="display:block;">Efeito 3</label>
                                    <input type="number" class="form-control my-3" type="number" name="effect3" value="<?= $bonus['effect3'] ?>">
                                </div>
                                <div class="input-user">
                                    <label style="display:block;">Valor de efeito 3</label>
                                    <input type="number" class="form-control my-3" type="number" name="effect_value3" value="<?= $bonus['effect_value3'] ?>">
                                </div>
                                <input type="hidden" name="id" value="<?= $bonus['id'] ?>">
                                <?php if (isset($recaptcha)) : ?>
                                    <div class="g-recaptcha" data-sitekey="<?= $recaptcha ?>"></div>
                                <?php endif; ?>
                                <button class="text-center ab_db w-100 mb-2 btn my-2" style="text-align:center;margin:0 auto;margin-top:10px;" type="submit">
                                    Editar
                                </button>
                            </form>
                            <a href="<?= base_url('admin/donate') ?>">
                                <button class="text-center ab_db w-100 mb-2 btn my-2" style="text-align:center;margin:0 auto;margin-top:10px;">
                                    Voltar
                                </button>
                            </a>
                        <?php else : ?>
                            Item inexistente
                        <?php endif; ?>
                    </div>
                </div>

            </ul>
        </div>
    </div>
</section>
<?= $this->endSection() ?>
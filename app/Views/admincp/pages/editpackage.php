<?= $this->extend('admincp/layouts') ?>
<?= $this->section('page') ?>
<section class="mb_large" id="news">
    <div id="news_filter">
        <ul class="d-none d-md-flex align-items-md-center border border-bottom-0" id="news_category">
            <li class="active d-flex align-items-center" id="news_all">
                <svg height="16" viewBox="0 0 256 512" width="16">
                    <path d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z" fill="currentColor"></path>
                </svg>
                <a title="Todas">Editor de Pacote</a>
            </li>
        </ul>
        <div style="border: 1px solid #222222;">
            <header class="d-md-none component_title border-0">
                <svg height="16" viewBox="0 0 256 512" width="16">
                    <path d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z" fill="currentColor"></path>
                </svg>
                <h2>Editor de Pacote</h2>
            </header>
            <ul id="news_list_all" class="container" style="padding:10px;">
                <div class="content-more-news">
                    <div class="last-more-top">
                        Editor de pacotes
                    </div>
                    <div class="last-more-fon" style="margin: 0 auto;">
                        <?php if (isset($package)) : ?>
                            <form id="login_form" class="login-form block-p" method="POST" action="<?= base_url('auth/editpackage') ?>">
                                <div class="input-user">
                                    <input type="text" class="form-control my-3" name="name" value="<?= $package['name'] ?>">
                                </div>
                                <div class="input-user">
                                    <input type="number" class="form-control my-3" name="value" value="<?= $package['value'] ?>">
                                </div>
                                <div class="input-user">
                                    <input type="number" class="form-control my-3" name="donate" value="<?= $package['donate'] ?>">
                                </div>
                                <div class="input-user">
                                    <input type="number" class="form-control my-3" name="bonus" value="<?= $package['bonus'] ?>">
                                </div>
                                <input type="hidden" name="id" value="<?= $package['id'] ?>">
                                <?php if (isset($recaptcha)) : ?>
                                    <div class="g-recaptcha" data-sitekey="<?= $recaptcha ?>"></div>
                                <?php endif; ?>
                                <button  class="text-center ab_db w-100 mb-2 btn my-2" style="text-align:center;margin:0 auto;margin-top:10px;" type="submit">
                                    Editar
                                </button>
                            </form>
                            <a href="<?= base_url('admin/donate') ?>">
                                <button  class="text-center ab_db w-100 mb-2 btn my-2" style="text-align:center;margin:0 auto;margin-top:10px;">
                                    Voltar
                                </button>
                            </a>
                        <?php else : ?>
                            Pacote inexistente
                        <?php endif; ?>
                    </div>
                </div>
                <div class="content-more-news">
                    <div class="last-more-top">
                        Editor de pacotes
                    </div>
                    <div class="last-more-fon" style="margin: 0 auto;">
                        <?php if ($paginate_bonus) : ?>
                            <?php foreach ($paginate_bonus as $key => $value) : ?>
                                <div style="display:inline-block;background-color:rgb(55, 55, 55);padding:10px;">
                                    <div style="display:block;text-align:center;padding:10px;background-color:rgb(75, 75, 75);">
                                        <span>
                                            <?= $value['itemname'] ?>
                                        </span>
                                    </div>
                                    <div style="text-align:center;margin:10px 0;">
                                        <span>
                                            <?= trim($value['itemid'] . ' ' . $value['effect1'] . ' ' . $value['effect_value1'] . ' ' . $value['effect2'] . ' ' . $value['effect_value2'] . ' ' . $value['effect3'] . ' ' . $value['effect_value3']) ?>
                                        </span>
                                    </div>
                                    <div style="padding: 10px;text-align:center;margin:0 auto;">
                                        <a style="background-color:rgb(55, 55, 155);padding:10px 20px;margin:10px;" href="<?= base_url('admin/edititem/' . $value['id']) ?>">
                                            Alterar item
                                        </a>
                                        <a style="background-color:rgb(155, 55, 55);padding:10px 20px;margin:10px;" href="<?= base_url('auth/delitem/' . $value['id']) ?>">
                                            Deletar item
                                        </a>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                </div>

            </ul>
        </div>
    </div>
</section>
<?= $this->endSection() ?>
<div class="login-block">
    <div class="widget-title flex-c-c" style="font-size: 18px; color:#cce0ff; font-weight: bold;">
        Painel do
        <?php if (session()->has('login') && session()->get('login')['access'] == 3) : ?>
            Administrador
        <?php else : ?>
            Usuário
        <?php endif; ?>
    </div>
    <?php if (!session()->has('login')) : ?>
        <form id="login_form" class="login-form block-p" style="margin:20px;" method="POST" action="<?= base_url('auth/login') ?>">
            <p class="input-user">
                <input type="text" name="username" id="login_input" placeholder="USUÁRIO">
            </p>
            <p class="input-pass">
                <input type="password" name="password" id="password_input" placeholder="SENHA">
            </p>
            <?php if (isset($recaptcha)) : ?>
                <div class="g-recaptcha" data-sitekey="<?= $recaptcha ?>"></div>
            <?php endif; ?>
            <div class="buttons flex-s-c">
                <div class="lost">
                    <a href="<?= base_url('site/recovery') ?>">Perdi minha conta</a>
                    <a href="<?= base_url('site/register') ?>" class="buttonDark">Cadastrar</a>
                </div>
                <button class="button button-border">Entrar</button>
            </div>
        </form>
    <?php else : ?>
        <div class="block-p">
            <div style="display:block;margin: 10px 0;text-align:center;">
                <h3 style="margin: 5px 0;">
                    <a style="background-color:rgba(55,55,55,1);" href="<?= base_url('dashboard/alterpass') ?>">Alterar senha</a>
                </h3>
                <h3 style="margin: 5px 0;">
                    <a style="background-color:rgba(55,55,55,1);" href="<?= base_url('dashboard/guildmark') ?>">Guildmark</a>
                </h3>
                <h3 style="margin: 5px 0;">
                    <a style="background-color:rgba(55,55,55,1);" href="<?= base_url('dashboard/tickets') ?>">Suporte</a>
                </h3>
                <h3 style="margin: 5px 0;">
                    <a style="background-color:rgba(55,55,55,1);" href="<?= base_url('dashboard/numericpass') ?>">Recuperar numérica</a>
                </h3>
                <h3 style="margin: 5px 0;">
                    <a style="background-color:rgba(55,55,55,1);" href="<?= base_url('dashboard/donate') ?>">Doação</a>
                </h3>
                <?php if (session()->get('login')['access'] == 3) : ?>
                    <h3 style="margin: 5px 0;">
                        <a style="background-color:rgba(55,55,55,1);" href="<?= base_url('admin/config') ?>">Configuração</a>
                    </h3>
                    <h3 style="margin: 5px 0;">
                        <a style="background-color:rgba(55,55,55,1);" href="<?= base_url('admin/news') ?>">Notícias</a>
                    </h3>
                    <h3 style="margin: 5px 0;">
                        <a style="background-color:rgba(55,55,55,1);" href="<?= base_url('admin/guides') ?>">Guia do jogo</a>
                    </h3>
                    <h3 style="margin: 5px 0;">
                        <a style="background-color:rgba(55,55,55,1);" href="<?= base_url('admin/donate') ?>">Pacotes de doação</a>
                    </h3>
                    <h3 style="margin: 5px 0;">
                        <a style="background-color:rgba(55,55,55,1);" href="<?= base_url('auth/droplist') ?>">Atualizar droplist</a>
                    </h3>
                <?php endif; ?>
                <h3 style="margin: 30px 0;">
                    <a style="background-color:rgba(55,55,55,1);" href="<?= base_url('dashboard/logout') ?>">Sair</a>
                </h3>
            </div>
        </div>
    <?php endif; ?>
</div>
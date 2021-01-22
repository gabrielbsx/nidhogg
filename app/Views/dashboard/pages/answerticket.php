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
        <div style="border: 1px solid #222222;">
            <header class="d-md-none component_title border-0">
                <svg height="16" viewBox="0 0 256 512" width="16">
                    <path d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z" fill="currentColor"></path>
                </svg>
                <h2>Suporte</h2>
            </header>
            <ul id="news_list_all" style="margin:10px;">
                <?php if (isset($ticket)) : ?>
                    <div class="content-more-news">
                        <div style="text-align:center;border-bottom:1px solid rgba(155,155,155,0.2);padding:10px;" class="last-more-top">
                            <?= $ticket['title'] ?> | por: <?= $ticket['username'] ?>
                        </div>
                        <div class="last-more-fon" style="margin: 0 auto;">
                            <div style="text-align:center;margin:10px;">
                                <?= $ticket['content'] ?>
                            </div>
                        </div>
                    </div>
                    <?php if ($answers_paginate) : ?>
                        <?php foreach ($answers_paginate as $key => $value) : ?>
                            <div class="content-more-news">
                                <div style="text-align:center;border-bottom:1px solid rgba(155,155,155,0.2);padding:10px;" class="last-more-top">
                                    <?= $value['access'] == 3 ? 'Administração' : $value['username'] ?>
                                </div>
                                <div class="last-more-fon" style="margin: 0 auto;">
                                    <div style="text-align:center;margin:10px;">
                                        <?= $value['content'] ?>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                        <div class="content-more-news">
                            <div class="last-more-fon">
                                <?php if (isset($answers_pager)) : ?>
                                    <?= $answers_pager->links('answers', 'pagination') ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php else : ?>
                        <div class="content-more-news">
                            <div class="last-more-fon" style="margin: 0 auto;">
                                <div style="text-align:center;margin:10px;">
                                    Não há resposta
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                    <div class="content-more-news">
                        <div class="last-more-fon" style="margin: 0 auto;">
                            <div style="text-align:center;margin:10px;">
                                <?php if ($ticket['status'] == 0) : ?>
                                    <form action="<?= base_url('auth/answerticket') ?>" method="POST">
                                        <textarea name="content" class="editor"></textarea>
                                        <input type="hidden" name="id_ticket" value="<?= $ticket['id'] ?>">
                                        <?php if (isset($recaptcha)) : ?>
                                            <div class="g-recaptcha" data-sitekey="<?= $recaptcha ?>"></div>
                                        <?php endif; ?>
                                        <button class="text-center ab_db w-100 mb-2 btn my-2" type="submit" style="text-align:center;margin:0 auto;margin-top:20px;">
                                            Responder ticket
                                        </button>
                                    </form>
                                    <form class="mb-8" action="<?= base_url('auth/closeticket') ?>" method="POST">
                                        <input type="hidden" name="id_ticket" value="<?= $ticket['id'] ?>">
                                        <a>
                                            <button class="text-center ab_db w-100 mb-2 btn my-2" style="text-align:center;margin:0 auto;margin-top:20px;" type="submit">
                                                Encerrar ticket
                                            </button>
                                        </a>
                                    </form>
                                <?php endif; ?>
                            </div>
                            <div style="text-align:center;margin:10px;">
                                <a href="<?= base_url('dashboard/tickets') ?>">
                                    <button class="text-center ab_db w-100 mb-2 btn my-2" style="text-align:center;margin:0 auto;margin-top:20px;">
                                        Voltar
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php else : ?>
                    <div class="content-more-news">
                        <div class="last-more-top">
                            Ticket
                        </div>
                        <div class="last-more-fon" style="margin: 0 auto;">
                            <div style="text-align:center;margin:10px;">
                                Ticket inexistente
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</section>
<?= $this->endSection() ?>
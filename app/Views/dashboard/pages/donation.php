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
                <div class="content-more-news">
                    <div class="last-more-top" style="padding:10px;text-align:center;border-bottom:1px solid rgba(155, 155, 155, 0.2);">
                        Doação
                    </div>
                    <div class="last-more-fon" style="margin: 0 auto;text-align:center;padding:10px;">
                        <?php if ($donate_paginate) : ?>
                            <?php foreach ($donate_paginate as $key => $value) : ?>
                                <?php if ($value['createdAt'] == null) : ?>
                                    <div style="text-align:center;">
                                        Não há faturas
                                    </div>
                                <?php
                                    $auth = true;
                                    continue;
                                endif; ?>
                                <div style="display:inline-block;width:30%;background-color:rgb(65, 65, 65);padding-bottom:20px;">
                                    <div style="background-color:rgb(55, 55, 55);padding:10px;margin:10px;">
                                        <span>
                                            R$ <?= $value['value'] ?>
                                        </span>
                                    </div>
                                    <div style="padding-top:10px;">
                                        <?php if (!($value['status'])) : ?>
                                            <a style="background-color:rgb(55, 105, 55);padding:10px;" target="_blank" href="<?= $value['paymentUrl'] ?>">
                                                Pagar
                                            </a>
                                        <?php endif; ?>
                                        <span style="background-color:<?= $value['status'] ? 'rgb(155, 55, 55);' : 'rgb(155, 155, 55);' ?>padding:10px;">
                                            <?= $value['status'] ? 'Pago' : 'Pendente' ?>
                                        </span>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                            <?php if ($donate_pager && !isset($auth)) : ?>
                                <?= $donate_pager->links('donate', 'pagination') ?>
                            <?php endif; ?>
                        <?php else : ?>
                            Não há pacotes de doação cadastrada!
                        <?php endif; ?>
                    </div>
                </div>
                <?php if ($package_paginate) : ?>
                    <div class="content-more-news">
                        <div class="last-more-top" style="padding:10px;text-align:center;border-bottom:1px solid rgba(155, 155, 155, 0.2);">
                            Pacotes
                        </div>
                        <div class="last-more-fon" style="margin: 0 auto;text-align:center;padding:10px;">
                            <div>
                                <?php foreach ($package_paginate as $key => $value) : ?>
                                    <div style="display:inline-block;background-color:rgba(55,55,55,1);width:40%;margin:10px;">
                                        <div>
                                            <p style="text-align:center;padding:10px 0;background-color:rgba(25,25,25,0.2)"><?= $value['name'] ?></p>
                                        </div>
                                        <div>
                                            <div>
                                                <img src="https://s3.amazonaws.com/preview.thegamecrafter.com/7C2E1DC8-245A-11EA-AA99-974C4E5FF538.png" class="w-3/5" />
                                            </div>
                                            <p style="background-color:rgba(105, 105, 105, 0.7);text-align:center;margin:10px;padding:10px;">
                                                <?= $value['donate'] ?> + <?= $value['bonus'] ?>% = <?= ceil($value['donate'] + ($value['donate'] * ($value['bonus'] / 100))) ?> donate
                                            </p>
                                            <?php if ($value['donate_bonus']) : ?>
                                                <div style="background-color:rgba(55, 75, 105, 0.7);text-align:center;padding: 10px;margin:10px;">
                                                    <div style="border-bottom:1px solid rgb(55, 55, 55);">
                                                        Bonificações
                                                    </div>
                                                    <?php foreach ($value['donate_bonus'] as $key2 => $value2) : ?>
                                                        <div style="margin: 10px 0;">
                                                            <?= $value2['itemname'] ?>
                                                        </div>
                                                    <?php endforeach; ?>
                                                </div>
                                            <?php endif; ?>
                                            <div style="background-color:rgba(105, 105, 105, 0.7);text-align:center;margin:10px;padding:20px 0;">
                                                <p style="margin-bottom: 20px;background-color:rgba(155,155,155,0.2);padding:10px;margin:0 10px;margin-bottom: 20px;">R$<?= $value['value'] ?></p>
                                                <a style="background-color:rgba(105, 105, 155, 0.7);text-align:center;margin:10px;padding:10px;" href="<?= base_url('auth/purchasemp/' . $value['id']) ?>">
                                                    Mercadopago
                                                </a>
                                                <a style="background-color:rgba(105, 105, 155, 0.7);text-align:center;margin:10px;padding:10px;" href="<?= base_url('auth/purchasepic/' . $value['id']) ?>">
                                                    Picpay
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                <?php else : ?>
                    Não há pacotes de doação cadastrada!
                <?php endif; ?>
            </ul>
        </div>
    </div>
</section>
<?= $this->endSection() ?>
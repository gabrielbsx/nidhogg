<?php if (isset(session('web')['error'])) : ?>
    <div class="fast-links" style="display:block;text-align:center;margin: 10px;padding:15px;width: 100%;background: url(<?= base_url('assets/muweos/images/line-news.jpg') ?>) center top no-repeat, url(<?= base_url('assets/muweos/images/line-news.jpg') ?>) center bottom no-repeat;background-color: rgb(155, 25, 25);">
        <h3 style="padding:0;margin:0;">
            <?= session('web')['error'] ?>
        </h3>
    </div>
<?php endif; ?>

<?php if (isset(session('web')['success'])) : ?>
    <div class="fast-links" style="display:block;text-align:center;margin: 10px;padding:15px;width:100%;background: url(<?= base_url('assets/muweos/images/line-news.jpg') ?>) center top no-repeat, url(<?= base_url('assets/muweos/images/line-news.jpg') ?>) center bottom no-repeat;background-color: rgb(25, 155, 25);">
        <h3 style="padding:0;margin:0;">
            <?= session('web')['success'] ?>
        </h3>
    </div>
<?php endif; ?>
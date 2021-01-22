<!DOCTYPE html>
<html lang="pt">
<?= view('template/head') ?>

<body id="theme_m2" itemscope="" itemtype="http://schema.org/WebPage">
    <div class="container">
        <?= view('template/header') ?>
        <div class="row" id="content_bg">
            <?= view('template/message') ?>
            <main class="col-12 col-lg-9" itemprop="mainContentOfPage" itemscope="">
                <?= $this->renderSection('page') ?>
                <?= view('template/ranking') ?>
            </main>
            <?= view('template/aside') ?>
        </div>
    </div>
    <?= view('template/scripts') ?>
</body>

</html>
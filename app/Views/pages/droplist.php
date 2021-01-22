<?= $this->extend('layouts') ?>
<?= $this->section('page') ?>
<div class="content-more-news">
    <div class="last-more-top">
        Droplist
    </div>
    <div class="last-more-fon" style="margin: 0 auto;text-align:center;height:550px;">
        <?php if ($droplist) : ?>
            <table style="color:black;margin: 0 auto;text-align:center;" class="dataTable table" id="dtBasicExample">
                <thead>
                    <tr>
                        <th style="color:white;">Mobname</th>
                        <th style="color:white;">Itemname</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($droplist as $key => $value) : ?>
                        <?php if ($value['itemname'] == 'Sem item' || $value['itemname'] == '') continue; ?>
                        <tr>
                            <td><?= $value['mobname'] ?></td>
                            <td><?= $value['itemname'] ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php else : ?>
            Aguarde atualização do droplist!
        <?php endif; ?>
    </div>
</div>
<?= $this->endSection() ?>
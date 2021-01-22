<?= $this->extend('layouts') ?>
<?= $this->section('page') ?>
<section class="mb_large" id="news">
    <div id="news_filter">
        <ul class="d-none d-md-flex align-items-md-center border border-bottom-0" id="news_category">
            <li class="active d-flex align-items-center" id="news_all">
                <svg height="16" viewBox="0 0 256 512" width="16">
                    <path d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z" fill="currentColor"></path>
                </svg>
                <a title="Todas">Downloads</a>
            </li>
        </ul>
        <div style="border: 1px solid #222222;overflow:hidden;">
            <header class="d-md-none component_title border-0">
                <svg height="16" viewBox="0 0 256 512" width="16">
                    <path d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z" fill="currentColor"></path>
                </svg>
                <h2>Downloads</h2>
            </header>
            <ul id="news_list_all container" style="padding:10px;overflow:hidden;">
                <div class="last-more-fon" style="margin: 0 auto;">
                    <div style="display:block;text-align:center; padding:20px;">
                        <a style="background-color:rgb(55,55,155);padding: 10px 10%;margin:5px;" href="#">
                            Mediafire
                        </a>
                        <a style="background-color:rgb(55,155,55);padding: 10px 10%;margin:5px;" href="#">
                            4shared
                        </a>
                        <a style="background-color:rgb(155,55,55);padding: 10px 10%;margin:5px;" href="#">
                            Mega
                        </a>
                    </div>
                    <table class="table table-custom table-striped table-dark table-bordered table-hover table-m2 mb-0 text-center">
                        <thead>
                            <tr>
                                <th colspan="1">
                                </th>
                                <th colspan="1">
                                    <span class="text-gray-300">Mínimo</span>
                                </th>
                                <th colspan="1">
                                    <span class="text-gray-300">Recomendado</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <span>Processadores</span>
                                </td>
                                <td>
                                    <span>Intel Pentium 4 1.5 GHz</span>
                                </td>
                                <td>
                                    <span>Intel Pentium 4 2.8 GHz +</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span>Memória RAM</span>
                                </td>
                                <td>
                                    <span>512 MB</span>
                                </td>
                                <td>
                                    <span>1 GB</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span>Placa de Vídeo</span>
                                </td>
                                <td>
                                    <span>NVidia FX 52000 / ATI Radeon 9500</span>
                                </td>
                                <td>
                                    <span>NVidia GeForce 6600 / ATI Radeon 9800</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span>Hard Disk</span>
                                </td>
                                <td>
                                    <span>500 MB</span>
                                </td>
                                <td>
                                    <span>1 GB</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span>Sistema</span>
                                </td>
                                <td>
                                    <span>Windows XP</span>
                                </td>
                                <td>
                                    <span>Windows 7 +</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </ul>
        </div>
    </div>
</section>
<?= $this->endSection() ?>
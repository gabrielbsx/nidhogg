<header class="row" style="margin-bottom:0;" id="ongame_header" itemscope="" itemtype="https://schema.org/Organization">
    <article class="top-header-fixed" id="header_jogo">
        <h1>
            <a class="d-none d-md-flex align-items-center ongame_header_logo" href="<?= base_url('site') ?>" itemprop="url" title="">
                <img alt="" itemprop="logo" src="<?= base_url('static/img/logo.png') ?>" />
            </a>
            <span>Nidhogg</span>
        </h1>
        <nav style="background-image:url('<?= base_url('static/img/m2/bg-nav.png') ?>')">
            <div class="align-items-center" id="nav_mobile">
                <button class="btn" id="nav_mobile_button" type="button">
                    <svg viewBox="0 0 448 512">
                        <path d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z" fill="currentColor"></path>
                    </svg>
                </button>
                <h1>
                    <a class="d-md-none ongame_header_logo" href="<?= base_url('site') ?>" itemprop="url" title="">
                        <img alt="Nidhogg" itemprop="image" src="<?= base_url('static/img/logo.png') ?>'  '  " />
                    </a>
                    <span>Nidhogg</span>
                </h1>
            </div>
            <ul class="nav justify-content-lg-around align-items-lg-center" id="ongame_header_nav_list" itemscope="" itemtype="http://www.schema.org/SiteNavigationElement">
                <li itemprop="name">
                    <a href="<?= base_url('site') ?>" itemprop="url" title="Notícias">
                        Home
                        <meta content="Notícias" itemprop="name" />
                        <svg class="d-lg-none" height="14" viewBox="0 0 448 512" width="12">
                            <path d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z" fill="currentColor"></path>
                        </svg>
                    </a>
                </li>
                <li itemprop="name">
                    <a href="<?= base_url('site/guides') ?>" itemprop="url" title="Guia">
                        Guia do Jogo
                        <meta content="Guia" itemprop="name" />
                        <svg class="d-lg-none" height="14" viewBox="0 0 448 512" width="12">
                            <path d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z" fill="currentColor"></path>
                        </svg>
                    </a>
                </li>
                <li itemprop="name">
                    <a href="<?= base_url('site/ranking') ?>" itemprop="url" title="Ranking">
                        Ranking
                        <meta content="Ranking" itemprop="name" />
                        <svg class="d-lg-none" height="14" viewBox="0 0 448 512" width="12">
                            <path d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z" fill="currentColor"></path>
                        </svg>
                    </a>
                </li>
                <li itemprop="name">
                    <a href="<?= base_url('site/downloads') ?>" itemprop="url" title="Download">
                        Downloads
                        <meta content="Download" itemprop="name" />
                        <svg class="d-lg-none" height="14" viewBox="0 0 448 512" width="12">
                            <path d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z" fill="currentColor"></path>
                        </svg>
                    </a>
                </li>
                <li itemprop="name">
                    <a href="<?= base_url('dashboard/tickets') ?>" itemprop="url" title="Suporte">
                        Suporte
                        <meta content="Suporte" itemprop="name" />
                        <svg class="d-lg-none" height="14" viewBox="0 0 448 512" width="12">
                            <path d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z" fill="currentColor"></path>
                        </svg>
                    </a>
                </li>
                <li itemprop="name">
                    <a href="<?= base_url('dashboard/donate') ?>" itemprop="url" title="Loja">
                        Doação
                        <meta content="Loja" itemprop="name" />
                        <svg class="d-lg-none" height="14" viewBox="0 0 448 512" width="12">
                            <path d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z" fill="currentColor"></path>
                        </svg>
                    </a>
                </li>
            </ul>
            <div id="menu_collapse_bg"></div>
        </nav>
        <div id="nav_height_stick_control"></div>
    </article>
</header>
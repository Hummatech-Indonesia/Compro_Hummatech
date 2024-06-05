<header>
    <div class="uk-section uk-padding-remove-vertical">
        <nav class="uk-navbar-container uk-navbar-transparent"
            data-uk-sticky="show-on-up: true; animation: uk-animation-slide-top;">
            <div class="uk-container" data-uk-navbar>
                <div class="uk-navbar-left">
                    <a class="uk-navbar-item uk-logo" href="/">
                        <img src="{{ asset('cakra.png') }}" alt="logo" width="280">
                    </a>
                    <ul class="uk-navbar-nav uk-visible@m">
                        <li><a href="/">Dashboard</a>
                        </li>
                        <li><a href="#">Tentang<span data-uk-navbar-parent-icon></span></a>
                            <div class="uk-navbar-dropdown">
                                <ul class="uk-nav uk-navbar-dropdown-nav">
                                    <li><a href="/about/profile">Profile</a></li>
                                    <li><a href="/about/vision-mision">Visi & Misi</a></li>
                                    <li><a href="/about/organizational-structure">Struktur Organisasi</a></li>
                                    <li><a href="/about/company-structure">Struktur Perusahaan</a></li>
                                    <li><a href="/about/logo">Logo</a></li>
                                    <li><a href="/about/team">Tim</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="#">Layanan<span data-uk-navbar-parent-icon></span></a>
                            <div class="uk-navbar-dropdown">
                                <ul class="uk-nav uk-navbar-dropdown-nav">
                                    @forelse ($services as $service)
                                        <li class="{{ request()->is('/services/' . $service->slug) ? 'active' : '' }}">
                                            <a href="/services/{{ $service->slug }}">{{ $service->name }}</a>
                                        </li>
                                    @empty
                                        <li><a href="javascript:void(0)">Layanan Masih Kosong</a></li>
                                    @endforelse
                                </ul>
                            </div>
                        </li>

                        <li><a href="#">Portofolio<span data-uk-navbar-parent-icon></span></a>
                            <div class="uk-navbar-dropdown">
                                <ul class="uk-nav uk-navbar-dropdown-nav">
                                    <li><a href="/product">Produk</a></li>
                                    <li><a href="/portfolio">Portofolio</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="/news">Berita</a>
                        </li>
                        <li><a href="/contact">Hubungi</a>
                        </li>
                        <li><a href="/job-vacancy">Lowongan</a>
                        </li>
                    </ul>
                </div>
                <div class="uk-navbar-right">

                </div>
            </div>
        </nav>
    </div>
</header>

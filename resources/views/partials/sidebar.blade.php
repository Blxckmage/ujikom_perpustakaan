        <!-- Sidebar -->
        <aside id="sidebar" class="u-sidebar">
            <div class="u-sidebar-inner">
                <header class="u-sidebar-header">
                    <a class="u-sidebar-logo" href="index.html">
                        <div class="u-header-left">
                            <a class="u-header-logo" href="/">
                                <h1><b>Alexandria</b></h1>
                            </a>
                        </div>
                    </a>
                </header>

                <nav class="u-sidebar-nav">
                    <ul class="u-sidebar-nav-menu u-sidebar-nav-menu--top-level">
                        {{-- All Role --}}
                        <li class="u-sidebar-nav-menu__item">
                            <a class="u-sidebar-nav-menu__link " href="/">
                                <span class="u-sidebar-nav-menu__item-icon">H</span>
                                <span class="u-sidebar-nav-menu__item-title">Home</span>
                            </a>
                        </li>

                        <li class="u-sidebar-nav-menu__item">
                            <a class="u-sidebar-nav-menu__link" href="/books">
                                <span class="u-sidebar-nav-menu__item-icon">B</span>
                                <span class="u-sidebar-nav-menu__item-title">Buku</span>
                            </a>
                        </li>

                        <li class="u-sidebar-nav-menu__item">
                            <a class="u-sidebar-nav-menu__link" href="/borrowing">
                                <span class="u-sidebar-nav-menu__item-icon">P</span>
                                <span class="u-sidebar-nav-menu__item-title">Peminjaman</span>
                            </a>
                        </li>
                        <hr />
                        {{-- Employee + Admin --}}
                        @if (Auth::user()->roles == 'employee' || Auth::user()->roles == 'admin')
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="#!" data-target="#subMenu3">
                                    <i class="far fa-folder-open u-sidebar-nav-menu__item-icon"></i>
                                    <span class="u-sidebar-nav-menu__item-title">Employee</span>
                                    <i class="fa fa-angle-right u-sidebar-nav-menu__item-arrow"></i>
                                    <span class="u-sidebar-nav-menu__indicator"></span>
                                </a>

                                <ul id="subMenu3" class="u-sidebar-nav-menu u-sidebar-nav-menu--second-level"
                                    style="">
                                    <li class="u-sidebar-nav-menu__item">
                                        <a class="u-sidebar-nav-menu__link" href="/tambah-buku">
                                            <span class="u-sidebar-nav-menu__item-icon">T</span>
                                            <span class="u-sidebar-nav-menu__item-title">Tambah Buku</span>
                                        </a>
                                    </li>
                                    <li class="u-sidebar-nav-menu__item">
                                        <a class="u-sidebar-nav-menu__link" href="/tambah-kategori">
                                            <span class="u-sidebar-nav-menu__item-icon">T</span>
                                            <span class="u-sidebar-nav-menu__item-title">Tambah Kategori</span>
                                        </a>
                                    </li>
                                    <li class="u-sidebar-nav-menu__item">
                                        <a class="u-sidebar-nav-menu__link" href="/tambah-penerbit">
                                            <span class="u-sidebar-nav-menu__item-icon">T</span>
                                            <span class="u-sidebar-nav-menu__item-title">Tambah Penerbit</span>
                                        </a>
                                    </li>
                                    <li class="u-sidebar-nav-menu__item">
                                        <a class="u-sidebar-nav-menu__link" href="/ubah-denda">
                                            <span class="u-sidebar-nav-menu__item-icon">U</span>
                                            <span class="u-sidebar-nav-menu__item-title">Ubah Denda</span>
                                        </a>
                                    </li>
                                    <li class="u-sidebar-nav-menu__item">
                                        <a class="u-sidebar-nav-menu__link" href="/approval">
                                            <span class="u-sidebar-nav-menu__item-icon">A</span>
                                            <span class="u-sidebar-nav-menu__item-title">Approve Peminjaman</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        @endif

                        <hr />
                        {{-- Admin --}}
                        @if (Auth::user()->roles == 'admin')
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="/tambah-petugas">
                                    <span class="u-sidebar-nav-menu__item-icon">T</span>
                                    <span class="u-sidebar-nav-menu__item-title">Tambah Petugas</span>
                                </a>
                            </li>
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="/laporan">
                                    <span class="u-sidebar-nav-menu__item-icon">B</span>
                                    <span class="u-sidebar-nav-menu__item-title">Bikin Laporan</span>
                                </a>
                            </li>
                        @endif
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- End Sidebar -->

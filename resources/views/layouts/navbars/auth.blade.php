<div class="sidebar" data-color="white" data-active-color="info" style=>
    <div class="logo">
        <a href="#" class="simple-text logo-mini">
            <div class="logo-image-small">
                <img src="{{ asset('paper') }}/img/logo-small.png">
            </div>
        </a>
        <a href="#" class="simple-text logo-normal">
            {{ __('Gerai KOPPELA') }}
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="{{ $elementActive == 'dashboard' ? 'active' : '' }}">
                <a href="{{ route('page.index', 'dashboard') }}">
                    <i class="nc-icon nc-bank"></i>
                    <p>{{ __('Dashboard') }}</p>
                </a>
            </li>
            
            <li class="{{ $elementActive == 'user' || $elementActive == 'kasir' ? 'active' : '' }}">
                <a data-toggle="collapse" aria-expanded="false" href="#pegawai">
                    <i class="nc-icon nc-badge"></i>
                    <p>
                            {{ __('Pegawai') }}
                        <b class="caret"></b>
                    </p>
                </a>
                <!-- <div class="collapse hide" id="pegawai"> -->
                <div class="{{ $elementActive == 'user' || $elementActive == 'kasir' ? 'active' : 'collapse hide' }}" id="pegawai">
                    <ul class="nav">
                        <li class="{{ $elementActive == 'user' ? 'active' : '' }}">
                            <a href="{{ route('page.index', 'user') }}">
                                <span class="sidebar-mini-icon">{{ __('A') }}</span>
                                <span class="sidebar-normal">{{ __(' Admin ') }}</span>
                            </a>
                        </li>
                        <li class="{{ $elementActive == 'kasir' ? 'active' : '' }}">
                            <a href="{{ route('page.index', 'kasir') }}">
                                <span class="sidebar-mini-icon">{{ __('K') }}</span>
                                <span class="sidebar-normal">{{ __(' Kasir ') }}</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="{{ $elementActive == 'kategori' || $elementActive == 'produk' ? 'active' : '' }}">
                <a data-toggle="collapse" aria-expanded="false" href="#tabel">
                    <i class="nc-icon nc-box-2"></i>
                    <p>
                            {{ __('Data Barang') }}
                        <b class="caret"></b>
                    </p>
                </a>
                <!-- <div class="collapse hide" id="tabel"> -->
                <div class="{{ $elementActive == 'kategori' || $elementActive == 'produk' ? 'active' : 'collapse hide' }}" id="tabel">
                    <ul class="nav">
                        <li class="{{ $elementActive == 'kategori' ? 'active' : '' }}">
                            <a href="{{ route('page.index', 'kategori') }}">
                                <span class="sidebar-mini-icon">{{ __('K') }}</span>
                                <span class="sidebar-normal">{{ __(' Kategori ') }}</span>
                            </a>
                        </li>
                        <li class="{{ $elementActive == 'produk' ? 'active' : '' }}">
                            <a href="{{ route('page.index', 'produk') }}">
                                <span class="sidebar-mini-icon">{{ __('P') }}</span>
                                <span class="sidebar-normal">{{ __(' Produk ') }}</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            
            <li class="{{ $elementActive == 'tables' ? 'active' : '' }}">
                <a href="{{ route('page.index', 'tables') }}">
                    <i class="nc-icon nc-cart-simple"></i>
                    <p>{{ __('Transaksi') }}</p>
                </a>
            </li>

            <!-- <li class="{{ $elementActive == 'icons' ? 'active' : '' }}">
                <a href="{{ route('page.index', 'icons') }}">
                    <i class="nc-icon nc-diamond"></i>
                    <p>{{ __('Icons') }}</p>
                </a>
            </li>
            <li class="{{ $elementActive == 'map' ? 'active' : '' }}">
                <a href="{{ route('page.index', 'map') }}">
                    <i class="nc-icon nc-pin-3"></i>
                    <p>{{ __('Maps') }}</p>
                </a>
            </li>
            <li class="{{ $elementActive == 'notifications' ? 'active' : '' }}">
                <a href="{{ route('page.index', 'notifications') }}">
                    <i class="nc-icon nc-bell-55"></i>
                    <p>{{ __('Notifications') }}</p>
                </a>
            </li>
            <li class="{{ $elementActive == 'tables' ? 'active' : '' }}">
                <a href="{{ route('page.index', 'tables') }}">
                    <i class="nc-icon nc-tile-56"></i>
                    <p>{{ __('Table List') }}</p>
                </a>
            </li>
            <li class="{{ $elementActive == 'typography' ? 'active' : '' }}">
                <a href="{{ route('page.index', 'typography') }}">
                    <i class="nc-icon nc-caps-small"></i>
                    <p>{{ __('Typography') }}</p>
                </a>
            </li> -->

        </ul>
    </div>
</div>
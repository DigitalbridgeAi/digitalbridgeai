<header aria-label="Header">
    <nav class="navbar fixed-top navbar-dark  navbar-expand-lg theme-navbar">
        <a class="navbar-brand" href="{{ route('site.index') }}">
            <img src="{{ asset('images/layout/digital-bridge-logo.svg') }}" alt="DigitalBridge Logo" />

        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>

        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">



            <ul data-block-uuid="efef8d71-db2c-44b3-8fdf-eca82bc63a28" class="navbar-nav ml-auto">
                {{-- check if its route --}}

                <li class="nav-item {{ Route::is('site.shareholders') ? 'active' : '' }}">
                    <a class="nav-link overview" href="{{ route('site.shareholders') }}">Overview<span
                            class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item {{ Route::is('site.stock*') ? 'active' : '' }}">
                    <a class="nav-link stock" href="{{ route('site.stock.information.annual-quote') }}">Stock<span
                            class="sr-only">(current)</span></a>
                    <ul class="menu side-menu d-none">
                        <li class="nav-item {{ Route::is('site.stock.information.annual-quote') ? 'active' : '' }}">
                            <a class="nav-link stock-quote"
                                href="{{ route('site.stock.information.annual-quote') }}">Stock Quote<span
                                    class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item {{ Route::is('site.stock.information.dividends') ? 'active' : '' }}">
                            <a class="nav-link dividends"
                                href="{{ route('site.stock.information.dividends') }}">Dividends<span
                                    class="sr-only">(current)</span></a>
                        </li>
                        <li
                            class="nav-item {{ Route::is('site.stock.information.clnr-historic-tax') ? 'active' : '' }}">
                            <a class="nav-link clny-dividend-tax-treatment"
                                href="{{ route('site.stock.information.dgrb-tax') }}">CLNY
                                Dividend Tax Treatment<span class="sr-only">(current)</span></a>
                        </li>

                        <li
                            class="nav-item {{ Route::is('site.stock.information.NRF-historic-tax') ? 'active' : '' }}">
                            <a class="nav-link nrf-historic-tax"
                                href="{{ route('site.stock.information.NRF-historic-tax') }}">NRF Historic
                                Tax<span class="sr-only">(current)</span></a>
                        </li>
                        <li
                            class="nav-item {{ Route::is('site.stock.information.distribution-reinvestment-program') ? 'active' : '' }}">
                            <a class="nav-link distribution-reinvestment-program"
                                href="{{ route('site.stock.information.distribution-reinvestment-program') }}">Distribution
                                Reinvestment
                                Program<span class="sr-only">(current)</span></a>
                        </li>
                    </ul>

                </li>
                <li class="nav-item {{ Route::is('site.financials*') ? 'active' : '' }}">
                    <a class="nav-link financials"
                        href="{{ route('site.financials.information.quaterly-reports') }}">Financials<span
                            class="sr-only">(current)</span></a>
                    <ul class="menu side-menu d-none">
                        <li
                            class="nav-item {{ Route::is('site.financials.information.annual-reports') ? 'active' : '' }}">
                            <a class="nav-link supplements" href="/financial-information/supplements">Supplements<span
                                    class="sr-only">(current)</span></a>
                        </li>
                        <li
                            class="nav-item {{ Route::is('site.financials.information.supplements') ? 'active' : '' }}">
                            <a class="nav-link annual-report-proxy" href="/financial-information/annual-reports">Annual
                                Report/Proxy<span class="sr-only">(current)</span></a>
                        </li>
                    </ul>

                </li>
                {{-- <li class="nav-item {{ Route::is('site.sec-fillings') ? 'active' : '' }}">
                    <a class="nav-link sec-filings" href="{{ route('site.sec-fillings') }}">SEC Filings<span
                            class="sr-only">(current)</span></a>
                </li> --}}
                <li class="nav-item {{ Route::is('site.coperate-governance.highlights') ? 'active' : '' }}">
                    <a class="nav-link governance"
                        href="{{ route('site.coperate-governance.highlights') }}">Governance<span
                            class="sr-only">(current)</span></a>
                </li>
                {{-- <li class="nav-item {{ Route::is('site.news.report') ? 'active' : '' }}">
                    <a class="nav-link news" href="{{ route('site.news.report') }}">News<span
                            class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item {{ Route::is('site.events') ? 'active' : '' }}">
                    <a class="nav-link events--presentations" href="{{ route('site.events') }}">Events &amp;
                        Presentations<span class="sr-only">(current)</span></a>
                </li> --}}
                <li class="nav-item {{ Route::is('site.contact.us') ? 'active' : '' }}">
                    <a class="nav-link contact-us-email-alerts" href="{{ route('site.contact.us') }}">Contact Us/Email
                        Alerts<span class="sr-only">(current)</span></a>
                </li>
            </ul>




        </div>
    </nav>
</header>

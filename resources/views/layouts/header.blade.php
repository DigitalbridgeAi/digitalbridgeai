<header class="fixed-top">
    <div class="container-fluid">
        <div id="navbar" class="navbar navbar-expand-lg">
            <a href="{{ route('site.index') }}" class="navbar-brand">
                <img src="{{ asset('images/layout/digital-bridge-logo.svg') }}" alt="DigitalBridge Logo" />
            </a>
            <button class="navbar-toggler x collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#main-nav"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle Navigation">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="main-nav">
                <ul class="nav first-level-container">
                    <li class="dropdown">
                        <a href="#" role="button" data-bs-toggle="dropdown" class="nav-first">About Us</a>
                        <ul class="dropdown-menu second-level">
                            <li>
                                <a class="sp" href="{{ route('site.about') }}">Overview</a>
                            </li>
                            <li>
                                <a class="sp" href="{{ route('site.about') }}#about-leadership">Leadership</a>
                            </li>
                            <li>
                                <a class="sp" href="{{ route('site.about') }}#about-careers">Careers</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" role="button" data-bs-toggle="dropdown" class="nav-first">Our
                            Businesses</a>
                        <ul class="dropdown-menu second-level">
                            <li>
                                <a href="{{ route('site.business') }}">Overview</a>
                            </li>
                            <li>
                                <a href="{{ route('site.business.digital-equity') }}">Digital Equity</a>
                            </li>
                            <li>
                                <a href="{{ route('site.business.digital-credit') }}">Digital Credit</a>
                            </li>
                            <li>
                                <a href="{{ route('site.business.liquid-strategies') }}">Liquid Strategies</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" role="button" data-bs-toggle="dropdown" class="nav-first">Responsibility</a>
                        <ul class="dropdown-menu second-level">
                            <li>
                                <a class="sp" href="{{ route('site.responsibility') }}">Overview</a>
                            </li>
                            <li>
                                <a href="{{ asset('docs/2021-DigitalBridge-ESG-Report.pdf') }}" target="_blank">2021
                                    ESG
                                    Report</a>
                            </li>
                            <li>
                                <a class="sp" href="{{ route('site.responsibility') }}#responsibility-brochure">ESG
                                    Priorities</a>
                            </li>
                            <li>
                                <a class="sp"
                                    href="{{ route('site.responsibility') }}#responsibility-net-zero-making-progress-goal">Net
                                    Zero
                                    2030</a>
                            </li>
                            <li>
                                <a class="sp" href="{{ route('site.responsibility') }}#goals">Goals</a>
                            </li>
                            <li>
                                <a class="sp"
                                    href="{{ route('site.responsibility') }}#responsibility-dei-initiative">DEI</a>
                            </li>
                            <li>
                                <a class="sp"
                                    href="{{ route('site.responsibility') }}#responsibility-our-partners">Our
                                    Partners</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="index.html#" role="button" data-bs-toggle="dropdown"
                            class="nav-first">Shareholders</a>
                        <ul class="dropdown-menu second-level">
                            <li>
                                <a href="{{ route('site.shareholders') }}">Overview</a>
                            </li>
                        
                            <li>
                                <a href="{{ route('site.stock.information.annual-quote') }}">Stock/Dividend
                                    Information</a>
                            </li>
                            <li>
                                <a href="{{ route('site.financials.information.quaterly-reports') }}">Financial Information</a>
                            </li>
                            {{-- <li>
                                <a href="{{ route('site.sec-fillings') }}">SEC Filings</a>
                            </li> --}}
                            <li>
                                <a href="{{ route('site.coperate-governance.highlights') }}">Corporate Governance</a>
                            </li>
                            {{-- <li>
                                <a href="{{ route('site.news.report') }}">News</a>
                            </li>
                            <li>
                                <a href="{{ route('site.events') }}">Events & Presentations</a>
                            </li> --}}
                            <li>
                                <a href="{{ route('site.contact.us') }}">Contact Us / Email Alerts</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ route('site.news1') }}" class="nav-first">News</a>
                    </li>
                    <li>
                        <a href="{{ route('site.contact') }}" class="nav-first">Contact</a>
                    </li>
                    <li>
                        <a href="http://www.digitalbridge.com/private-investors" class="nav-first" target="_blank"
                            rel="noopener">LP Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>

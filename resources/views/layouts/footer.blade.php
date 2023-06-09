<footer>
    <div class="container-xl">
        <div class="row">
            <div class="col-lg col-sm-6 mb-lg-0 mb-5">
                <div class="contact-info">
                    <p>
                        <a href="index.html" class="nav-title">Contact</a>
                    </p>
                    <p>
                        DigitalBridge Group, Inc.<br />
                        750 Park of Commerce Drive<br />
                        Suite 210<br />
                        Boca Raton, FL 33487<br />
                        561-570-4644
                    </p>
                    <p><a href="contact.html">Contact Us</a></p>
                </div>
            </div>
            <div class="col-lg col-sm-6">
                <p><a href="{{ route('site.about') }}l" class="nav-title">About Us</a></p>
                <ul class="sub-nav mb-5">
                    <li>
                        <a class="sp" href="{{ route('site.about') }}l#about-digital-bridge">Overview</a>
                    </li>
                    <li>
                        <a class="sp" href="{{ route('site.about') }}l#about-leadership">Leadership</a>
                    </li>
                    <li>
                        <a class="sp" href="{{ route('site.about') }}l#about-careers">Careers</a>
                    </li>
                </ul>
                <p>
                    <a href="{{ route('site.business') }}" class="nav-title">Our Business</a>
                </p>
                <ul class="sub-nav mb-5">
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
            </div>
            <div class="col-lg col-sm-6 mb-5 mb-lg-0">
                <p>
                    <a href="{{ route('site.responsibility') }}" class="nav-title">Responsibility</a>
                </p>
                <ul class="sub-nav">
                    <li>
                        <a href="docs/2021-DigitalBridge-ESG-Report.pdf" target="_blank">2021 ESG Report</a>
                    </li>
                    <li>
                        <a class="sp" href="{{ route('site.responsibility') }}#responsibility-brochure">ESG
                            Priorities</a>
                    </li>
                    <li>
                        <a class="sp"
                            href="{{ route('site.responsibility') }}#responsibility-net-zero-making-progress-goal">Net
                            Zero 2030</a>
                    </li>
                    <li>
                        <a class="sp" href="{{ route('site.responsibility') }}#goals">Goals</a>
                    </li>
                    <li>
                        <a class="sp"
                            href="{{ route('site.responsibility') }}#responsibility-dei-initiative">DEI</a>
                    </li>
                    <li>
                        <a class="sp" href="{{ route('site.responsibility') }}#responsibility-our-partners">Our
                            Partners</a>
                    </li>
                </ul>
            </div>
            <div class="col-lg col-sm-6 mb-lg-0 mb-5">
                <p>
                    <a href="{{ route('site.shareholders') }}" class="nav-title">Shareholders</a>
                </p>
                <ul class="sub-nav">
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
                        <a href="{{ route('site.news') }}">News</a>
                    </li>
                    <li>
                        <a href="{{ route('site.events') }}">Events & Presentations</a>
                    </li> --}}
                    <li>
                        <a href="{{ route('site.contact.us') }}">Contact Us / Email Alerts</a>
                    </li>
                </ul>
            </div>
            <div class="col-lg col-sm-6">
                <p class="mb-5">
                    <a href="{{ route('site.news1') }}" class="nav-title">News</a>
                </p>
                <p class="mb-5">
                    <a href="docs/uk-tax-strategy-2022.pdf" target="_blank" class="nav-title">Tax Strategy</a>
                </p>
                <p>
                    <a href="" target="_blank" rel="noopener" class="nav-title">LP Login</a>
                </p>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="row">
                <div class="col-lg-12">
                    <div class="social-follow text-end">
                        <a href="https://www.linkedin.com/company/digital-bridge-group/" title="Follow us on LinkedIn"
                            target="_blank"><span class="icon-linkedin-square"></span></a>
                        <a href="https://twitter.com/dbrg_group?lang=en" title="Follow us on Twitter"
                            target="_blank"><span class="icon-twitter-square"></span></a>
                        <a href="https://www.youtube.com/channel/UCosA67kf-Cu4WakuX3TIHdw/featured"
                            title="Subscribe on YouTube" target="_blank"><span class="icon-youtube-square"></span></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <p class="copyright">
                        Copyright &copy; 2023 DigitalBridge Group, Inc.
                    </p>
                </div>
                <div class="col-lg-6">
                    <div class="misc-links">
                        <a href="http://www.digitalbridge.com/private-investors" target="_blank">Private Investor
                            Login</a>
                        &nbsp;|&nbsp;
                        <a href="{{ route('site.privacy') }}">Privacy Statement</a>
                        &nbsp;|&nbsp;
                        <a href="{{ route('site.terms-of-use') }}">Terms of Use</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

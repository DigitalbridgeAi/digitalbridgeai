@extends('layouts.app')


@section('content')
    <section id="index" class="banner lines-btm" style="background-image:url('images/banners/news-section-bg.jpg');">
        <div class="container-xl h-100">
            <div class="row">
                <div class="col-lg-5">
                    <div class="banner-header">
                        <h1 class="rule aos-init aos-animate" data-aos="fade">News &amp; Announcements - DigitalBridge</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-light lines-top aos-init aos-animate" data-aos="fade" data-aos-delay="400">
        <div class="container-xl">
            <div class="row">
                <div class="col-md-8 rel">
                    <ul class="standard-list">
                        <li>
                            <span class="date">April 3, 2023</span>
                            <a href="news/2023-04-03-digitalbridge-to-participate-in-upcoming-investor-events-and-industry-conferences-in-april-2023.html"
                                class="alt-link title">DigitalBridge to Participate in Upcoming Investor Events and Industry
                                Conferences in April 2023</a>
                        </li>
                        <li>
                            <span class="date">March 31, 2023</span>
                            <a href="news/2023-03-31-digitalbridge-announces-first-quarter-2023-earnings-release-and-conference-call-date.html"
                                class="alt-link title">DigitalBridge Announces First Quarter 2023 Earnings Release and
                                Conference Call Date</a>
                        </li>
                        <li>
                            <span class="date">February 28, 2023</span>
                            <a href="news/2023-02-28-digitalbridge-to-participate-in-upcoming-investor-and-industry-conferences-in-march-2023.html"
                                class="alt-link title">DigitalBridge to Participate in Upcoming Investor and Industry
                                Conferences in March 2023</a>
                        </li>
                        <li>
                            <span class="date">February 28, 2023</span>
                            <a href="https://ir.brightspire.com/news-releases/news-release-details/brightspire-capital-inc-prices-secondary-offering-digitalbridge"
                                class="alt-link title" target="_blank">BrightSpire Capital, Inc. Prices Secondary Offering
                                by DigitalBridge Group, Inc.</a>
                        </li>
                        <li>
                            <span class="date">February 24, 2023</span>
                            <a href="docs/DBRG-Q4-2022-Earnings-Release.pdf" class="alt-link title"
                                target="_blank">DigitalBridge Announces Fourth Quarter &amp; Full-Year 2022 Financial
                                Results</a>
                        </li>
                        <li>
                            <span class="date">February 8, 2023</span>
                            <a href="https://surfinternet.com/surf-internet-secures-100-million-debt-investment/"
                                class="alt-link title" target="_blank">Surf Internet Secures $100 Million Debt Investment to
                                Support Continued Network Expansion Across the Great Lakes Region</a>
                        </li>
                        <li>
                            <span class="date">February 8, 2023</span>
                            <a href="news/2023-02-08-digitalbridge-strengthens-global-capital-formation-team-with-key-appointments-in-europe-and-asia-01.html"
                                class="alt-link title">DigitalBridge Strengthens Global Capital Formation Team with Key
                                Appointments in Europe and Asia</a>
                        </li>
                        <li>
                            <span class="date">February 2, 2023</span>
                            <a href="news/2023-02-02-digitalbridge-completes-acquisition-of-amp-capital-global-infrastructure-equity-investment-management-business.1.html"
                                class="alt-link title">DigitalBridge Completes Acquisition of AMP Capital’s Global
                                Infrastructure Equity Investment Management Business</a>
                        </li>
                        <li>
                            <span class="date">February 1, 2023</span>
                            <a href="https://www.telekom.com/en/media/media-information/archive/deutsche-telekom-completes-tower-transaction-1025420"
                                class="alt-link title" target="_blank">Deutsche Telekom Completes Majority Sale of GD
                                Towers</a>
                        </li>
                        <li>
                            <span class="date">January 27, 2023</span>
                            <a href="news/2023-01-27-digitalbridge-to-participate-in-upcoming-investor-and-industry-conferences-in-february-2023.html"
                                class="alt-link title">DigitalBridge to Participate in Upcoming Investor and Industry
                                Conferences in February 2023</a>
                        </li>
                        <li>
                            <span class="date">January 24, 2023</span>
                            <a href="news/2023-01-24-digitalbridge-announces-fourth-quarter-full-year-2022-earnings-release-and-conference-call-date.html"
                                class="alt-link title">DigitalBridge Announces Fourth Quarter &amp; Full-Year 2022 Earnings
                                Release and Conference Call Date</a>
                        </li>
                        <li>
                            <span class="date">December 29, 2022</span>
                            <a href="news/2022-12-29-digitalbridge-to-participate-in-upcoming-investor-and-industry-conferences-in-january-2023.html"
                                class="alt-link title">DigitalBridge to Participate in Upcoming Investor and Industry
                                Conferences in January 2023</a>
                        </li>
                        <a href="http://www.digitalbridge.com/assets/includes/load-more?SearchURI=/news&amp;SearchStructure=news&amp;SearchSize=12&amp;SearchSort=-RelevantDate&amp;Skip=12"
                            class="mt-4 LoadMore btn btn-white">Load More</a>
                    </ul>
                </div>
                <div class="col-md-4 mt-2 rel">
                    <form name="newsSearch" method="get" action="http://www.digitalbridge.com/news/search-results">
                        <div class="d-flex">
                            <input name="query" title="News Search Input" class="form-control news-input"
                                placeholder="Search News">
                            <button class="form-control btn btn-primary go">Go</button>
                        </div>
                    </form>
                    <p class="my-4"><a href="news/news-feed.xml" class="btn btn-white rss">RSS News Feed</a></p>
                    <h2 class="mt-5">
                        Featured
                    </h2>
                    <div class="card">
                        <p class="card-date">February 24, 2023</p>
                        <a href="news/2023-02-24-digitalbridge-announces-fourth-quarter-full-year-2022-financial-results.html"
                            class="h5 alt-link">DigitalBridge Announces Fourth Quarter &amp; Full-Year 2022 Financial
                            Results</a>
                    </div>
                    <div class="card">
                        <p class="card-date">February 2, 2023</p>
                        <p class="img-container"><a
                                href="news/2023-02-02-digitalbridge-completes-acquisition-of-amp-capital-global-infrastructure-equity-investment-management-business.1.html"><img
                                    src="news/2023-02-02-digitalbridge-completes-acquisition-of-amp-capital-global-infrastructure-equity-investment-management-business/_res/id=Picture"
                                    alt="Photo of DigitalBridge Completes Acquisition of AMP Capital’s Global Infrastructure Equity Investment Management Business"
                                    class="img-fluid"></a></p>
                        <a href="news/2023-02-02-digitalbridge-completes-acquisition-of-amp-capital-global-infrastructure-equity-investment-management-business.1.html"
                            class="h5 alt-link">DigitalBridge Completes Acquisition of AMP Capital’s Global Infrastructure
                            Equity Investment Management Business</a>
                    </div>
                    <div class="card">
                        <p class="card-date">November 4, 2022</p>
                        <p class="img-container"><a
                                href="news/2022-11-04-digitalbridge-announces-third-quarter-2022-financial-results.1.html"><img
                                    src="news/2022-11-04-digitalbridge-announces-third-quarter-2022-financial-results/_res/id=Picture"
                                    alt="Photo of DigitalBridge Announces Third Quarter 2022 Financial Results"
                                    class="img-fluid"></a></p>
                        <a href="news/2022-11-04-digitalbridge-announces-third-quarter-2022-financial-results.1.html"
                            class="h5 alt-link">DigitalBridge Announces Third Quarter 2022 Financial Results</a>
                    </div>
                    <div class="card">
                        <p class="card-date">July 14, 2022</p>
                        <p class="img-container"><a
                                href="news/2022-07-14-digitalbridge-to-acquire-majority-stake-in-gd-towers-in-partnership-with-brookfield.1.html"><img
                                    src="news/2022-07-14-digitalbridge-to-acquire-majority-stake-in-gd-towers-in-partnership-with-brookfield/_res/id=Picture"
                                    alt="Photo of DigitalBridge to Acquire Majority Stake in GD Towers in Partnership with Brookfield"
                                    class="img-fluid"></a></p>
                        <a href="news/2022-07-14-digitalbridge-to-acquire-majority-stake-in-gd-towers-in-partnership-with-brookfield.1.html"
                            class="h5 alt-link">DigitalBridge to Acquire Majority Stake in GD Towers in Partnership with
                            Brookfield</a>
                    </div>
                    <div class="card">
                        <p class="card-date">July 7, 2022</p>
                        <p class="img-container"><a
                                href="news/2022-07-07-digitalbridge-publishes-2021-esg-report.1.html"><img
                                    src="news/2022-07-07-digitalbridge-publishes-2021-esg-report/_res/id=Picture"
                                    alt="Photo of DigitalBridge Publishes 2021 ESG Report" class="img-fluid"></a></p>
                        <a href="news/2022-07-07-digitalbridge-publishes-2021-esg-report.1.html"
                            class="h5 alt-link">DigitalBridge Publishes 2021 ESG Report</a>
                    </div>
                    <div class="card">
                        <p class="card-date">May 11, 2022</p>
                        <p class="img-container"><a
                                href="news/2022-05-11-switch-to-be-taken-private-by-digitalbridge-investment-management-and-ifm-in-11-billion-transaction.1.html"><img
                                    src="news/2022-05-11-switch-to-be-taken-private-by-digitalbridge-investment-management-and-ifm-in-11-billion-transaction/_res/id=Picture"
                                    alt="Photo of Switch to be Taken Private by DigitalBridge Investment Management and IFM in $11 Billion Transaction"
                                    class="img-fluid"></a></p>
                        <a href="news/2022-05-11-switch-to-be-taken-private-by-digitalbridge-investment-management-and-ifm-in-11-billion-transaction.1.html"
                            class="h5 alt-link">Switch to be Taken Private by DigitalBridge Investment Management and IFM
                            in $11 Billion Transaction</a>
                    </div>
                    <div class="card">
                        <p class="card-date">March 25, 2022</p>
                        <p class="img-container"><a
                                href="news/2022-03-25-digitalbridge-to-acquire-telenet-mobile-telecommunications-tower-business.1.html"><img
                                    src="news/2022-03-25-digitalbridge-to-acquire-telenet-mobile-telecommunications-tower-business/_res/id=Picture"
                                    alt="Photo of DigitalBridge to Acquire Telenet’s Mobile Telecommunications Tower Business"
                                    class="img-fluid"></a></p>
                        <a href="news/2022-03-25-digitalbridge-to-acquire-telenet-mobile-telecommunications-tower-business.1.html"
                            class="h5 alt-link">DigitalBridge to Acquire Telenet’s Mobile Telecommunications Tower
                            Business</a>
                    </div>
                    <div class="card">
                        <p class="card-date">January 19, 2022</p>
                        <p class="img-container"><a
                                href="news/2022-01-19-digitalbridge-surpasses-target-to-close-second-flagship-fund-at-83-billion.1.html"><img
                                    src="news/2022-01-19-digitalbridge-surpasses-target-to-close-second-flagship-fund-at-83-billion/_res/id=Picture"
                                    alt="Photo of DigitalBridge Surpasses Target to Close Second Flagship Fund at $8.3 Billion"
                                    class="img-fluid"></a></p>
                        <a href="news/2022-01-19-digitalbridge-surpasses-target-to-close-second-flagship-fund-at-83-billion.1.html"
                            class="h5 alt-link">DigitalBridge Surpasses Target to Close Second Flagship Fund at $8.3
                            Billion</a>
                    </div>
                    <div class="card">
                        <p class="card-date">June 22, 2021</p>
                        <p class="img-container"><a href="news/2021-06-22-inaugural-investor-day.1.html"><img
                                    src="news/2021-06-22-inaugural-investor-day/_res/id=Picture"
                                    alt="Photo of DigitalBridge Celebrates Inaugural Investor Day" class="img-fluid"></a>
                        </p>
                        <a href="news/2021-06-22-inaugural-investor-day.1.html" class="h5 alt-link">DigitalBridge
                            Celebrates Inaugural Investor Day</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

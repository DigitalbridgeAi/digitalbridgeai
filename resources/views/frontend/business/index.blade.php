@extends('layouts.app')


@section('content')
    <section id="business-banner" class="banner lines-btm" style="background-image:url('/images/banners/our-business.jpg');">
        <div class="container-xl h-100">
            <div class="row">
                <div class="col-lg-8">
                    <div class="banner-header">
                        <h1 data-aos="fade" data-aos-delay="200" data-aos-duration="600" class="rule">Investors in the
                            Digital Economy</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="business-building-global-portfolio" class="lines-top lines-btm">
        <div class="container-xl py-lg-5">
            <h2 class="section-title mb-5" data-aos="fade" data-aos-duration="700">
                Building a global portfolio that delivers converged connectivity solutions to the world's leading technology
                and telecom companies.</h2>
            <div class="text-md pb-lg-5" data-aos="fade" data-aos-delay="300">
                <p>As the demand for digital infrastructure grows, DigitalBridge is extending our reach, from our flagship
                    digital infrastructure equity business to emerging verticals like digital credit and liquid securities
                    strategies.&nbsp;</p>
                <p>Leveraging our access to proprietary deals, new technologies, and deep industry relationships, we are
                    expanding our platform to give investors and companies across the digital ecosystem access to our
                    expertise and experience.</p>
            </div>
        </div>
    </section>
    <style nonce="">
        .banner {
            background-image: url('/images/banners/biz-digital-equity.jpg');
        }
    </style>
    <section id="business-digital-equity-section" class="banner tall lines-top biz">
        <div class="container-xl h-100 text-white">
            <div class="d-flex h-100 flex-column justify-content-end">
                <h2 class="section-title rule" data-aos="fade">Digital Equity</h2>
                <p class="subtitle w-25 mb-4" data-aos="fade">Investing globally, building businesses across the digital
                    infrastructure ecosystem</p>
                <p data-aos="fade-left"><a href="/business/digital-equity" class="btn btn-brand">Learn More</a></p>
            </div>
        </div>
    </section>
    <section id="business-credit-liquid-links" class="py-0">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 full-col left wash-dark"
                    style="background-image:url(/images/banners/bg-digital-credit.jpg);">
                    <div class="inner-content rel" data-aos="fade" data-aos-duration="700" data-aos-delay="200">
                        <h2 class="section-title rule">Digital Credit</h2>
                        <p class="subtitle w-75 mb-5">Financing growth of the Digital Economy</p>
                        <p><a href="/business/digital-credit" class="btn btn-brand">Learn More</a></p>
                    </div>
                </div>
                <div class="col-md-4 full-col left wash-dark"
                    style="background-image:url(/images/banners/bg-infrabridge.jpg);">
                    <div class="inner-content rel" data-aos="fade" data-aos-duration="700" data-aos-delay="300">
                        <h2 class="section-title rule">InfraBridge</h2>
                        <p class="subtitle w-75 mb-5">Infrastructure platform capitalizing on high-growth mid-market
                            opportunities</p>
                        <p><a href="https://www.infrabridge.com" class="btn btn-brand">Learn More</a></p>
                    </div>
                </div>
                <div class="col-md-4 full-col left wash-dark"
                    style="background-image:url(/images/banners/bg-liquid-strategies.jpg);">
                    <div class="inner-content rel" data-aos="fade" data-aos-duration="700" data-aos-delay="400">
                        <h2 class="section-title rule">Liquid Strategies</h2>
                        <p class="subtitle w-75 mb-5">Investment programs for public markets</p>
                        <p><a href="/business/liquid-strategies" class="btn btn-brand">Learn More</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="business-accolades">
        <div class="container-xl py-lg-5">
            <p class="section-title"></p>
            <div class="row">
                <div class="col-lg-12" data-aos="fade">
                    <div class="lg-lite pb-lg-4">
                        <p>DigitalBridge is one of the world&rsquo;s largest digital infrastructure firms investing across
                            five key digital infrastructure verticals: data centers, macro cell towers, fiber networks,
                            small cells, and edge infrastructure.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg col-sm-6 mb-4" data-aos="fade-up" data-aos-delay="000">
                    <div class="accolade">
                        <p class="value">$65B</p>
                        <p class="label">Digital Assets Under Management<sup>*</sup></p>
                    </div>
                </div>
                <div class="col-lg col-sm-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="accolade">
                        <p class="value">27</p>
                        <p class="label">Digital Portfolio Companies</p>
                    </div>
                </div>
                <div class="col-lg col-sm-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="accolade">
                        <p class="value">25+</p>
                        <p class="label">Years of<br />Results</p>
                    </div>
                </div>
                <div class="col-lg col-sm-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="accolade">
                        <p class="value">5</p>
                        <p class="label">Digital Asset<br />Classes</p>
                    </div>
                </div>
            </div>
            <p class="footnote mt-1 mt-lg-5" data-aos="fade" data-aos-delay="500">* AUM as of February 24, 2023</p>
        </div>
    </section>
@endsection

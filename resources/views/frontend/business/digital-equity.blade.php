@extends('layouts.app')


@section('content')
    <section id="digital-equity-banner" class="banner"
        style="background-image:url('{{ asset('images/banners/banner-business4.jpg') }}');">
        <div class="container-xl h-100">
            <div class="row">
                <div class="col-lg-7">
                    <div class="banner-header">
                        <h1 class="rule" data-aos="fade" data-aos-duration="700">Digital Equity</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="digital-equity-intro" class="light2-bg">
        <div class="container-xl">
            <div class="row">
                <div class="col-lg-12">
                    <div class="lg-lite" data-aos="fade">
                        <p>DigitalBridge&rsquo;s flagship infrastructure equity strategy invests on a global basis in
                            opportunities where its disciplined, proven investment framework, rooted in deep industry
                            expertise and relationships, aims to generate alpha for investors in partnership with leading
                            companies and management teams.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="digital-equity-content" class="bg-img-default wash"
        style="background-image:url('{{ asset('images/banners/bg-ourbusinessequitypage.jpg') }}');">
        <div class="container-xl">
            <div class="row">
                <div class="col-sm-8 col-lg-5" data-aos="fade">
                    <p class="section-title rule">Global Reach</p>
                    <div class="mb-3 mb-lg-5" data-aos="fade" data-aos-delay="000">
                        <p class="h3 text-primary">Proven Operators</p>
                        <div class="lp-0 txt-gray text-md">
                            <p>Innovative Investors - We have a heritage of over 25 years of creating value in the digital
                                infrastructure asset class – not just as investors, but as operators who know how to build
                                businesses and operate reliable, mission-critical digital facilities on behalf of customers.
                                We seek to invest in and partner with companies where we can actively support their growth
                                and enhance their performance.</p>
                        </div>
                    </div>
                    <div class="mb-3 mb-lg-5" data-aos="fade" data-aos-delay="100">
                        <p class="h3 text-primary">A Global Network</p>
                        <div class="lp-0 txt-gray text-md">
                            <p>With deep industry roots in digital infrastructure, we have built strong relationships with
                                key industry players over the last three decades, including leading global carriers, content
                                providers, hyperscale cloud companies and global investors. Through this network, our team
                                continually generates proprietary investment opportunities, creating a differentiated
                                M&amp;A program.</p>
                        </div>
                    </div>
                    <div class="mb-3 mb-lg-5" data-aos="fade" data-aos-delay="200">
                        <p class="h3 text-primary">DigitalBridge Value-Add</p>
                        <div class="lp-0 txt-gray text-md">
                            <p>Our investment program is designed to support portfolio company growth by leveraging our
                                M&amp;A execution capabilities, strategic development and financing expertise, our ability
                                to support management team growth, and our proprietary and industry-leading back-office
                                systems which drive scale and margins.</p>
                        </div>
                    </div>
                    <div class="mb-3 mb-lg-5" data-aos="fade" data-aos-delay="300">
                        <p class="h3 text-primary">A Unique Vantage Point</p>
                        <div class="lp-0 txt-gray text-md">
                            <p>With a singular focus on digital infrastructure, and a flexible mandate across sector
                                verticals we understand the trends shaping the next-gen networks our companies are helping
                                build.&nbsp; This unique vantage point gives our portfolio management teams superior
                                perspective to manage their businesses and the DigitalBridge investment team insights that
                                inform where and how we invest.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="business-portfolio" class="bg-light-blue">
        <div class="container-xl">
            <div class="row">
                <div class="col-lg-12 mb-3">
                    <h2 class="section-title">
                        Portfolio</h2>
                    <div class="lg-lite">
                        <p>DigitalBridge actively manages 27 current portfolio and affiliated companies which provide data
                            network and data center services across the digital infrastructure ecosystem.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="000">
                    <div class="portfolio-card">
                        <div class="scaling-background"
                            style="background-image:url('{{ asset('/images') }}/portfolio/aims/_res/id=Picture');">
                        </div>
                        <div class="item-info">
                            <a href="{{ route('site.business.digital-equity') }}" data-bs-toggle="modal"
                                data-bs-target="#aims"><img
                                    src="{{ asset('/images') }}/portfolio/aims/_res/id=Logo/AIMSlogo.png" alt="AIMS"
                                    loading="lazy" /></a>
                            <a href="{{ route('site.business.digital-equity') }}" class="h3 d-block alt-link"
                                data-bs-toggle="modal" data-bs-target="#aims">AIMS</a>
                            <p class="text-secondary">Data Centers</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="portfolio-card">
                        <div class="scaling-background"
                            style="background-image:url('{{ asset('/images') }}/portfolio/andean-telecom-partners/_res/id=Picture');">
                        </div>
                        <div class="item-info">
                            <a href="{{ route('site.business.digital-equity') }}" data-bs-toggle="modal"
                                data-bs-target="#andean-telecom-partners"><img
                                    src="{{ asset('/images') }}/portfolio/andean-telecom-partners/_res/id=Logo/andean-tower-partners-logo.png"
                                    alt="Andean Telecom Partners" loading="lazy" /></a>
                            <a href="{{ route('site.business.digital-equity') }}" class="h3 d-block alt-link"
                                data-bs-toggle="modal" data-bs-target="#andean-telecom-partners">Andean Telecom Partners</a>
                            <p class="text-secondary">Towers, Fiber, Small Cells</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="portfolio-card">
                        <div class="scaling-background"
                            style="background-image:url('{{ asset('/images') }}/portfolio/aptum-technologies/_res/id=Picture');">
                        </div>
                        <div class="item-info">
                            <a href="{{ route('site.business.digital-equity') }}" data-bs-toggle="modal"
                                data-bs-target="#aptum-technologies"><img
                                    src="{{ asset('/images') }}/portfolio/aptum-technologies/_res/id=Logo/aptum-technologies-logo.png"
                                    alt="Aptum Technologies" loading="lazy" /></a>
                            <a href="{{ route('site.business.digital-equity') }}" class="h3 d-block alt-link"
                                data-bs-toggle="modal" data-bs-target="#aptum-technologies">Aptum Technologies</a>
                            <p class="text-secondary">Enterprise Data Centers</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="portfolio-card">
                        <div class="scaling-background"
                            style="background-image:url('{{ asset('/images') }}/portfolio/atlas-edge/_res/id=Picture');">
                        </div>
                        <div class="item-info">
                            <a href="{{ route('site.business.digital-equity') }}" data-bs-toggle="modal"
                                data-bs-target="#atlas-edge"><img
                                    src="{{ asset('/images') }}/portfolio/atlas-edge/_res/id=Logo/atlasedge.png"
                                    alt="AtlasEdge Data Centres" loading="lazy" /></a>
                            <a href="{{ route('site.business.digital-equity') }}" class="h3 d-block alt-link"
                                data-bs-toggle="modal" data-bs-target="#atlas-edge">AtlasEdge Data Centres</a>
                            <p class="text-secondary">Data Centers</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="portfolio-card">
                        <div class="scaling-background"
                            style="background-image:url('{{ asset('/images') }}/portfolio/beanfield-metroconnect/_res/id=Picture');">
                        </div>
                        <div class="item-info">
                            <a href="{{ route('site.business.digital-equity') }}" data-bs-toggle="modal"
                                data-bs-target="#beanfield-metroconnect"><img
                                    src="{{ asset('/images') }}/portfolio/beanfield-metroconnect/_res/id=Logo/beanfield-metroconnect-logo.png"
                                    alt="Beanfield Metroconnect" loading="lazy" /></a>
                            <a href="{{ route('site.business.digital-equity') }}" class="h3 d-block alt-link"
                                data-bs-toggle="modal" data-bs-target="#beanfield-metroconnect">Beanfield Metroconnect</a>
                            <p class="text-secondary">Fiber</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="500">
                    <div class="portfolio-card">
                        <div class="scaling-background"
                            style="background-image:url('{{ asset('/images') }}/portfolio/belgiumtowerpartners/_res/id=Picture');">
                        </div>
                        <div class="item-info">
                            <a href="{{ route('site.business.digital-equity') }}" data-bs-toggle="modal"
                                data-bs-target="#belgiumtowerpartners"><img
                                    src="{{ asset('/images') }}/portfolio/belgiumtowerpartners/_res/id=Logo/Btplogo.png"
                                    alt="Belgium Tower Partners" loading="lazy" /></a>
                            <a href="{{ route('site.business.digital-equity') }}" class="h3 d-block alt-link"
                                data-bs-toggle="modal" data-bs-target="#belgiumtowerpartners">Belgium Tower Partners</a>
                            <p class="text-secondary">Towers</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="600">
                    <div class="portfolio-card">
                        <div class="scaling-background"
                            style="background-image:url('{{ asset('/images') }}/portfolio/boingo-wireless/_res/id=Picture');">
                        </div>
                        <div class="item-info">
                            <a href="{{ route('site.business.digital-equity') }}" data-bs-toggle="modal"
                                data-bs-target="#boingo-wireless"><img
                                    src="{{ asset('/images') }}/portfolio/boingo-wireless/_res/id=Logo/boingo.png"
                                    alt="Boingo Wireless" loading="lazy" /></a>
                            <a href="{{ route('site.business.digital-equity') }}" class="h3 d-block alt-link"
                                data-bs-toggle="modal" data-bs-target="#boingo-wireless">Boingo Wireless</a>
                            <p class="text-secondary">Small Cells</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="700">
                    <div class="portfolio-card">
                        <div class="scaling-background"
                            style="background-image:url('{{ asset('/images') }}/portfolio/databank/_res/id=Picture');">
                        </div>
                        <div class="item-info">
                            <a href="{{ route('site.business.digital-equity') }}" data-bs-toggle="modal"
                                data-bs-target="#databank"><img
                                    src="{{ asset('/images') }}/portfolio/databank/_res/id=Logo/databank-logo.png"
                                    alt="DataBank" loading="lazy" /></a>
                            <a href="{{ route('site.business.digital-equity') }}" class="h3 d-block alt-link"
                                data-bs-toggle="modal" data-bs-target="#databank">DataBank</a>
                            <p class="text-secondary">Enterprise and Edge Data Centers</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="800">
                    <div class="portfolio-card">
                        <div class="scaling-background"
                            style="background-image:url('{{ asset('/images') }}/portfolio/digita-oy/_res/id=Picture');">
                        </div>
                        <div class="item-info">
                            <a href="{{ route('site.business.digital-equity') }}" data-bs-toggle="modal"
                                data-bs-target="#digita-oy"><img
                                    src="{{ asset('/images') }}/portfolio/digita-oy/_res/id=Logo/digita-oy-logo.png"
                                    alt="Digita Oy" loading="lazy" /></a>
                            <a href="{{ route('site.business.digital-equity') }}" class="h3 d-block alt-link"
                                data-bs-toggle="modal" data-bs-target="#digita-oy">Digita Oy</a>
                            <p class="text-secondary">Towers</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="portfolio-card">
                        <div class="scaling-background"
                            style="background-image:url('{{ asset('/images') }}/portfolio/edgepoint-infrastructure/_res/id=Picture');">
                        </div>
                        <div class="item-info">
                            <a href="{{ route('site.business.digital-equity') }}" data-bs-toggle="modal"
                                data-bs-target="#edgepoint-infrastructure"><img
                                    src="{{ asset('/images') }}/portfolio/edgepoint-infrastructure/_res/id=Logo/edgepoint.png"
                                    alt="EdgePoint Infrastructure" loading="lazy" /></a>
                            <a href="{{ route('site.business.digital-equity') }}" class="h3 d-block alt-link"
                                data-bs-toggle="modal" data-bs-target="#edgepoint-infrastructure">EdgePoint
                                Infrastructure</a>
                            <p class="text-secondary">Towers</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="portfolio-card">
                        <div class="scaling-background"
                            style="background-image:url('{{ asset('/images') }}/portfolio/extenet-systems/_res/id=Picture');">
                        </div>
                        <div class="item-info">
                            <a href="{{ route('site.business.digital-equity') }}" data-bs-toggle="modal"
                                data-bs-target="#extenet-systems"><img
                                    src="{{ asset('/images') }}/portfolio/extenet-systems/_res/id=Logo/extenet-systems-logo.png"
                                    alt="ExteNet Systems" loading="lazy" /></a>
                            <a href="{{ route('site.business.digital-equity') }}" class="h3 d-block alt-link"
                                data-bs-toggle="modal" data-bs-target="#extenet-systems">ExteNet Systems</a>
                            <p class="text-secondary">Small Cells</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="portfolio-card">
                        <div class="scaling-background"
                            style="background-image:url('{{ asset('/images') }}/portfolio/freshwave-group/_res/id=Picture');">
                        </div>
                        <div class="item-info">
                            <a href="{{ route('site.business.digital-equity') }}" data-bs-toggle="modal"
                                data-bs-target="#freshwave-group"><img
                                    src="{{ asset('/images') }}/portfolio/freshwave-group/_res/id=Logo/freshwave.png"
                                    alt="FreshWave Group" loading="lazy" /></a>
                            <a href="{{ route('site.business.digital-equity') }}" class="h3 d-block alt-link"
                                data-bs-toggle="modal" data-bs-target="#freshwave-group">FreshWave Group</a>
                            <p class="text-secondary">Small Cells, Towers</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="portfolio-card">
                        <div class="scaling-background"
                            style="background-image:url('{{ asset('/images') }}/portfolio/gd-towers/_res/id=Picture');">
                        </div>
                        <div class="item-info">
                            <a href="{{ route('site.business.digital-equity') }}" data-bs-toggle="modal"
                                data-bs-target="#gd-towers"><img
                                    src="{{ asset('/images') }}/portfolio/gd-towers/_res/id=Logo/GDTowers.png"
                                    alt="GD Towers" loading="lazy" /></a>
                            <a href="{{ route('site.business.digital-equity') }}" class="h3 d-block alt-link"
                                data-bs-toggle="modal" data-bs-target="#gd-towers">GD Towers</a>
                            <p class="text-secondary">Towers</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="portfolio-card">
                        <div class="scaling-background"
                            style="background-image:url('{{ asset('/images') }}/portfolio/highline-do-brasil/_res/id=Picture');">
                        </div>
                        <div class="item-info">
                            <a href="{{ route('site.business.digital-equity') }}" data-bs-toggle="modal"
                                data-bs-target="#highline-do-brasil"><img
                                    src="{{ asset('/images') }}/portfolio/highline-do-brasil/_res/id=Logo/highline-logo.png"
                                    alt="Highline do Brasil" loading="lazy" /></a>
                            <a href="{{ route('site.business.digital-equity') }}" class="h3 d-block alt-link"
                                data-bs-toggle="modal" data-bs-target="#highline-do-brasil">Highline do Brasil</a>
                            <p class="text-secondary">Towers</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="portfolio-card">
                        <div class="scaling-background"
                            style="background-image:url('{{ asset('/images') }}/portfolio/landmark-dividend/_res/id=Picture');">
                        </div>
                        <div class="item-info">
                            <a href="{{ route('site.business.digital-equity') }}" data-bs-toggle="modal"
                                data-bs-target="#landmark-dividend"><img
                                    src="{{ asset('/images') }}/portfolio/landmark-dividend/_res/id=Logo/landmark"
                                    alt="Landmark Dividend" loading="lazy" /></a>
                            <a href="{{ route('site.business.digital-equity') }}" class="h3 d-block alt-link"
                                data-bs-toggle="modal" data-bs-target="#landmark-dividend">Landmark Dividend</a>
                            <p class="text-secondary">Real Estate Infrastructure</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="portfolio-card">
                        <div class="scaling-background"
                            style="background-image:url('{{ asset('/images') }}/portfolio/mexico-telecom-partners/_res/id=Picture');">
                        </div>
                        <div class="item-info">
                            <a href="{{ route('site.business.digital-equity') }}" data-bs-toggle="modal"
                                data-bs-target="#mexico-telecom-partners"><img
                                    src="{{ asset('/images') }}/portfolio/mexico-telecom-partners/_res/id=Logo/mtp.png"
                                    alt="Mexico Telecom Partners" loading="lazy" /></a>
                            <a href="{{ route('site.business.digital-equity') }}" class="h3 d-block alt-link"
                                data-bs-toggle="modal" data-bs-target="#mexico-telecom-partners">Mexico Telecom
                                Partners</a>
                            <p class="text-secondary">Towers</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="portfolio-card">
                        <div class="scaling-background"
                            style="background-image:url('{{ asset('/images') }}/portfolio/mundo-pacifico/_res/id=Picture');">
                        </div>
                        <div class="item-info">
                            <a href="{{ route('site.business.digital-equity') }}" data-bs-toggle="modal"
                                data-bs-target="#mundo-pacifico"><img
                                    src="{{ asset('/images') }}/portfolio/mundo-pacifico/_res/id=Logo/mundoweb.png"
                                    alt="Mundo Pacifico" loading="lazy" /></a>
                            <a href="{{ route('site.business.digital-equity') }}" class="h3 d-block alt-link"
                                data-bs-toggle="modal" data-bs-target="#mundo-pacifico">Mundo Pacifico</a>
                            <p class="text-secondary">Fiber</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="portfolio-card">
                        <div class="scaling-background"
                            style="background-image:url('{{ asset('/images') }}/portfolio/netomnia/_res/id=Picture');">
                        </div>
                        <div class="item-info">
                            <a href="{{ route('site.business.digital-equity') }}" data-bs-toggle="modal"
                                data-bs-target="#netomnia"><img
                                    src="{{ asset('/images') }}/portfolio/netomnia/_res/id=Logo/netomniaweblogo.png"
                                    alt="Netomnia" loading="lazy" /></a>
                            <a href="{{ route('site.business.digital-equity') }}" class="h3 d-block alt-link"
                                data-bs-toggle="modal" data-bs-target="#netomnia">Netomnia</a>
                            <p class="text-secondary">Fiber</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="portfolio-card">
                        <div class="scaling-background"
                            style="background-image:url('{{ asset('/images') }}/portfolio/scala-data-centers/_res/id=Picture');">
                        </div>
                        <div class="item-info">
                            <a href="{{ route('site.business.digital-equity') }}" data-bs-toggle="modal"
                                data-bs-target="#scala-data-centers"><img
                                    src="{{ asset('/images') }}/portfolio/scala-data-centers/_res/id=Logo/scala-data-centers-logo.png"
                                    alt="Scala Data Centers" loading="lazy" /></a>
                            <a href="{{ route('site.business.digital-equity') }}" class="h3 d-block alt-link"
                                data-bs-toggle="modal" data-bs-target="#scala-data-centers">Scala Data Centers</a>
                            <p class="text-secondary">Hyperscale Data Centers</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="portfolio-card">
                        <div class="scaling-background"
                            style="background-image:url('{{ asset('/images') }}/portfolio/switch/_res/id=Picture');">
                        </div>
                        <div class="item-info">
                            <a href="{{ route('site.business.digital-equity') }}" data-bs-toggle="modal"
                                data-bs-target="#switch"><img
                                    src="{{ asset('/images') }}/portfolio/switch/_res/id=Logo/switchlogo.png"
                                    alt="Switch" loading="lazy" /></a>
                            <a href="{{ route('site.business.digital-equity') }}" class="h3 d-block alt-link"
                                data-bs-toggle="modal" data-bs-target="#switch">Switch</a>
                            <p class="text-secondary">Enterprise Data Centers</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="portfolio-card">
                        <div class="scaling-background"
                            style="background-image:url('{{ asset('/images') }}/portfolio/vantage-data-centers-apac/_res/id=Picture');">
                        </div>
                        <div class="item-info">
                            <a href="{{ route('site.business.digital-equity') }}" data-bs-toggle="modal"
                                data-bs-target="#vantage-data-centers-apac"><img
                                    src="{{ asset('/images') }}/portfolio/vantage-data-centers-apac/_res/id=Logo/VantageDC_APAC_Primary_logo_high_resolution.png"
                                    alt="Vantage Data Centers (APAC)" loading="lazy" /></a>
                            <a href="{{ route('site.business.digital-equity') }}" class="h3 d-block alt-link"
                                data-bs-toggle="modal" data-bs-target="#vantage-data-centers-apac">Vantage Data Centers
                                (APAC)</a>
                            <p class="text-secondary">Hyperscale Data Centers</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="portfolio-card">
                        <div class="scaling-background"
                            style="background-image:url('{{ asset('/images') }}/portfolio/vantage-data-centers-emea/_res/id=Picture');">
                        </div>
                        <div class="item-info">
                            <a href="{{ route('site.business.digital-equity') }}" data-bs-toggle="modal"
                                data-bs-target="#vantage-data-centers-emea"><img
                                    src="{{ asset('/images') }}/portfolio/vantage-data-centers-emea/_res/id=Logo/Vantage_EMEA_Primary_logo_web.png"
                                    alt="Vantage Data Centers (EMEA)" loading="lazy" /></a>
                            <a href="{{ route('site.business.digital-equity') }}" class="h3 d-block alt-link"
                                data-bs-toggle="modal" data-bs-target="#vantage-data-centers-emea">Vantage Data Centers
                                (EMEA)</a>
                            <p class="text-secondary">Hyperscale Data Centers</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="portfolio-card">
                        <div class="scaling-background"
                            style="background-image:url('{{ asset('/images') }}/portfolio/vantage-data-centers-north-america/_res/id=Picture');">
                        </div>
                        <div class="item-info">
                            <a href="{{ route('site.business.digital-equity') }}" data-bs-toggle="modal"
                                data-bs-target="#vantage-data-centers-north-america"><img
                                    src="{{ asset('/images') }}/portfolio/vantage-data-centers-north-america/_res/id=Logo/VantageDC_NorthAmerica_Primary_logo_high_resolution.png"
                                    alt="Vantage Data Centers (North America)" loading="lazy" /></a>
                            <a href="{{ route('site.business.digital-equity') }}" class="h3 d-block alt-link"
                                data-bs-toggle="modal" data-bs-target="#vantage-data-centers-north-america">Vantage Data
                                Centers (North
                                America)</a>
                            <p class="text-secondary">Hyperscale Data Centers</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="portfolio-card">
                        <div class="scaling-background"
                            style="background-image:url('{{ asset('/images') }}/portfolio/vantage-data-centers-yieldco/_res/id=Picture');">
                        </div>
                        <div class="item-info">
                            <a href="{{ route('site.business.digital-equity') }}" data-bs-toggle="modal"
                                data-bs-target="#vantage-data-centers-yieldco"><img
                                    src="{{ asset('/images') }}/portfolio/vantage-data-centers-yieldco/_res/id=Logo/vantagesdc.png"
                                    alt="Vantage Data Centers (SDC)" loading="lazy" /></a>
                            <a href="{{ route('site.business.digital-equity') }}" class="h3 d-block alt-link"
                                data-bs-toggle="modal" data-bs-target="#vantage-data-centers-yieldco">Vantage Data Centers
                                (SDC)</a>
                            <p class="text-secondary">Hyperscale Data Centers</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="portfolio-card">
                        <div class="scaling-background"
                            style="background-image:url('{{ asset('/images') }}/portfolio/vantage-towers/_res/id=Picture');">
                        </div>
                        <div class="item-info">
                            <a href="{{ route('site.business.digital-equity') }}" data-bs-toggle="modal"
                                data-bs-target="#vantage-towers"><img
                                    src="{{ asset('/images') }}/portfolio/vantage-towers/_res/id=Logo/vantage-towers.png"
                                    alt="Vantage Towers" loading="lazy" /></a>
                            <a href="{{ route('site.business.digital-equity') }}" class="h3 d-block alt-link"
                                data-bs-toggle="modal" data-bs-target="#vantage-towers">Vantage Towers</a>
                            <p class="text-secondary">Towers</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="portfolio-card">
                        <div class="scaling-background"
                            style="background-image:url('{{ asset('/images') }}/portfolio/vertical-bridge/_res/id=Picture');">
                        </div>
                        <div class="item-info">
                            <a href="{{ route('site.business.digital-equity') }}" data-bs-toggle="modal"
                                data-bs-target="#vertical-bridge"><img
                                    src="{{ asset('/images') }}/portfolio/vertical-bridge/_res/id=Logo/vertical-bridge-logo.png"
                                    alt="Vertical Bridge" loading="lazy" /></a>
                            <a href="{{ route('site.business.digital-equity') }}" class="h3 d-block alt-link"
                                data-bs-toggle="modal" data-bs-target="#vertical-bridge">Vertical Bridge</a>
                            <p class="text-secondary">Towers</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="portfolio-card">
                        <div class="scaling-background"
                            style="background-image:url('{{ asset('/images') }}/portfolio/wildstone/_res/id=Picture');">
                        </div>
                        <div class="item-info">
                            <a href="{{ route('site.business.digital-equity') }}" data-bs-toggle="modal"
                                data-bs-target="#wildstone"><img
                                    src="{{ asset('/images') }}/portfolio/wildstone/_res/id=Logo/wildstone-logo.png"
                                    alt="Wildstone" loading="lazy" /></a>
                            <a href="{{ route('site.business.digital-equity') }}" class="h3 d-block alt-link"
                                data-bs-toggle="modal" data-bs-target="#wildstone">Wildstone</a>
                            <p class="text-secondary">Outdoor Digital Infrastructure</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="portfolio-card">
                        <div class="scaling-background"
                            style="background-image:url('{{ asset('/images') }}/portfolio/xenithig/_res/id=Picture');">
                        </div>
                        <div class="item-info">
                            <a href="{{ route('site.business.digital-equity') }}" data-bs-toggle="modal"
                                data-bs-target="#xenithig"><img
                                    src="{{ asset('/images') }}/portfolio/xenithig/_res/id=Logo/xenithig2.png"
                                    alt="Xenith IG" loading="lazy" /></a>
                            <a href="{{ route('site.business.digital-equity') }}" class="h3 d-block alt-link"
                                data-bs-toggle="modal" data-bs-target="#xenithig">Xenith IG</a>
                            <p class="text-secondary">Fiber</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="portfolio-card">
                        <div class="scaling-background"
                            style="background-image:url('{{ asset('/images') }}/portfolio/zayo-group-holdings/_res/id=Picture');">
                        </div>
                        <div class="item-info">
                            <a href="{{ route('site.business.digital-equity') }}" data-bs-toggle="modal"
                                data-bs-target="#zayo-group-holdings"><img
                                    src="{{ asset('/images') }}/portfolio/zayo-group-holdings/_res/id=Logo/zayo-logo.png"
                                    alt="Zayo Group Holdings" loading="lazy" /></a>
                            <a href="{{ route('site.business.digital-equity') }}" class="h3 d-block alt-link"
                                data-bs-toggle="modal" data-bs-target="#zayo-group-holdings">Zayo Group Holdings</a>
                            <p class="text-secondary">Fiber</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Modal -->
    <div class="modal fade" id="aims" tabindex="-1" role="dialog" aria-labelledby="aims-label"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <button type="button" class="close-item text-end" data-bs-dismiss="modal" aria-label="Close"><span
                        class="icon-close"></span></button>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-4">
                            <a href="{{ route('site.business.digital-equity') }}" target="_blank" rel="noopener"><img
                                    src="{{ asset('/images') }}/portfolio/aims/_res/id=Logo/AIMSlogo.png"
                                    class="img-fluid" alt="AIMS" loading="lazy" /></a>
                        </div>
                        <div class="col-lg-8">
                            <div class="narrative">
                                <p class="h2" id="aims-label">AIMS</p>
                                <p>
                                    Year of Investment: 2023<br />Sector: Data Centers<br />Geography: Southeast Asia</p>
                                <p style="font-weight: 400;">AIMS is a leading data center operator that provides
                                    colocation and edge facilities and interconnection services in Southeast Asia.
                                    AIMS&rsquo; flagship facility, Menara AIMS, hosts the Malaysia Internet Exchange
                                    (&ldquo;MyIX&rdquo;) and is the principal carrier hotel in Malaysia, offering a highly
                                    interconnected environment and peering services to a diversified group of ecosystem
                                    players including domestic and international telcos, hyperscalers, CDNs and large
                                    enterprises.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="andean-telecom-partners" tabindex="-1" role="dialog"
        aria-labelledby="andean-telecom-partners-label" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <button type="button" class="close-item text-end" data-bs-dismiss="modal" aria-label="Close"><span
                        class="icon-close"></span></button>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-4">
                            <a href="https://www.atpsites.com/#/" target="_blank" rel="noopener"><img
                                    src="{{ asset('/images') }}/portfolio/andean-telecom-partners/_res/id=Logo/andean-tower-partners-logo.png"
                                    class="img-fluid" alt="Andean Telecom Partners" loading="lazy" /></a>
                        </div>
                        <div class="col-lg-8">
                            <div class="narrative">
                                <p class="h2" id="andean-telecom-partners-label">Andean Telecom Partners</p>
                                <p>
                                    Year of Investment: 2016<br />Sector: Towers, Fiber, Small Cells<br />Geography: Latin
                                    America</p>
                                <p><a href="https://www.atpsites.com/#/" target="_blank"
                                        rel="noopener">https://www.atpsites.com/#/</a></p>
                                <p>Andean Telecom Partners (&ldquo;ATP&rdquo;) owns and operates macro cell towers, fiber
                                    networks and distributed antenna systems (DAS) in Peru, Chile and Colombia. Through the
                                    successful scaling of the platform, ATP is now one of the largest privately-owned
                                    providers of wireless communication infrastructure in the Andean region with a
                                    high-quality tenant base. ATP is headquartered in Hollywood, Florida with offices in
                                    Lima, Santiago and Bogota.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="aptum-technologies" tabindex="-1" role="dialog"
        aria-labelledby="aptum-technologies-label" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <button type="button" class="close-item text-end" data-bs-dismiss="modal" aria-label="Close"><span
                        class="icon-close"></span></button>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-4">
                            <a href="https://aptum.com/" target="_blank" rel="noopener"><img
                                    src="{{ asset('/images') }}/portfolio/aptum-technologies/_res/id=Logo/aptum-technologies-logo.png"
                                    class="img-fluid" alt="Aptum Technologies" loading="lazy" /></a>
                        </div>
                        <div class="col-lg-8">
                            <div class="narrative">
                                <p class="h2" id="aptum-technologies-label">Aptum Technologies</p>
                                <p>
                                    Year of Investment: 2019<br />Sector: Enterprise Data Centers<br />Geography: North
                                    America, Europe</p>
                                <p><a href="https://aptum.com/" target="_blank" rel="noopener">https://aptum.com/</a></p>
                                <p>Aptum Technologies enables enterprises to deploy and manage their infrastructure,
                                    applications, and data.&nbsp; Aptum works with companies across all industries, helping
                                    them reach their IT modernization goals with an array of services including
                                    public/private and hybrid cloud solutions, managed services and IaaS. Aptum&rsquo;s
                                    footprint includes a portfolio of 14 data centers located in North America and the
                                    U.K.&nbsp; Aptum is headquartered in Toronto, Canada.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="atlas-edge" tabindex="-1" role="dialog" aria-labelledby="atlas-edge-label"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <button type="button" class="close-item text-end" data-bs-dismiss="modal" aria-label="Close"><span
                        class="icon-close"></span></button>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-4">
                            <a href="https://atlasedge.com/" target="_blank" rel="noopener"><img
                                    src="{{ asset('/images') }}/portfolio/atlas-edge/_res/id=Logo/atlasedge.png"
                                    class="img-fluid" alt="AtlasEdge Data Centres" loading="lazy" /></a>
                        </div>
                        <div class="col-lg-8">
                            <div class="narrative">
                                <p class="h2" id="atlas-edge-label">AtlasEdge Data Centres</p>
                                <p>
                                    Year of Investment: 2021<br />Sector: Data Centers<br />Geography: Europe</p>
                                <p><a href="https://atlasedge.com/" target="_blank"
                                        rel="noopener">https://atlasedge.com/</a></p>
                                <p>AtlasEdge is an infrastructure platform operating over 100 active edge data center
                                    facilities across Europe.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="beanfield-metroconnect" tabindex="-1" role="dialog"
        aria-labelledby="beanfield-metroconnect-label" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <button type="button" class="close-item text-end" data-bs-dismiss="modal" aria-label="Close"><span
                        class="icon-close"></span></button>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-4">
                            <a href="https://www.beanfield.com/" target="_blank" rel="noopener"><img
                                    src="{{ asset('/images') }}/portfolio/beanfield-metroconnect/_res/id=Logo/beanfield-metroconnect-logo.png"
                                    class="img-fluid" alt="Beanfield Metroconnect" loading="lazy" /></a>
                        </div>
                        <div class="col-lg-8">
                            <div class="narrative">
                                <p class="h2" id="beanfield-metroconnect-label">Beanfield Metroconnect</p>
                                <p>
                                    Year of Investment: 2019<br />Sector: Fiber<br />Geography: North America</p>
                                <p><a href="https://www.beanfield.com/" target="_blank"
                                        rel="noopener">https://www.beanfield.com/</a></p>
                                <p>Beanfield Metroconnect is a leading independent bandwidth infrastructure provider in
                                    Canada, serving the enterprise, carrier and residential markets over its fiber networks.
                                    Beanfield operates dense metro fiber with on-net locations across Toronto and Montreal.
                                    Beanfield is headquartered in Toronto, Canada.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="belgiumtowerpartners" tabindex="-1" role="dialog"
        aria-labelledby="belgiumtowerpartners-label" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <button type="button" class="close-item text-end" data-bs-dismiss="modal" aria-label="Close"><span
                        class="icon-close"></span></button>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-4">
                            <a href="{{ route('site.business.digital-equity') }}" target="_blank" rel="noopener"><img
                                    src="{{ asset('/images') }}/portfolio/belgiumtowerpartners/_res/id=Logo/Btplogo.png"
                                    class="img-fluid" alt="Belgium Tower Partners" loading="lazy" /></a>
                        </div>
                        <div class="col-lg-8">
                            <div class="narrative">
                                <p class="h2" id="belgiumtowerpartners-label">Belgium Tower Partners</p>
                                <p>
                                    Year of Investment: 2022<br />Sector: Towers<br />Geography: Europe</p>
                                <p style="font-weight: 400;">Belgium&nbsp;Tower Partners is the first independent tower
                                    company in&nbsp;Belgium. The Company owns, manages and operates a portfolio of towers,
                                    rooftops, other macro sites and small cells that are attractively located to meet
                                    growing demand for high-quality 5G deployment. The Company&rsquo;s large, nationwide
                                    footprint allows customers to experience reliable, resilient and sustainable
                                    connectivity.&nbsp;Belgium&nbsp;Tower Partners is headquartered in Brussels.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="boingo-wireless" tabindex="-1" role="dialog" aria-labelledby="boingo-wireless-label"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <button type="button" class="close-item text-end" data-bs-dismiss="modal" aria-label="Close"><span
                        class="icon-close"></span></button>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-4">
                            <a href="https://www.boingo.com/" target="_blank" rel="noopener"><img
                                    src="{{ asset('/images') }}/portfolio/boingo-wireless/_res/id=Logo/boingo.png"
                                    class="img-fluid" alt="Boingo Wireless" loading="lazy" /></a>
                        </div>
                        <div class="col-lg-8">
                            <div class="narrative">
                                <p class="h2" id="boingo-wireless-label">Boingo Wireless</p>
                                <p>
                                    Year of Investment: 2021<br />Sector: Small Cells<br />Geography: United States</p>
                                <p><a href="https://www.boingo.com/" target="_blank"
                                        rel="noopener">https://www.boingo.com/</a></p>
                                <p>Boingo Wireless designs, builds and manages&nbsp;converged, neutral-host public and
                                    private networks at major venues around the world. Boingo&rsquo;s vast footprint of DAS,
                                    Wi-Fi, small cells and macro towers power innovation and connectivity in airports,
                                    transit stations, stadiums, military bases, hospitals, commercial properties, and
                                    enterprises worldwide.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="databank" tabindex="-1" role="dialog" aria-labelledby="databank-label"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <button type="button" class="close-item text-end" data-bs-dismiss="modal" aria-label="Close"><span
                        class="icon-close"></span></button>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-4">
                            <a href="https://www.databank.com/" target="_blank" rel="noopener"><img
                                    src="{{ asset('/images') }}/portfolio/databank/_res/id=Logo/databank-logo.png"
                                    class="img-fluid" alt="DataBank" loading="lazy" /></a>
                        </div>
                        <div class="col-lg-8">
                            <div class="narrative">
                                <p class="h2" id="databank-label">DataBank</p>
                                <p>
                                    Year of Investment: 2016<br />Sector: Enterprise and Edge Data Centers<br />Geography:
                                    North America</p>
                                <p><a href="https://www.databank.com/" target="_blank"
                                        rel="noopener">https://www.databank.com/</a></p>
                                <p><span class="searchHighlight">DataBan</span>k enables the world&rsquo;s largest
                                    enterprises, technology, and content providers to consistently deploy and manage their
                                    infrastructure, applications, and data on the right platform, at the right time, in the
                                    right place. The company&rsquo;s colocation and edge infrastructure footprint consists
                                    of 60+ data centers and 20 interconnection hubs in 30+ markets, on-ramps to an ecosystem
                                    of cloud providers, and a modular edge data center platform. <span
                                        class="searchHighlight">DataBan</span>k is headquartered in Dallas, Texas.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="digita-oy" tabindex="-1" role="dialog" aria-labelledby="digita-oy-label"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <button type="button" class="close-item text-end" data-bs-dismiss="modal" aria-label="Close"><span
                        class="icon-close"></span></button>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-4">
                            <a href="https://www.digita.fi/en/" target="_blank" rel="noopener"><img
                                    src="{{ asset('/images') }}/portfolio/digita-oy/_res/id=Logo/digita-oy-logo.png"
                                    class="img-fluid" alt="Digita Oy" loading="lazy" /></a>
                        </div>
                        <div class="col-lg-8">
                            <div class="narrative">
                                <p class="h2" id="digita-oy-label">Digita Oy</p>
                                <p>
                                    Year of Investment: 2018<br />Sector: Towers<br />Geography: Europe</p>
                                <p><a href="https://www.digita.fi/en/" target="_blank"
                                        rel="noopener">https://www.digita.fi/en/</a></p>
                                <p>Digita Oy is an independent tower operator with nationwide portfolios in Finland and
                                    Iceland. Digita Oy is headquartered in Helsinki, Finland.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="edgepoint-infrastructure" tabindex="-1" role="dialog"
        aria-labelledby="edgepoint-infrastructure-label" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <button type="button" class="close-item text-end" data-bs-dismiss="modal" aria-label="Close"><span
                        class="icon-close"></span></button>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-4">
                            <a href="https://www.edgepointinfra.com" target="_blank" rel="noopener"><img
                                    src="{{ asset('/images') }}/portfolio/edgepoint-infrastructure/_res/id=Logo/edgepoint.png"
                                    class="img-fluid" alt="EdgePoint Infrastructure" loading="lazy" /></a>
                        </div>
                        <div class="col-lg-8">
                            <div class="narrative">
                                <p class="h2" id="edgepoint-infrastructure-label">EdgePoint Infrastructure</p>
                                <p>
                                    Year of Investment: 2021<br />Sector: Towers<br />Geography: Southeast Asia</p>
                                <p><a href="https://www.edgepointinfra.com" target="_blank"
                                        rel="noopener">https://www.edgepointinfra.com</a></p>
                                <p><span data-contrast="none">EdgePoint is a leading Southeast Asian wireless tower company
                                        that focuses on providing shareable, 5G-ready fiber-integrated, small cells and
                                        in-building systems to MNOs across the region.&nbsp; The company is based in
                                        Singapore with operations in Indonesia, Malaysia and the Philippines</span><span
                                        data-contrast="none">.</span><span
                                        data-ccp-props="{&quot;201341983&quot;:0,&quot;335559685&quot;:1080,&quot;335559739&quot;:160,&quot;335559740&quot;:259}">&nbsp;</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="extenet-systems" tabindex="-1" role="dialog" aria-labelledby="extenet-systems-label"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <button type="button" class="close-item text-end" data-bs-dismiss="modal" aria-label="Close"><span
                        class="icon-close"></span></button>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-4">
                            <a href="https://extenetsystems.com/" target="_blank" rel="noopener"><img
                                    src="{{ asset('/images') }}/portfolio/extenet-systems/_res/id=Logo/extenet-systems-logo.png"
                                    class="img-fluid" alt="ExteNet Systems" loading="lazy" /></a>
                        </div>
                        <div class="col-lg-8">
                            <div class="narrative">
                                <p class="h2" id="extenet-systems-label">ExteNet Systems</p>
                                <p>
                                    Year of Investment: 2015<br />Sector: Small Cells<br />Geography: North America</p>
                                <p><a href="https://extenetsystems.com/" target="_blank"
                                        rel="noopener">https://extenetsystems.com/</a></p>
                                <p>ExteNet Systems builds and operates distributed network systems (DNS) in North America
                                    utilizing various technologies including distributed antenna systems (DAS), small cell
                                    networks, remote radio solutions and Wi-Fi. ExteNet is headquartered in Lisle, Illinois.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="freshwave-group" tabindex="-1" role="dialog" aria-labelledby="freshwave-group-label"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <button type="button" class="close-item text-end" data-bs-dismiss="modal" aria-label="Close"><span
                        class="icon-close"></span></button>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-4">
                            <a href="https://freshwavegroup.com/" target="_blank" rel="noopener"><img
                                    src="{{ asset('/images') }}/portfolio/freshwave-group/_res/id=Logo/freshwave.png"
                                    class="img-fluid" alt="FreshWave Group" loading="lazy" /></a>
                        </div>
                        <div class="col-lg-8">
                            <div class="narrative">
                                <p class="h2" id="freshwave-group-label">FreshWave Group</p>
                                <p>
                                    Year of Investment: 2018<br />Sector: Small Cells, Towers<br />Geography: Europe</p>
                                <p><a href="https://freshwavegroup.com/" target="_blank"
                                        rel="noopener">https://freshwavegroup.com/</a></p>
                                <p>The FreshWave Group builds and operates wireless infrastructure in the U.K., utilizing
                                    various technologies and infrastructure solutions including indoor and outdoor
                                    distributed antenna systems (DAS), small cell networks and macro cell towers.</p>
                                <p>The company has delivered small cell solutions enabling smart cities and wireless
                                    connectivity solutions to some of the largest and highest profile venues in the U.K.
                                    including transport hubs, stadiums and arenas.&nbsp; FreshWave is headquartered in
                                    London, U.K.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="gd-towers" tabindex="-1" role="dialog" aria-labelledby="gd-towers-label"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <button type="button" class="close-item text-end" data-bs-dismiss="modal" aria-label="Close"><span
                        class="icon-close"></span></button>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-4">
                            <a href="{{ route('site.business.digital-equity') }}" target="_blank" rel="noopener"><img
                                    src="{{ asset('/images') }}/portfolio/gd-towers/_res/id=Logo/GDTowers.png"
                                    class="img-fluid" alt="GD Towers" loading="lazy" /></a>
                        </div>
                        <div class="col-lg-8">
                            <div class="narrative">
                                <p class="h2" id="gd-towers-label">GD Towers</p>
                                <p>
                                    Year of Investment: 2023<br />Sector: Towers<br />Geography: Europe</p>
                                <p style="font-weight: 400;"><span lang="EN-US">GD&nbsp;Towers&nbsp;is a leading
                                        European tower company, and a market leader in build-to-suit activity, owning and
                                        operating over 40,000 mobile sites across Germany&nbsp;and Austria, and has deployed
                                        over 1,000 new sites per year for its anchor customer, Deutsche
                                        Telecom.&nbsp;</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="highline-do-brasil" tabindex="-1" role="dialog"
        aria-labelledby="highline-do-brasil-label" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <button type="button" class="close-item text-end" data-bs-dismiss="modal" aria-label="Close"><span
                        class="icon-close"></span></button>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-4">
                            <a href="https://highline.com.br" target="_blank" rel="noopener"><img
                                    src="{{ asset('/images') }}/portfolio/highline-do-brasil/_res/id=Logo/highline-logo.png"
                                    class="img-fluid" alt="Highline do Brasil" loading="lazy" /></a>
                        </div>
                        <div class="col-lg-8">
                            <div class="narrative">
                                <p class="h2" id="highline-do-brasil-label">Highline do Brasil</p>
                                <p>
                                    Year of Investment: 2019<br />Sector: Towers<br />Geography: Latin America</p>
                                <p><a href="https://highline.com.br" target="_blank"
                                        rel="noopener">https://highline.com.br</a></p>
                                <p>Highline do Brasil is an independent provider of wireless communications infrastructure
                                    operating in Brazil. Highline currently works with several different operators,
                                    including the four largest MNOs in Brazil as well as other regional operators. Highline
                                    is headquartered in S&atilde;o Paolo, Brazil.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="landmark-dividend" tabindex="-1" role="dialog"
        aria-labelledby="landmark-dividend-label" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <button type="button" class="close-item text-end" data-bs-dismiss="modal" aria-label="Close"><span
                        class="icon-close"></span></button>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-4">
                            <a href="https://www.landmarkdividend.com/" target="_blank" rel="noopener"><img
                                    src="{{ asset('/images') }}/portfolio/landmark-dividend/_res/id=Logo/landmark"
                                    class="img-fluid" alt="Landmark Dividend" loading="lazy" /></a>
                        </div>
                        <div class="col-lg-8">
                            <div class="narrative">
                                <p class="h2" id="landmark-dividend-label">Landmark Dividend</p>
                                <p>
                                    Year of Investment: 2021<br />Sector: Real Estate Infrastructure<br />Geography: United
                                    States</p>
                                <p><a href="https://www.landmarkdividend.com/" target="_blank"
                                        rel="noopener">https://www.landmarkdividend.com/</a></p>
                                <p>Landmark Dividend is a real estate investment firm that acquires real property interests
                                    associated with digital infrastructure.&nbsp; Landmark primarily focuses on the data
                                    center, wireless communication, outdoor advertising and renewable power generation
                                    industries.&nbsp; Headquartered in Los Angeles, California, Landmark is one of the
                                    largest digital infrastructure ground lease owners in the country.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="mexico-telecom-partners" tabindex="-1" role="dialog"
        aria-labelledby="mexico-telecom-partners-label" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <button type="button" class="close-item text-end" data-bs-dismiss="modal" aria-label="Close"><span
                        class="icon-close"></span></button>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-4">
                            <a href="http://mtpsites.com/" target="_blank" rel="noopener"><img
                                    src="{{ asset('/images') }}/portfolio/mexico-telecom-partners/_res/id=Logo/mtp.png"
                                    class="img-fluid" alt="Mexico Telecom Partners" loading="lazy" /></a>
                        </div>
                        <div class="col-lg-8">
                            <div class="narrative">
                                <p class="h2" id="mexico-telecom-partners-label">Mexico Telecom Partners</p>
                                <p>
                                    Year of Investment: 2014<br />Sector: Towers<br />Geography: Latin America</p>
                                <p><a href="http://mtpsites.com/" target="_blank"
                                        rel="noopener">http://mtpsites.com/</a></p>
                                <p>Mexico Telecom Partners is amongst the largest private tower companies in Mexico. MTP
                                    currently works with all major carriers in Mexico and has a portfolio that is
                                    geographically dispersed across the country. MTP has offices in Boca Raton, Florida and
                                    Mexico City, Mexico.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="mundo-pacifico" tabindex="-1" role="dialog"
        aria-labelledby="mundo-pacifico-label" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <button type="button" class="close-item text-end" data-bs-dismiss="modal" aria-label="Close"><span
                        class="icon-close"></span></button>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-4">
                            <a href="https://www.tumundo.cl/" target="_blank" rel="noopener"><img
                                    src="{{ asset('/images') }}/portfolio/mundo-pacifico/_res/id=Logo/mundoweb.png"
                                    class="img-fluid" alt="Mundo Pacifico" loading="lazy" /></a>
                        </div>
                        <div class="col-lg-8">
                            <div class="narrative">
                                <p class="h2" id="mundo-pacifico-label">Mundo Pacifico</p>
                                <p>
                                    Year of Investment: 2022<br />Sector: Fiber<br />Geography: Latin America</p>
                                <p><a href="https://www.tumundo.cl/" target="_blank"
                                        rel="noopener">https://www.tumundo.cl/</a></p>
                                <p>Mundo Pacifico is a provider of telecommunication services through high-speed
                                    fiber-to-the-home connections in Chile.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="netomnia" tabindex="-1" role="dialog" aria-labelledby="netomnia-label"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <button type="button" class="close-item text-end" data-bs-dismiss="modal" aria-label="Close"><span
                        class="icon-close"></span></button>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-4">
                            <a href="https://www.netomnia.com/" target="_blank" rel="noopener"><img
                                    src="{{ asset('/images') }}/portfolio/netomnia/_res/id=Logo/netomniaweblogo.png"
                                    class="img-fluid" alt="Netomnia" loading="lazy" /></a>
                        </div>
                        <div class="col-lg-8">
                            <div class="narrative">
                                <p class="h2" id="netomnia-label">Netomnia</p>
                                <p>
                                    Year of Investment: 2022<br />Sector: Fiber<br />Geography: Europe</p>
                                <p><a href="https://www.netomnia.com/" target="_blank"
                                        rel="noopener">https://www.netomnia.com/</a></p>
                                <p>Netomnia specializes in building full fiber network infrastructure, connecting homes and
                                    businesses to ultrafast broadband across the UK.</p>
                                <p>&nbsp;</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="scala-data-centers" tabindex="-1" role="dialog"
        aria-labelledby="scala-data-centers-label" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <button type="button" class="close-item text-end" data-bs-dismiss="modal" aria-label="Close"><span
                        class="icon-close"></span></button>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-4">
                            <a href="https://www.scaladatacenters.com/" target="_blank" rel="noopener"><img
                                    src="{{ asset('/images') }}/portfolio/scala-data-centers/_res/id=Logo/scala-data-centers-logo.png"
                                    class="img-fluid" alt="Scala Data Centers" loading="lazy" /></a>
                        </div>
                        <div class="col-lg-8">
                            <div class="narrative">
                                <p class="h2" id="scala-data-centers-label">Scala Data Centers</p>
                                <p>
                                    Year of Investment: 2020<br />Sector: Hyperscale Data Centers<br />Geography: Latin
                                    America</p>
                                <p><a href="https://www.scaladatacenters.com/" target="_blank"
                                        rel="noopener">https://www.scaladatacenters.com/</a></p>
                                <p>Scala Data Centers is a leading scaled hyperscale data center operator located in Brazil,
                                    Mexico, and Chile. Scala is headquartered in S&atilde;o Paulo, Brazil.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="switch" tabindex="-1" role="dialog" aria-labelledby="switch-label"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <button type="button" class="close-item text-end" data-bs-dismiss="modal" aria-label="Close"><span
                        class="icon-close"></span></button>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-4">
                            <a href="https://www.switch.com/" target="_blank" rel="noopener"><img
                                    src="{{ asset('/images') }}/portfolio/switch/_res/id=Logo/switchlogo.png"
                                    class="img-fluid" alt="Switch" loading="lazy" /></a>
                        </div>
                        <div class="col-lg-8">
                            <div class="narrative">
                                <p class="h2" id="switch-label">Switch</p>
                                <p>
                                    Year of Investment: 2022<br />Sector: Enterprise Data Centers<br />Geography: United
                                    States</p>
                                <p><a href="https://www.switch.com/" target="_blank"
                                        rel="noopener">https://www.switch.com/</a></p>
                                <p>Switch is a leading, 100% renewably powered, enterprise data center platform with
                                    campuses in Nevada, Texas, Georgia, and Michigan.</p>
                                <p>&nbsp;</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="vantage-data-centers-apac" tabindex="-1" role="dialog"
        aria-labelledby="vantage-data-centers-apac-label" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <button type="button" class="close-item text-end" data-bs-dismiss="modal" aria-label="Close"><span
                        class="icon-close"></span></button>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-4">
                            <a href="https://vantage-dc.com/data-centers/" target="_blank" rel="noopener"><img
                                    src="{{ asset('/images') }}/portfolio/vantage-data-centers-apac/_res/id=Logo/VantageDC_APAC_Primary_logo_high_resolution.png"
                                    class="img-fluid" alt="Vantage Data Centers (APAC)" loading="lazy" /></a>
                        </div>
                        <div class="col-lg-8">
                            <div class="narrative">
                                <p class="h2" id="vantage-data-centers-apac-label">Vantage Data Centers (APAC)</p>
                                <p>
                                    Year of Investment: 2021<br />Sector: Hyperscale Data Centers<br />Geography: APAC</p>
                                <p><a href="https://vantage-dc.com/data-centers/" target="_blank"
                                        rel="noopener">https://vantage-dc.com/data-centers/</a></p>
                                <p>Vantage Data Centers (APAC) is a hyperscale data center operator focused on growth in key
                                    Asia-Pacific markets through greenfield development and accretive M&amp;A. &nbsp;Regions
                                    targeted for development include Japan and Australia, and the company acquired the PCCW
                                    data center business in Hong Kong in November 2021. Vantage APAC is headquartered in
                                    Singapore.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="vantage-data-centers-emea" tabindex="-1" role="dialog"
        aria-labelledby="vantage-data-centers-emea-label" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <button type="button" class="close-item text-end" data-bs-dismiss="modal" aria-label="Close"><span
                        class="icon-close"></span></button>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-4">
                            <a href="https://vantage-dc.com/data-centers/" target="_blank" rel="noopener"><img
                                    src="{{ asset('/images') }}/portfolio/vantage-data-centers-emea/_res/id=Logo/Vantage_EMEA_Primary_logo_web.png"
                                    class="img-fluid" alt="Vantage Data Centers (EMEA)" loading="lazy" /></a>
                        </div>
                        <div class="col-lg-8">
                            <div class="narrative">
                                <p class="h2" id="vantage-data-centers-emea-label">Vantage Data Centers (EMEA)</p>
                                <p>
                                    Year of Investment: 2020<br />Sector: Hyperscale Data Centers<br />Geography: Europe</p>
                                <p><a href="https://vantage-dc.com/data-centers/" target="_blank"
                                        rel="noopener">https://vantage-dc.com/data-centers/</a></p>
                                <p>Vantage Data Centers (EMEA) is a hyperscale data center operator focused on key European
                                    markets growing through greenfield development and accretive M&amp;A. Vantage EMEA has
                                    campuses in Cardiff, U.K.; Frankfurt and Berlin, Germany; Warsaw, Poland; Milan, Italy;
                                    and Zurich Switzerland.&nbsp; The Company also has expanded to South Africa with a
                                    greenfield development in Johannesburg. &nbsp;Vantage EMEA is headquartered in London.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="vantage-data-centers-north-america" tabindex="-1" role="dialog"
        aria-labelledby="vantage-data-centers-north-america-label" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <button type="button" class="close-item text-end" data-bs-dismiss="modal" aria-label="Close"><span
                        class="icon-close"></span></button>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-4">
                            <a href="https://vantage-dc.com/data-centers/" target="_blank" rel="noopener"><img
                                    src="{{ asset('/images') }}/portfolio/vantage-data-centers-north-america/_res/id=Logo/VantageDC_NorthAmerica_Primary_logo_high_resolution.png"
                                    class="img-fluid" alt="Vantage Data Centers (North America)" loading="lazy" /></a>
                        </div>
                        <div class="col-lg-8">
                            <div class="narrative">
                                <p class="h2" id="vantage-data-centers-north-america-label">Vantage Data Centers
                                    (North America)</p>
                                <p>
                                    Year of Investment: 2017<br />Sector: Hyperscale Data Centers<br />Geography: North
                                    America</p>
                                <p><a href="https://vantage-dc.com/data-centers/" target="_blank"
                                        rel="noopener">https://vantage-dc.com/data-centers/</a></p>
                                <p>Vantage Data Centers (North America), founded in 2010, is one of the leading providers of
                                    wholesale data center infrastructure to large enterprises and hyperscale cloud
                                    providers. Vantage has a leadership position in the Silicon Valley market, one of the
                                    largest data center markets in the world. Vantage also has campuses in Quincy,
                                    Washington; Ashburn, Virginia; Phoenix, Arizona; Montreal, Canada and Quebec City,
                                    Canada. Vantage is headquartered in Denver, Colorado.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="vantage-data-centers-yieldco" tabindex="-1" role="dialog"
        aria-labelledby="vantage-data-centers-yieldco-label" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <button type="button" class="close-item text-end" data-bs-dismiss="modal" aria-label="Close"><span
                        class="icon-close"></span></button>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-4">
                            <a href="https://vantage-dc.com/data-centers/" target="_blank" rel="noopener"><img
                                    src="{{ asset('/images') }}/portfolio/vantage-data-centers-yieldco/_res/id=Logo/vantagesdc.png"
                                    class="img-fluid" alt="Vantage Data Centers (SDC)" loading="lazy" /></a>
                        </div>
                        <div class="col-lg-8">
                            <div class="narrative">
                                <p class="h2" id="vantage-data-centers-yieldco-label">Vantage Data Centers (SDC)</p>
                                <p>
                                    Year of Investment: 2020<br />Sector: Hyperscale Data Centers<br />Geography: North
                                    America</p>
                                <p><a href="https://vantage-dc.com/data-centers/" target="_blank"
                                        rel="noopener">https://vantage-dc.com/data-centers/</a></p>
                                <p>Vantage SDC is a portfolio of stabilized hyperscale data centers located in strategic
                                    markets across North America. Vantage SDC was formed in July 2020 as a strategic
                                    partnership between a DigitalBridge-led investor group and Vantage Data Centers, which
                                    manages and operates Vantage SDC&rsquo;s facilities as part of its global data center
                                    footprint. Vantage SDC is headquartered in Denver, Colorado</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="vantage-towers" tabindex="-1" role="dialog"
        aria-labelledby="vantage-towers-label" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <button type="button" class="close-item text-end" data-bs-dismiss="modal" aria-label="Close"><span
                        class="icon-close"></span></button>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-4">
                            <a href="https://www.vantagetowers.com/" target="_blank" rel="noopener"><img
                                    src="{{ asset('/images') }}/portfolio/vantage-towers/_res/id=Logo/vantage-towers.png"
                                    class="img-fluid" alt="Vantage Towers" loading="lazy" /></a>
                        </div>
                        <div class="col-lg-8">
                            <div class="narrative">
                                <p class="h2" id="vantage-towers-label">Vantage Towers</p>
                                <p>
                                    Year of Investment: 2021<br />Exit Year: 2022<br />Sector: Towers<br />Geography: Europe
                                </p>
                                <p><a href="https://www.vantagetowers.com/" target="_blank"
                                        rel="noopener">https://www.vantagetowers.com/</a></p>
                                <p>Vantage Towers is a towers infrastructure company located in Europe. Vantage is
                                    headquartered in D&uuml;sseldorf, Germany.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="vertical-bridge" tabindex="-1" role="dialog"
        aria-labelledby="vertical-bridge-label" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <button type="button" class="close-item text-end" data-bs-dismiss="modal" aria-label="Close"><span
                        class="icon-close"></span></button>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-4">
                            <a href="https://www.verticalbridge.com/" target="_blank" rel="noopener"><img
                                    src="{{ asset('/images') }}/portfolio/vertical-bridge/_res/id=Logo/vertical-bridge-logo.png"
                                    class="img-fluid" alt="Vertical Bridge" loading="lazy" /></a>
                        </div>
                        <div class="col-lg-8">
                            <div class="narrative">
                                <p class="h2" id="vertical-bridge-label">Vertical Bridge</p>
                                <p>
                                    Year of Investment: 2014<br />Sector: Towers<br />Geography: North America</p>
                                <p><a href="https://www.verticalbridge.com/" target="_blank"
                                        rel="noopener">https://www.verticalbridge.com/</a></p>
                                <p>Vertical Bridge is one of the largest private owners, operators and managers of towers
                                    and wireless communication sites in the United States. Vertical Bridge is headquartered
                                    in Boca Raton, Florida.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="wildstone" tabindex="-1" role="dialog" aria-labelledby="wildstone-label"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <button type="button" class="close-item text-end" data-bs-dismiss="modal" aria-label="Close"><span
                        class="icon-close"></span></button>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-4">
                            <a href="https://www.wildstone.co.uk/" target="_blank" rel="noopener"><img
                                    src="{{ asset('/images') }}/portfolio/wildstone/_res/id=Logo/wildstone-logo.png"
                                    class="img-fluid" alt="Wildstone" loading="lazy" /></a>
                        </div>
                        <div class="col-lg-8">
                            <div class="narrative">
                                <p class="h2" id="wildstone-label">Wildstone</p>
                                <p>
                                    Year of Investment: 2020<br />Exit Year: 2022<br />Sector: Outdoor Digital
                                    Infrastructure<br />Geography: Europe</p>
                                <p><a href="https://www.wildstone.co.uk/" target="_blank"
                                        rel="noopener">https://www.wildstone.co.uk/</a></p>
                                <p>Wildstone owns and operates outdoor digital infrastructure assets in Western Europe
                                    including U.K., Netherlands and Ireland. Wildstone is headquartered in London.</p>
                                <p>&nbsp;</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="xenithig" tabindex="-1" role="dialog" aria-labelledby="xenithig-label"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <button type="button" class="close-item text-end" data-bs-dismiss="modal" aria-label="Close"><span
                        class="icon-close"></span></button>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-4">
                            <a href="https://www.xenithig.com/" target="_blank" rel="noopener"><img
                                    src="{{ asset('/images') }}/portfolio/xenithig/_res/id=Logo/xenithig2.png"
                                    class="img-fluid" alt="Xenith IG" loading="lazy" /></a>
                        </div>
                        <div class="col-lg-8">
                            <div class="narrative">
                                <p class="h2" id="xenithig-label">Xenith IG</p>
                                <p>
                                    Year of Investment: 2022<br />Sector: Fiber<br />Geography: Asia Pacific</p>
                                <p><a href="https://www.xenithig.com/" target="_blank"
                                        rel="noopener">https://www.xenithig.com/</a></p>
                                <p style="font-weight: 400;">Xenith IG owns, operates, and maintains high&ndash;density,
                                    resilient fiber optic networks connecting data centers, cable landing stations, and
                                    enterprise buildings throughout the Asia Pacific region.&nbsp; Xenith IG is
                                    headquartered in Singapore.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="zayo-group-holdings" tabindex="-1" role="dialog"
        aria-labelledby="zayo-group-holdings-label" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <button type="button" class="close-item text-end" data-bs-dismiss="modal" aria-label="Close"><span
                        class="icon-close"></span></button>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-4">
                            <a href="https://www.zayo.com/" target="_blank" rel="noopener"><img
                                    src="{{ asset('/images') }}/portfolio/zayo-group-holdings/_res/id=Logo/zayo-logo.png"
                                    class="img-fluid" alt="Zayo Group Holdings" loading="lazy" /></a>
                        </div>
                        <div class="col-lg-8">
                            <div class="narrative">
                                <p class="h2" id="zayo-group-holdings-label">Zayo Group Holdings</p>
                                <p>
                                    Year of Investment: 2020<br />Sector: Fiber<br />Geography: North America, Europe</p>
                                <p><a href="https://www.zayo.com/" target="_blank"
                                        rel="noopener">https://www.zayo.com/</a></p>
                                <p>Zayo Group Holdings is one of the largest independent bandwidth infrastructure providers
                                    in the world with over 125,000 route miles of fiber. Zayo&rsquo;s product offerings
                                    include dark fiber, private data networks, wavelengths, Ethernet, dedicated internet
                                    access and colocation services. Zayo is headquartered in Boulder, Colorado.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('frontend.shareholders.layouts.app')

@section('title', 'Shareholders')


@section('content')
    <section>

        <div class="hero-image">
            <div class="stock-pricing-block position-absolute ">
                <div class="row ">

                    <div class=" col-sm-12 col-md-12 col-lg-12 col-xl-12 w-100 py-2 px-4 h-100 bg-green">
                        <div class="container">
                            <div class="region region-hero-stock">
                                <div id="block-stockquote-2"
                                    class="block--market-data-block__stock-quote block--hero-stock--market-data-block__stock-quote block--661b2fc4-64ee-4ef2-801f-7623bdc2c7f3 block block-nir-market-data-block block-market-data-block__stock-quote">


                                    <div class="stock-quote stock-quote__short">
                                        <div class="quote-wrapper">

                                            <div class="d-flex h-50 w-50 align-items-baseline">
                                                <span class="w-50 h1">$10.94</span>
                                                <div class="position-relative w-50"><span class="table-text">0
                                                        (0.00%)</span></div>
                                            </div>
                                            <div class="d-flex h-50 w-50 align-items-baseline">
                                                <span class="w-50 table-text">High: $10.98</span>
                                                <span class="w-50 table-text">Low: $10.66</span>
                                            </div>
                                        </div>
                                    </div>

                                </div>


                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="hero-content">
                <div class="container h-100">
                    <div class="row h-100">
                        <div class="col-sm-12 col-md-6 h-100">
                            <div class="vertical-middle">
                                <h1 class="text-dark hero-heading">Shareholders</h1>


                                <div id="block-gbherotext"
                                    class="block-content--nir-global-block block-content--nir-global-block--10961 block--block-content86d0e43a-ca55-4256-aa91-69b2bf391838 block--block-content86d0e43a-ca55-4256-aa91-69b2bf391838--5806 block--hero-sub--block-content--86d0e43a-ca55-4256-aa91-69b2bf391838 block--hero-sub--block-content--86d0e43a-ca55-4256-aa91-69b2bf391838--5806 block--62ef464e-4c75-4f1b-89eb-49a7e97cec92 block--62ef464e-4c75-4f1b-89eb-49a7e97cec92--5806 block block-block-content block-block-content86d0e43a-ca55-4256-aa91-69b2bf391838">



                                    <div
                                        class="field field--name-field-nir-global-block-node field--type-entity-reference field--label-hidden field__item">
                                        <div
                                            class="field field--name-field-nir-global-block-body field--type-text-long field--label-hidden field__item">
                                            <p class="text-dark mt-5">DigitalBridge (NYSE: DBRG) is a leading
                                                global digital infrastructure firm. With a heritage of over 25
                                                years investing in and operating businesses across the digital
                                                ecosystem including cell towers,
                                                data centers, fiber, small cells, and edge infrastructure, the
                                                DigitalBridge team manages a portfolio of digital infrastructure
                                                assets on behalf of its limited partners and shareholders.</p>
                                        </div>

                                    </div>

                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>

    </section>

    <section class="section-spacings pagesubnav">
        <div class="container text-center">
            <div class="row">







                <div class="col py-4">
                    <a class="icon-corpoverview icon-link " href="#">
                        {{-- <a class="icon-corpoverview icon-link " href="/static-files/c30937a9-1ed8-41b6-a661-607ee8dba3c6"> --}}
                        <div class="mt-3 icon-text">Corporate Overview</div>
                    </a>
                </div>

                {{-- <div class="col py-4">
                    <a class="icon-news icon-link " href="{{ route('site.news') }}">
                        <div class="mt-3 icon-text">News</div>
                    </a>
                </div>

                <div class="col py-4">
                    <a class="icon-calendar icon-link " href="{{ route('site.events') }}">
                        <div class="mt-3 icon-text">Events &amp; Presentations</div>
                    </a>
                </div> --}}

                <div class="col py-4">
                    <a class="icon-qearnings icon-link " href="{{ route('site.financials.information.quaterly-reports') }}">
                        <div class="mt-3 icon-text">Quarterly Earnings</div>
                    </a>
                </div>

                {{-- <div class="col py-4">
                    <a class="icon-sec icon-link " href="{{ route('site.sec-fillings') }}">
                        <div class="mt-3 icon-text">SEC Filings</div>
                    </a>
                </div> --}}







            </div>
            <!--end of row -->
        </div>
    </section>
    <div class="region region-content">
        <div data-drupal-messages-fallback class="hidden"></div>
        <div id="block-nir-pid2237-content"
            class="block--system-main-block block--system-main-block--5806 block--content--system-main-block block--content--system-main-block--5806 block--cde76365-ce4b-4a91-8e5e-661a5b793d3e block--cde76365-ce4b-4a91-8e5e-661a5b793d3e--5806 block block-system block-system-main-block">


            <article class="node node--type-nir_landing_page node--view-mode-full clearfix">
                <div>


                    <!-- /.radix-pond -->

                    <section id="earnings" class="section-spacings">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12 col-lg-12">
                                    <div class="block-region-header">
                                        <div
                                            class="block--featured-presentation block--nir-assets__widget block--nir-assets__widget--5806 block--header--nir-assets__widget block--header--nir-assets__widget--5806 block--41e84ec8-ab67-463e-8329-7f1afecd3bca block--41e84ec8-ab67-463e-8329-7f1afecd3bca--5806 block block-nir-assets block-nir-assets__widget">


                                            <div class="nir-widget">
                                                <div class="nir-widget--label">
                                                    <h2> Corporate Overview </h2>
                                                </div>
                                                <div class="nir-widget--content">
                                                    <div class="nir-widget--list">
                                                        <article role="article"
                                                            class="clearfix node node--nir-asset--nir-widget-list node--type-nir-asset node--view-mode-nir-widget-list">

                                                            <div
                                                                class="nir-widget--field nir-widget--asset--thumbnail float-left">

                                                                <div class="field-nir-thumbnail">
                                                                    <div class="field__item"><a href="#"
                                                                            {{-- href="/static-files/c30937a9-1ed8-41b6-a661-607ee8dba3c6" --}} target="_blank"><img
                                                                                src="{{ asset('assets/shareholders/images/digitalbridge.png') }}"
                                                                                alt="Corporate Overview"
                                                                                class="image-style-nir-asset-small" />

                                                                        </a></div>
                                                                </div>
                                                            </div>









                                                        </article>

                                                    </div>
                                                    <div class="nir-widget--pager">

                                                    </div>
                                                    <div class="nir-widget--total-results">

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="block-content--nir-global-block block-content--nir-global-block--11016 block--block-content309f50ac-0959-4585-9323-da68ccd90abf block--block-content309f50ac-0959-4585-9323-da68ccd90abf--5806 block--header--block-content--309f50ac-0959-4585-9323-da68ccd90abf block--header--block-content--309f50ac-0959-4585-9323-da68ccd90abf--5806 block--b0878a48-edb6-4157-b9bf-66c004c44adf block--b0878a48-edb6-4157-b9bf-66c004c44adf--5806 block block-block-content block-block-content309f50ac-0959-4585-9323-da68ccd90abf">



                                            <div
                                                class="field field--name-field-nir-global-block-node field--type-entity-reference field--label-hidden field__item">
                                                <div
                                                    class="field field--name-field-nir-global-block-body field--type-text-long field--label-hidden field__item">
                                                    <hr style="border-bottom:1px solid #000 !important;" />
                                                    <h2 style="padding-top:20px;border-bottom:none !important;">
                                                        Q1 2023 Earnings</h2>

                                                    <div class="row pt-4">
                                                        <div class="col-md-6 col-sm-12 "><a class="cta-container="
                                                                href="https://viavid.webcasts.com/starthere.jsp?ei=1594879&amp;tp_key=f21dda0984"
                                                                target="_blank"><img alt="Placeholder"
                                                                    data-entity-type="file"
                                                                    data-entity-uuid="8389db23-1dac-4e1b-b854-a38d32b63157"
                                                                    src="{{ asset('assets/shareholders/images/Call Link (002).jpg') }}"
                                                                    style="max-width:100%" /></a>

                                                            <div class="position-absolute ml-2 text-light px-4 py-5"
                                                                style="bottom: 0;">
                                                                <p><span class="h2"><strong>Q1
                                                                            2023</strong></span><br /> EARNINGS
                                                                    CALL</p>

                                                                <p>Wednesday, May 3, 2023<br /> 10:00AM ET</p>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6 col col-sm-12">
                                                            <div class="row mb-4 align-items-center">
                                                                <div class="col-6 justify-content-center">
                                                                    <div class="icon-wrapper"><img alt="Webcast"
                                                                            class="icon" data-entity-type="file"
                                                                            data-entity-uuid="29bf992b-ac90-446d-acbd-e43dac401830"
                                                                            height="60px"
                                                                            src="{{ asset('assets/shareholders/images/Icon_Webcast.png') }}" />
                                                                    </div>
                                                                </div>

                                                                <div
                                                                    class="col-6  justify-content-center mt-2 icon-text-small ">
                                                                    <a href="#">Webcast</a>
                                                                </div>
                                                            </div>

                                                            <div class="row mb-4 align-items-center"><a href="">
                                                                </a>

                                                                <div class="col-6  justify-content-center">
                                                                    <div class="icon-wrapper"><img alt="Earnings"
                                                                            class="icon" data-entity-type="file"
                                                                            data-entity-uuid="c85280a6-b81f-44d3-99dc-95d19d9419c9"
                                                                            height="60px"
                                                                            src="{{ asset('assets/shareholders/images/Icon_EarningRelease.png') }}" />
                                                                    </div>
                                                                </div>

                                                                <div
                                                                    class="col-6  justify-content-center mt-2 icon-text-small">
                                                                    <a href="#">Earnings
                                                                        {{-- href="/static-files/bc238a54-6f1e-4077-9408-0f38764d58ae">Earnings --}}
                                                                        Release</a>
                                                                </div>
                                                            </div>

                                                            <div class="row mb-4 align-items-center">
                                                                <div class="col-6  justify-content-center">
                                                                    <div class="icon-wrapper"><img alt="presentation"
                                                                            class="icon" data-entity-type="file"
                                                                            data-entity-uuid="297c3156-6f4d-4f06-a8a4-befb75c6c6d8"
                                                                            height="60px"
                                                                            src="{{ asset('assets/shareholders/images/Icon_Presentation.png') }}" />
                                                                    </div>
                                                                </div>

                                                                <div
                                                                    class="col-6  justify-content-center mt-2 icon-text-small ">
                                                                    <a href="#ae15">Presentation</a>
                                                                    {{-- href="/static-files/ea097bd5-05aa-45ca-a3b4-be401fe0ae15">Presentation</a> --}}
                                                                </div>
                                                            </div>


                                                            <div
                                                                class="col-6  justify-content-center mt-2 icon-text-small ">
                                                                <div class="goto-link"><a
                                                                        class="btn btn-primary-outline  mt-3"
                                                                        href="{{ route('site.financials.information.quaterly-reports') }}">View
                                                                        All</a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </section>


                    <section id="news" class="pt-lg">
                        <div class="container">
                            <div class="row idm-cookie-tabs" id="events-tab">
                                <ul class="idm-cookie-tabs-nav">
                                </ul>

                                <div class="col-sm-12 col-md-12 pb-lg">
                                    <div class="block-region-column1">
                                        <div
                                            class="block-content--nir-lp-block block-content--nir-lp-block--6901 block--block-content1b8d9948-4776-48a1-9767-e0c4a9cc86f2 block--block-content1b8d9948-4776-48a1-9767-e0c4a9cc86f2--5806 block--column1--block-content--1b8d9948-4776-48a1-9767-e0c4a9cc86f2 block--column1--block-content--1b8d9948-4776-48a1-9767-e0c4a9cc86f2--5806 block--1ef24e13-c9c0-456b-8554-0554d0bb7457 block--1ef24e13-c9c0-456b-8554-0554d0bb7457--5806 block block-block-content block-block-content1b8d9948-4776-48a1-9767-e0c4a9cc86f2">



                                            <div
                                                class="field field--name-field-nir-lp-block-node field--type-entity-reference field--label-hidden field__item">
                                                <div
                                                    class="field field--name-field-nir-lp-block-body field--type-text-long field--label-hidden field__item">
                                                    <div class="goto-link"><a class="btn btn-primary-outline  mt-3"
                                                            href="/events">View All</a></div>
                                                </div>

                                            </div>

                                        </div>
                                        <div
                                            class="block--nir-events__widget block--nir-events__widget--5806 block--column1--nir-events__widget block--column1--nir-events__widget--5806 block--91cd2cb2-e175-4f4b-8caf-c3df2b297e3c block--91cd2cb2-e175-4f4b-8caf-c3df2b297e3c--5806 block block-nir-events block-nir-events__widget">


                                            <div class="nir-widget">
                                                <div class="nir-widget--label">
                                                    <h2> Events </h2>
                                                </div>
                                                <div class="nir-widget--content">
                                                    <div class="nir-widget--list">

                                                        <article role="article"
                                                            class="clearfix node node--nir-event--nir-widget-list node--type-nir-event node--view-mode-nir-widget-list">


                                                            <div class="nir-widget--field nir-widgets--event--title">

                                                                <div class="field-nir-event-title">
                                                                    <div class="field__item"><a
                                                                            href="/events/event-details/jp-morgan-51st-annual-global-technology-media-and-communications-conference"
                                                                            hreflang="en">JP Morgan 51st
                                                                            Annual Global Technology, Media and
                                                                            Communications Conference </a></div>
                                                                </div>
                                                            </div>

                                                            <div class="nir-widget--field nir-widget--event--date">



                                                                May 22, 2023 3:10 PM EDT

                                                            </div>


                                                            <div class="nir-widget--field nir-widget--event--webcast">

                                                                <div class="field-nir-event-url">
                                                                    <div class="normal-webcast-link field__item">
                                                                        <a href="https://jpmorgan.metameetings.net/events/tmc23/sessions/46232-digitalbridge/webcast/general_signin"
                                                                            target="_blank">Listen to
                                                                            Webcast</a>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div
                                                                class="nir-widget--field nir-widget--event--add-to-calendar clearfix">
                                                                <div
                                                                    class="nir-widget--field nir-widget--event--add-to-calendar--outlook">

                                                                    <div class="field-nir-event-add-calender">
                                                                        <div class="add-outlook field__item"><a
                                                                                href="/node/13071/ics"
                                                                                class="add-outlook">Add to
                                                                                Outlook</a></div>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="nir-widget--field nir-widget--event--add-to-calendar--google">

                                                                    <div class="field-nir-event-add-calender">
                                                                        <div class="add-gcal field__item"><a
                                                                                href="https://www.google.com/calendar/render?action=TEMPLATE&amp;text=DigitalBridge%20Group%2C%20Inc.%20-%20JP%20Morgan%2051st%20Annual%20Global%20Technology%2C%20Media%20and%20Communications%20Conference%20&amp;dates=20230522T191000Z/20230522T191000Z&amp;details=Event%20Details%3A%20https%3A//ir.digitalbridge.com/events/event-details/jp-morgan-51st-annual-global-technology-media-and-communications-conference%0A%0AWebcast%3A%20https%3A//jpmorgan.metameetings.net/events/tmc23/sessions/46232-digitalbridge/webcast/general_signin&amp;location=&amp;trp=false&amp;sprop=name%3A"
                                                                                class="add-gcal">Add to Google
                                                                                Calendar</a></div>
                                                                    </div>
                                                                </div>
                                                            </div>








                                                        </article>

                                                        <article role="article"
                                                            class="clearfix node node--nir-event--nir-widget-list node--type-nir-event node--view-mode-nir-widget-list">


                                                            <div class="nir-widget--field nir-widgets--event--title">

                                                                <div class="field-nir-event-title">
                                                                    <div class="field__item"><a
                                                                            href="/events/event-details/digitalbridge-group-inc-first-quarter-2023-earnings-call"
                                                                            hreflang="en">DigitalBridge Group,
                                                                            Inc. First Quarter 2023 Earnings
                                                                            Call</a></div>
                                                                </div>
                                                            </div>

                                                            <div class="nir-widget--field nir-widget--event--date">



                                                                May 3, 2023 10:00 AM EDT

                                                            </div>


                                                            <div class="nir-widget--field nir-widget--event--webcast">

                                                                <div class="field-nir-event-url">
                                                                    <div class="normal-webcast-link field__item">
                                                                        <a href="https://viavid.webcasts.com/starthere.jsp?ei=1607442&amp;tp_key=e1996a3103"
                                                                            target="_blank">Listen to
                                                                            Webcast</a>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                            <div
                                                                class="nir-widget--field nir-widget--event--support-materials">

                                                                <div
                                                                    class="nir-widget--event--section-title nir-widget--event--section-title--supporting-materials">
                                                                    <label>Supporting Materials</label>
                                                                </div>


                                                                <div class="field-nir-event-assets-ref">
                                                                    <div
                                                                        class="nir-widgets--file-list--hide-filesize field__items">
                                                                        <div>
                                                                            <div>
                                                                                <article role="article"
                                                                                    class="node node--nir-asset--asset-link node--type-nir-asset node--view-mode-asset-link">
                                                                                    <div class="node__content">

                                                                                        <div
                                                                                            class="field field--name-field-nir-document field--type-file field--label-hidden field__items">
                                                                                            <div class="field__item">
                                                                                                <div class="file-link">
                                                                                                    <span
                                                                                                        class="file file--mime-application-pdf file--application-pdf">
                                                                                                        <a href="#"
                                                                                                            {{-- <a href="/static-files/ea097bd5-05aa-45ca-a3b4-be401fe0ae15" --}}
                                                                                                            type="application/pdf"
                                                                                                            title="DigitalBridge-1Q23-Earnings Presentation.pdf">Q1
                                                                                                            2023
                                                                                                            Presentation</a></span>
                                                                                                    <span class="filesize">
                                                                                                        3.2
                                                                                                        MB</span>
                                                                                                </div>

                                                                                            </div>
                                                                                        </div>

                                                                                    </div>
                                                                                </article>
                                                                            </div>
                                                                        </div>
                                                                        <div>
                                                                            <div>
                                                                                <article role="article"
                                                                                    class="node node--nir-asset--asset-link node--type-nir-asset node--view-mode-asset-link">
                                                                                    <div class="node__content">

                                                                                        <div
                                                                                            class="field field--name-field-nir-document field--type-file field--label-hidden field__items">
                                                                                            <div class="field__item">
                                                                                                <div class="file-link">
                                                                                                    <span
                                                                                                        class="file file--mime-application-pdf file--application-pdf">
                                                                                                        <a href="#"
                                                                                                            {{-- <a href="/static-files/bc238a54-6f1e-4077-9408-0f38764d58ae" --}}
                                                                                                            type="application/pdf"
                                                                                                            title="DigitalBridge-1Q23 Earnings Release.pdf">Q1
                                                                                                            2023
                                                                                                            Financial
                                                                                                            Release</a></span>
                                                                                                    <span class="filesize">
                                                                                                        618.5
                                                                                                        KB</span>
                                                                                                </div>

                                                                                            </div>
                                                                                        </div>

                                                                                    </div>
                                                                                </article>
                                                                            </div>
                                                                        </div>
                                                                        <div>
                                                                            <div>
                                                                                <article role="article"
                                                                                    class="node node--nir-asset--asset-link node--type-nir-asset node--view-mode-asset-link">
                                                                                    <div class="node__content">

                                                                                        <div
                                                                                            class="field field--name-field-nir-document field--type-file field--label-hidden field__items">
                                                                                            <div class="field__item">
                                                                                                <div class="file-link">
                                                                                                    <span
                                                                                                        class="file file--mime-application-pdf file--application-pdf">
                                                                                                        <a href="#"
                                                                                                            {{-- <a href="/static-files/7b1b4436-9f4e-41df-b371-d969fad86388" --}}
                                                                                                            type="application/pdf"
                                                                                                            title="DigitalBridge-1Q23 Supplemental Financial Report.pdf">Q1
                                                                                                            2023
                                                                                                            Supplemental
                                                                                                            Financial
                                                                                                            Presentation</a></span>
                                                                                                    <span class="filesize">
                                                                                                        503.4
                                                                                                        KB</span>
                                                                                                </div>

                                                                                            </div>
                                                                                        </div>

                                                                                    </div>
                                                                                </article>
                                                                            </div>
                                                                        </div>
                                                                        <div>
                                                                            <div>
                                                                                <article role="article"
                                                                                    class="node node--nir-asset--asset-link node--type-nir-asset node--view-mode-asset-link">
                                                                                    <div class="node__content">

                                                                                        <div
                                                                                            class="field field--name-field-nir-document field--type-file field--label-hidden field__items">
                                                                                            <div class="field__item">
                                                                                                <div class="file-link">
                                                                                                    <span
                                                                                                        class="file file--mime-application-vnd-openxmlformats-officedocument-spreadsheetml-sheet file--x-office-spreadsheet">
                                                                                                        <a href="#"
                                                                                                            {{-- <a href="/static-files/22c73f8a-04c2-4061-85df-3128c9ed4cf9" --}}
                                                                                                            type="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet"
                                                                                                            title="DigitalBridge-1Q23 Financial Supplemental.xlsx">Q1
                                                                                                            2023
                                                                                                            Supplemental
                                                                                                            Financial
                                                                                                            Presentation
                                                                                                            (excel)</a></span>
                                                                                                    <span class="filesize">
                                                                                                        61.8
                                                                                                        KB</span>
                                                                                                </div>

                                                                                            </div>
                                                                                        </div>

                                                                                    </div>
                                                                                </article>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>







                                                        </article>

                                                        <article role="article"
                                                            class="clearfix node node--nir-event--nir-widget-list node--type-nir-event node--view-mode-nir-widget-list">


                                                            <div class="nir-widget--field nir-widgets--event--title">

                                                                <div class="field-nir-event-title">
                                                                    <div class="field__item"><a
                                                                            href="/events/event-details/virtual-fireside-chat-marc-ganzi-ceo-digitalbridge"
                                                                            hreflang="en">Virtual Fireside
                                                                            Chat, Marc Ganzi, CEO of
                                                                            DigitalBridge</a></div>
                                                                </div>
                                                            </div>

                                                            <div class="nir-widget--field nir-widget--event--date">



                                                                Apr 7, 2023 10:00 AM EDT

                                                            </div>


                                                            <div class="nir-widget--field nir-widget--event--webcast">

                                                                <div class="field-nir-event-url">
                                                                    <div class="normal-webcast-link field__item">
                                                                        <a href="https://viavid.webcasts.com/starthere.jsp?ei=1609470&amp;tp_key=3add49443c"
                                                                            target="_blank">Watch Webcast</a>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                            <div
                                                                class="nir-widget--field nir-widget--event--support-materials">

                                                                <div
                                                                    class="nir-widget--event--section-title nir-widget--event--section-title--supporting-materials">
                                                                    <label>Supporting Materials</label>
                                                                </div>


                                                                <div class="field-nir-event-assets-ref">
                                                                    <div
                                                                        class="nir-widgets--file-list--hide-filesize field__items">
                                                                        <div>
                                                                            <div>
                                                                                <article role="article"
                                                                                    class="node node--nir-asset--asset-link node--type-nir-asset node--view-mode-asset-link">
                                                                                    <div class="node__content">

                                                                                        <div
                                                                                            class="field field--name-field-nir-document field--type-file field--label-hidden field__items">
                                                                                            <div class="field__item">
                                                                                                <div class="file-link">
                                                                                                    <span
                                                                                                        class="file file--mime-application-pdf file--application-pdf">
                                                                                                        <a href="#"
                                                                                                            {{-- <a href="/static-files/a083027d-704a-401b-979e-aac338295632" --}}
                                                                                                            type="application/pdf"
                                                                                                            title="DigitalBridgeValuationFramework.pdf">DigitalBridge
                                                                                                            Valuation
                                                                                                            Framework</a></span>
                                                                                                    <span class="filesize">
                                                                                                        428.9
                                                                                                        KB</span>
                                                                                                </div>

                                                                                            </div>
                                                                                        </div>

                                                                                    </div>
                                                                                </article>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>







                                                        </article>

                                                        <article role="article"
                                                            class="clearfix node node--nir-event--nir-widget-list node--type-nir-event node--view-mode-nir-widget-list">


                                                            <div class="nir-widget--field nir-widgets--event--title">

                                                                <div class="field-nir-event-title">
                                                                    <div class="field__item"><a
                                                                            href="/events/event-details/morgan-stanley-technology-media-telecom-conference"
                                                                            hreflang="en">Morgan Stanley
                                                                            Technology, Media &amp; Telecom
                                                                            Conference</a></div>
                                                                </div>
                                                            </div>

                                                            <div class="nir-widget--field nir-widget--event--date">



                                                                Mar 8, 2023 9:50 AM PST

                                                            </div>


                                                            <div class="nir-widget--field nir-widget--event--webcast">

                                                                <div class="field-nir-event-url">
                                                                    <div class="normal-webcast-link field__item">
                                                                        <a href="https://event.webcasts.com/starthere.jsp?ei=1599013&amp;tp_key=fb54a4904a&amp;tp_special=8"
                                                                            target="_blank">Listen to
                                                                            Webcast</a>
                                                                    </div>
                                                                </div>
                                                            </div>









                                                        </article>

                                                    </div>
                                                    <div class="nir-widget--pager">

                                                    </div>
                                                    <div class="nir-widget--total-results">

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12  col-md-12  %pb-lg">
                                    <div class="block-region-column3">
                                        <div
                                            class="block-content--nir-lp-block block-content--nir-lp-block--6896 block--block-content49021e0f-cf77-4867-97ae-04402cb69611 block--block-content49021e0f-cf77-4867-97ae-04402cb69611--5806 block--column3--block-content--49021e0f-cf77-4867-97ae-04402cb69611 block--column3--block-content--49021e0f-cf77-4867-97ae-04402cb69611--5806 block--451ee5a4-a644-47d7-a18a-9bbb6e3430cb block--451ee5a4-a644-47d7-a18a-9bbb6e3430cb--5806 block block-block-content block-block-content49021e0f-cf77-4867-97ae-04402cb69611">



                                            <div
                                                class="field field--name-field-nir-lp-block-node field--type-entity-reference field--label-hidden field__item">
                                                <div
                                                    class="field field--name-field-nir-lp-block-body field--type-text-long field--label-hidden field__item">
                                                    <div class="goto-link"><a class="btn btn-primary-outline  mt-3"
                                                            href="/news-releases">View All</a></div>
                                                </div>

                                            </div>

                                        </div>
                                        <div
                                            class="block--homepage-releases block--nir-news__widget block--nir-news__widget--5806 block--column3--nir-news__widget block--column3--nir-news__widget--5806 block--4a0dfa50-e595-4902-b584-7cfa504fd4d5 block--4a0dfa50-e595-4902-b584-7cfa504fd4d5--5806 block block-nir-news block-nir-news__widget">


                                            <div class="nir-widget">
                                                <div class="nir-widget--label">
                                                    <h2>Latest News</h2>
                                                </div>

                                                <div class="nir-widget--content">
                                                    <div class="nir-widget--list">
                                                        <div class="news-list">

                                                            <div class="news-item pt-3 pb-3">
                                                                <div class="news-date pt-1 pb-1">May 09, 2023
                                                                </div>
                                                                <a href="/news-releases/news-release-details/climate-adaptive-infrastructure-cai-and-digitalbridge-announce"
                                                                    class="news-heading">Climate Adaptive
                                                                    Infrastructure (CAI) and DigitalBridge
                                                                    Announce $300 Million Decarbonization
                                                                    Partnership with DigitalBridge</a>
                                                            </div>
                                                            <div class="news-item pt-3 pb-3">
                                                                <div class="news-date pt-1 pb-1">May 08, 2023
                                                                </div>
                                                                <a href="/news-releases/news-release-details/digitalbridge-participate-upcoming-investor-and-industry-7"
                                                                    class="news-heading">DigitalBridge to
                                                                    Participate in Upcoming Investor and
                                                                    Industry Conferences in May 2023</a>
                                                            </div>
                                                            <div class="news-item pt-3 pb-3">
                                                                <div class="news-date pt-1 pb-1">May 03, 2023
                                                                </div>
                                                                <a href="/news-releases/news-release-details/digitalbridge-announces-first-quarter-2023-financial-results"
                                                                    class="news-heading">DigitalBridge
                                                                    Announces First Quarter 2023 Financial
                                                                    Results</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="nir-widget--pager">

                                                    </div>
                                                    <div class="nir-widget--total-results">

                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                </div>
                </section>

                <section id="why" class="pt-lg">
                    <div class="container">
                        <h2>Why DigitalBridge?</h2>
                        <div class="row">
                            <div class="col-sm-12 col-md-6 pb-lg">
                                <div class="block-region-secondarycolumn1">
                                    <div
                                        class="block-content--nir-lp-block block-content--nir-lp-block--11001 block--block-content464c12e6-8c16-468a-ba90-496f94f2ab39 block--block-content464c12e6-8c16-468a-ba90-496f94f2ab39--5806 block--secondarycolumn1--block-content--464c12e6-8c16-468a-ba90-496f94f2ab39 block--secondarycolumn1--block-content--464c12e6-8c16-468a-ba90-496f94f2ab39--5806 block--5e7d04f5-44f4-481c-b610-8516be793667 block--5e7d04f5-44f4-481c-b610-8516be793667--5806 block block-block-content block-block-content464c12e6-8c16-468a-ba90-496f94f2ab39">



                                        <div
                                            class="field field--name-field-nir-lp-block-node field--type-entity-reference field--label-hidden field__item">
                                            <div
                                                class="field field--name-field-nir-lp-block-body field--type-text-long field--label-hidden field__item">
                                                <p><a href="#"><img alt="cnbc" {{-- <p><a href="https://library.digitalinvestorday.com/"><img alt="cnbc" --}}
                                                            data-entity-type="file"
                                                            data-entity-uuid="9a9c4d82-fc53-4460-a94f-7b52dc9d1a6b"
                                                            src="{{ asset('assets/shareholders/images/investor day thumb.jpg') }}"
                                                            style="max-width:100%" /></a></p>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 pb-lg">
                                <div class="block-region-secondarycolumn2">
                                    <div
                                        class="block-content--nir-lp-block block-content--nir-lp-block--10996 block--block-contenteee237f6-7603-4529-aeaf-3b02b1870add block--block-contenteee237f6-7603-4529-aeaf-3b02b1870add--5806 block--secondarycolumn2--block-content--eee237f6-7603-4529-aeaf-3b02b1870add block--secondarycolumn2--block-content--eee237f6-7603-4529-aeaf-3b02b1870add--5806 block--9e1cdbf5-79d7-4071-ba63-1f414ba51982 block--9e1cdbf5-79d7-4071-ba63-1f414ba51982--5806 block block-block-content block-block-contenteee237f6-7603-4529-aeaf-3b02b1870add">



                                        <div
                                            class="field field--name-field-nir-lp-block-node field--type-entity-reference field--label-hidden field__item">
                                            <div
                                                class="field field--name-field-nir-lp-block-body field--type-text-long field--label-hidden field__item">
                                                <div class="pr-md-5">
                                                    <p class="font-weight-bold"><strong>Who We Are. </strong>
                                                    </p>

                                                    <p class="font-weight-bold">Executing on the digital
                                                        infrastructure opportunity. DigitalBridges's unique and
                                                        strategic approach.</p>

                                                    <p class="font-weight-bold"><strong>Marc Ganzi</strong> /
                                                        President and Chief Executive Offcer</p>

                                                    <p class="font-weight-bold"><strong>Severin White</strong>
                                                        / Managing Director, Head of Public Investor Relations
                                                    </p>

                                                    <div class="pt-4"> </div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>


                <section id="subscribe" class="pt-lg">
                    <div class="container">
                        <div class="block-region-secondarycolumn3">
                            <div
                                class="block-content--nir-global-block block-content--nir-global-block--11056 block--block-content31acd86c-44a5-4dee-a511-2f968d53b11d block--block-content31acd86c-44a5-4dee-a511-2f968d53b11d--5806 block--secondarycolumn3--block-content--31acd86c-44a5-4dee-a511-2f968d53b11d block--secondarycolumn3--block-content--31acd86c-44a5-4dee-a511-2f968d53b11d--5806 block--87f0ae87-f1d7-4a3e-a42b-cdbfa4761edc block--87f0ae87-f1d7-4a3e-a42b-cdbfa4761edc--5806 block block-block-content block-block-content31acd86c-44a5-4dee-a511-2f968d53b11d">



                                <div
                                    class="field field--name-field-nir-global-block-node field--type-entity-reference field--label-hidden field__item">
                                    <div
                                        class="field field--name-field-nir-global-block-body field--type-text-long field--label-hidden field__item">
                                        <div class="row">
                                            <div class="col-sm-12 col-md-6 pb-lg">
                                                <h2 class="footercta ">Want to stay up to date?</h2>

                                                <p>Subscribe to our emails</p>
                                                <a class="mt-5 btn btn-primary" href="/contact-us">Subscribe</a>
                                            </div>

                                            <div class="col-sm-12 col-md-6 pb-lg">
                                                <div class="row">
                                                    <div class="col-md-12 col-lg-6">
                                                        <div class="footers-headings">Investor Relations</div>

                                                        <p class="small-text">Severin White<br /> Managing
                                                            Director,<br /> Head of Investor Relations<br />
                                                            212.547.2777
                                                            <br /> severin.white@digitalbridge.com
                                                        </p>
                                                    </div>

                                                    <div class="col-md-12 col-lg-6">
                                                        <div class="footers-headings">Press &amp; Media</div>

                                                        <p class="small-text">Joele Frank, Wilkinson Brimmer
                                                            Katcher<br /> Jon Keehner / Aura Reinhard<br />
                                                            212.355.4449
                                                            <br /> dbrg-jf@joelefrank.com
                                                        </p>
                                                    </div>
                                                </div>

                                                <div> </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </section>

                <section id="quote" class="text-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-8 col-md-6 col-lg-5 m-auto">

                            </div>
                        </div>
                    </div>
                </section>



        </div>
        </article>

    </div>

    </div>
@endsection

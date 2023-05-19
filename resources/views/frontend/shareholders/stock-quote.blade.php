@extends('frontend.shareholders.layouts.app')

@section('title', 'Stock Quote')


@section('content')
    <section>

        <div class="hero-image">

            <div class="hero-content">
                <div class="container h-100">
                    <div class="row h-100">
                        <div class="col-sm-12 col-md-6 h-100">
                            <div class="vertical-middle">

                                <h1 class="text-dark hero-heading">Stock Quote</h1>

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




                @include('frontend.shareholders.layouts.stock-sub-nav')


            </div>
            <!--end of row -->
        </div>
    </section>

    <section class="section-spacings content-withsubnav">
        <div class="container">

            <div id="content">
                <div id="content-header">



                </div>
            </div>



            <div class="row" id="ndq-content">
                <div class="ndq-5911 col-md-12">


                    <section id="inner-page" class="complex-search main-padding has-white-background">
                        <div class="content-wrapper">
                            <div id="ndq-content" class="ndq-5911">
                                <div class="region region-content">
                                    <div data-drupal-messages-fallback="" class="hidden"></div>
                                    <div id="block-nir-pid2237-content"
                                        class="block--system-main-block block--system-main-block--5911 block--content--system-main-block block--content--system-main-block--5911 block--cde76365-ce4b-4a91-8e5e-661a5b793d3e block--cde76365-ce4b-4a91-8e5e-661a5b793d3e--5911 block block-system block-system-main-block">


                                        <article class="node node--type-nir_landing_page node--view-mode-full clearfix">
                                            <div>

                                                <div class="panel-display boxton clearfix">

                                                    <div class="container-fluid">
                                                        <div class="row">
                                                            <div class="col-md-12 radix-layouts-content panel-panel">
                                                                <div class="panel-panel-inner">
                                                                    <div class="block-region-contentmain">
                                                                        <div data-storage-id="node:5911:full:27606"
                                                                            data-uuid="65496438-06fb-46d0-a20c-615c3f0c91ea"
                                                                            class="block--market-data-block__stock-quote block--market-data-block__stock-quote--5911 block--contentmain--market-data-block__stock-quote block--contentmain--market-data-block__stock-quote--5911 block--65496438-06fb-46d0-a20c-615c3f0c91ea block--65496438-06fb-46d0-a20c-615c3f0c91ea--5911 block block-nir-market-data-block block-market-data-block__stock-quote"
                                                                            id="nir-ipe-block_65496438-06fb-46d0-a20c-615c3f0c91ea">



                                                                            <div
                                                                                class="quote-wrap user-toggle-off long-quote ">

                                                                                <div
                                                                                    class="quote-wrap user-toggle-off long-quote stock-ajax-true">
                                                                                    <div class="quote-wrapper">
                                                                                        <div class="stock-quote"
                                                                                            data-exchange="DBRG">
                                                                                            <div class="left-stock">
                                                                                                <div class="exchange">NYSE:
                                                                                                    DBRG</div>
                                                                                                <div class="quote-price ">
                                                                                                    $10.94</div>
                                                                                                <time>May 18, 2023 4:10 PM
                                                                                                    EDT</time>
                                                                                            </div>
                                                                                            <div class="center-stock">
                                                                                                <dd>Change</dd>
                                                                                                <dt class="">0 (0.00%)
                                                                                                </dt>
                                                                                                <dd>Volume</dd>
                                                                                                <dt>150</dt>
                                                                                                <dd>Today's Open</dd>
                                                                                                <dt>--</dt>
                                                                                                <dd>Previous Close</dd>
                                                                                                <dt>$10.94</dt>
                                                                                            </div>
                                                                                            <div class="right-stock">
                                                                                                <dd>Today's High</dd>
                                                                                                <dt>$10.98</dt>
                                                                                                <dd>Today's Low</dd>
                                                                                                <dt>$10.66</dt>
                                                                                                <dd>52 Week High</dd>
                                                                                                <dt>$25.32</dt>
                                                                                                <dd>52 Week Low</dd>
                                                                                                <dt>$9.99</dt>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                            </div>

                                                                        </div>
                                                                        <div
                                                                            class="block--nir-stock-chart block--nir-stock-chart--5911 block--contentmain--nir-stock-chart block--contentmain--nir-stock-chart--5911 block--1f5fa020-fa9d-40c1-8b56-42e5cfd660e5 block--1f5fa020-fa9d-40c1-8b56-42e5cfd660e5--5911 block block-nir-stock-chart">

                                                                            <h2>Stock Chart</h2>


                                                                            <iframe
                                                                                src="https://api.nasdaqomx.wallst.com/advancedchart?display=mountain&amp;symbol=DBRG.K&amp;scale=linear&amp;duration=1dy&amp;frequency=1dy&amp;gridLine=h&amp;bgColor=ffffff&amp;lineColor=76bc21&amp;fillcolor=76bc21|76bc21&amp;width=100%&amp;height=440&amp;bdr=2&amp;headerType="
                                                                                width="100%" height="440"
                                                                                frameborder="0" scrolling="no"
                                                                                allowtransparency="true"
                                                                                class="nir-stock-chart"
                                                                                style="width: 100%; height: 440px;"></iframe>

                                                                        </div>
                                                                        <div
                                                                            class="block--attribution-block__stock-info-attribution__thomson-reuters block--attribution-block__stock-info-attribution__thomson-reuters--5911 block--contentmain--attribution-block__stock-info-attribution__thomson-reuters block--contentmain--attribution-block__stock-info-attribution__thomson-reuters--5911 block--f6530c2f-14fd-4e03-b4ed-532bc23f9a41 block--f6530c2f-14fd-4e03-b4ed-532bc23f9a41--5911 block block-nir-attribution-block block-attribution-block__stock-info-attribution__thomson-reuters">


                                                                            <p>
                                                                                Data Provided by Refinitiv. Minimum 15
                                                                                minutes delayed.</p>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div><!-- /.boxton -->

                                            </div>
                                        </article>

                                    </div>

                                </div>

                            </div>
                        </div>
                    </section>

                </div>
                <!--- end col-md-9/12 -->
            </div>
        </div> <!-- end container -->
    </section>
@endsection

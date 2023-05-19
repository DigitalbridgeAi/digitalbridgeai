<!DOCTYPE html>
<html lang="en" dir="ltr" prefix="og: https://ogp.me/ns#">

<head>
    <meta charset="utf-8" />

    <meta name="description"
        content="The Investor Relations website contains information about DigitalBridge Group, Inc.&#039;s business for stockholders, potential investors, and financial analysts." />
    <meta property="og:site_name" content="DigitalBridge Group, Inc." />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Investor Overview | DigitalBridge Group, Inc." />
    <meta property="og:description"
        content="The Investor Relations website contains information about DigitalBridge Group, Inc.&#039;s business for stockholders, potential investors, and financial analysts." />
    <meta name="Generator" content="Drupal 9 (https://www.drupal.org)" />
    <meta name="MobileOptimized" content="width" />
    <meta name="HandheldFriendly" content="true" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="/sites/g/files/knoqqb65481/files/favicon-32x32_1.png" type="image/png" />

    <title>@yield('title') | DigitalBridge Group, Inc.</title>

    @stack('css')
    <link rel="stylesheet" href="{{ asset('assets/shareholders/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/shareholders/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/shareholders/css/nav.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/shareholders/css/select.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/shareholders/css/ndqicons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/shareholders/css/ui.css') }}">

    <script src="{{ asset('assets/shareholders/js/js1.js') }}"></script>
    <script src="{{ asset('assets/shareholders/js/modernizr.min.js') }}"></script>
    <script src="{{ asset('assets/shareholders/js/modernizr-additional-tests.js') }}"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-3NGYTSKV8B"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-3NGYTSKV8B');
    </script>
</head>

<body
    class="body-sidebars-none nir-node nir-node--type-nir-landing-page nir-node--5806 path-frontpage page-node-type-nir-landing-page">
    <div id="skip">
        <a class="visually-hidden focusable skip-link" href="#main-menu">
            Skip to main navigation
        </a>
    </div>

    <div class="dialog-off-canvas-main-canvas" data-off-canvas-main-canvas>
        @include('frontend.shareholders.layouts.headers')


        <main id="skip-to-content" role="main">

            @yield('content')


            @include('frontend.shareholders.layouts.footers')

        </main>




    </div>


    <script type="text/javascript">
        var s_CCSWebHostingAccount = "trcgcolonynorthstar";
    </script>

    <script type="application/json" data-drupal-selector="drupal-settings-json">{"path":{"baseUrl":"\/","scriptPath":null,"pathPrefix":"","currentPath":"node\/5986","currentPathIsAdmin":false,"isFront":false,"currentLanguage":"en","themeUrl":"sites\/g\/files\/knoqqb65481\/themes\/site\/nir_pid2237"},"pluralDelimiter":"\u0003","suppressDeprecationErrors":true,"ajaxPageState":{"libraries":"nir_analytics\/nir_analytics.adobe_launch,nir_analytics\/nir_analytics.adobe_prod,nir_base\/lib,nir_base\/nir_icons,nir_base\/nir_toolbar,nir_base\/sidr,nir_ckeditor_datatables\/datatables,nir_market_data_block\/analyst_rating_bar_chart,nir_market_data_block\/analyst_ratings_table,nir_market_data_block\/mean_recommendation_chart,nir_multimedia\/nir_multimedia,nir_pid2237\/override,radix_layouts\/radix_layouts,system\/base,views\/views.module","theme":"nir_pid2237","theme_token":null},"ajaxTrustedUrl":{"\/financial-information\/quarterly-results":true},"nir_admin_use_chosen":true,"nir_admin_use_select2":false,"user":{"uid":0,"permissionsHash":"9babc6a6bf4ec40a09d4734f2fa69dd219c2c52bb08327de06e2a6ff4da46d6b"}}</script>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    {{-- <script src="{{ asset('assets/shareholders/js/js2.js') }}"></script> --}}
    <script src="{{ asset('assets/shareholders/js/js3.js') }}"></script>
    <script src="{{ asset('assets/shareholders/js/js4.js') }}"></script>

    <script>
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
        ga('create', 'UA-91401702-1', 'auto');
        ga('send', 'pageview');
    </script>
    <script type="text/javascript">
        window.NREUM || (NREUM = {});
        NREUM.info = {
            "beacon": "bam.nr-data.net",
            "licenseKey": "761e715901",
            "applicationID": "35893545,24276188",
            "transactionName": "ZlVXYRcAW0ZRW0QKX18fdFYRCFpbH3xCFkBQXGlbCgVQaXNXXhdCXlxZUBc9e1pUXWYKVUZzWlsRE1pZXF1CTg5HWVBC",
            "queueTime": 0,
            "applicationTime": 659,
            "atts": "ShJUF18aSEg=",
            "errorBeacon": "bam.nr-data.net",
            "agent": ""
        }
    </script>
</body>

</html>

@vite('resources/js/app.js')
<div class="cookie-notice-container accepted" id="cookie-notice">
    <div class="cookie-notice">
        <div class="d-flex">
            <div class="cn-text me-4">We use cookies to improve your experience on our website. By browsing this
                website, you agree to our use of cookies.</div>
            <a href="index.html#" id="cn-accept-cookie" data-cookie-set="accept" class="btn btn-primary me-3">Ok,
                Understood</a>
            <a href="cookie-notice.html" class="btn btn-gray">Cookie Notice</a>
        </div>
    </div>
</div>


<script src="{{ asset('assets/js/aos.js') }}" nonce=""></script>
{{-- <script src="https://static.digitalbridge.com/js/aos.js" nonce=""></script> --}}
<script nonce="">
    AOS.init({
        easing: 'ease-in-out',
        duration: 600
    });
</script>
<script src="{{ asset('assets/js/jquery.js') }}" nonce=""></script>
<script type="text/javascript" nonce="">
    window.jQuery || document.write('<script src="https://static.animusrex.com/js/jquery.min.js" nonce=""><\/script>');
</script>
<script src="{{ asset('assets/js/bootstrap.js') }}"></script>
<script src="{{ asset('assets/js/script.js') }}" nonce=""></script>
<script type="text/javascript" nonce="">
    _linkedin_partner_id = "4558810";
    window._linkedin_data_partner_ids = window._linkedin_data_partner_ids || [];
    window._linkedin_data_partner_ids.push(_linkedin_partner_id);
</script>
<script type="text/javascript" nonce="">
    (function(l) {
        if (!l) {
            window.lintrk = function(a, b) {
                window.lintrk.q.push([a, b])
            };
            window.lintrk.q = []
        }
        var s = document.getElementsByTagName("script")[0];
        var b = document.createElement("script");
        b.type = "text/javascript";
        b.async = true;
        b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js";
        s.parentNode.insertBefore(b, s);
    })(window.lintrk);
</script>
<noscript>
    <img height="1" width="1" style="display:none;" alt=""
        src="https://px.ads.linkedin.com/collect/?pid=4558810&fmt=gif" />
</noscript>

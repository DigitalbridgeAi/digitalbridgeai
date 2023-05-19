<div class="col py-4">
    <a class="icon-link {{ Route::is('site.stock.information.annual-quote') ? 'active' : '' }} "
        href="{{ route('site.stock.information.annual-quote') }}">
        <div class="mt-3 icon-text">Stock Quote</div>
    </a>
</div>

<div class="col py-4">
    <a class="icon-link {{ Route::is('site.stock.information.dividends') ? 'active' : '' }} "
        href="{{ route('site.stock.information.dividends') }}">
        <div class="mt-3 icon-text">Dividends</div>
    </a>
</div>

<div class="col py-4">
    <a class="icon-link {{ Route::is('site.stock.information.dgrb-tax') ? 'active' : '' }} "
        href="{{ route('site.stock.information.dgrb-tax') }}">
        <div class="mt-3 icon-text">DBRG Dividend Tax Treatment</div>
    </a>
</div>

<div class="col py-4">
    <a class="icon-link {{ Route::is('site.stock.information.clnr-historic-tax') ? 'active' : '' }} "
        href="{{ route('site.stock.information.clnr-historic-tax') }}">
        <div class="mt-3 icon-text">CLNY Historic Tax (pre-January 2017)</div>
    </a>
</div>

<div class="col py-4">
    <a class="icon-link {{ Route::is('site.stock.information.NRF-historic-tax') ? 'active' : '' }} "
        href="{{ route('site.stock.information.NRF-historic-tax') }}">
        <div class="mt-3 icon-text">NRF Historic Tax</div>
    </a>
</div>

<div class="col py-4">
    <a class="icon-link {{ Route::is('site.stock.information.distribution-reinvestment-program') ? 'active' : '' }} "
        href="{{ route('site.stock.information.distribution-reinvestment-program') }}">
        <div class="mt-3 icon-text">Distribution Reinvestment Program</div>
    </a>
</div>

<div class="col py-4">
    <a class="icon-link {{ Route::is('site.financials.information.quaterly-reports') ? 'active' : '' }} "
        href="{{ route('site.financials.information.quaterly-reports') }}">
        <div class="mt-3 icon-text">Quarterly Results</div>
    </a>
</div>

<div class="col py-4">
    <a class="icon-link {{ Route::is('site.financials.information.annual-reports') ? 'active' : '' }} "
        href="{{ route('site.financials.information.annual-reports') }}">
        <div class="mt-3 icon-text">Annual Report/Proxy</div>
    </a>
</div>

<div class="col py-4">
    <a class="icon-link {{ Route::is('site.financials.information.supplements') ? 'active' : '' }} "
        href="{{ route('site.financials.information.supplements') }}">
        <div class="mt-3 icon-text">Supplements</div>
    </a>
</div>

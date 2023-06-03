@extends('user.layout.app')

@section('title')
    @lang('Add Deposit')
@endsection
@push('css')
@endpush

@section('content')
    <div class="breadcrumb-area">
        <h3 class="title">@lang('Deposit Money')</h3>
        <ul class="breadcrumb">
            <li>
                <a href="{{ route('user.dashboard') }}">@lang('Dashboard')</a>
            </li>

            <li>
                @lang('Transfer Money')
            </li>
        </ul>
    </div>

    <div class="dashboard--content-item">
        <div class="row g-3">
            <div class="col-12">
                <div class="card default--card">
                    <div class="card-body">
                        @includeIf('includes.flash')
                        <form action="{{ route('user.deposit.insert') }}" method="post">
                          @csrf
                          <input name="method_code" type="hidden">
                          <input name="currency" type="hidden">

                            <div class="row gy-3 gy-md-4">
                                <div class="form-group">
                                    <label class="form-label required">{{ __('Payment Method') }}</label>
                                    <select name="method" id="withmethod" class="form-control" required>
                                        <option value="">{{ __('Select Payment Method') }}</option>
                                        @foreach ($gatewayCurrency as $data)
                                            <option data-gateway="{{ $data }}" value="{{ $data->method_code }}"
                                                @selected(old('gateway') == $data->method_code)>{{ $data->name }}</option>
                                        @endforeach
                                    </select>
                                    <p class="text--danger limit-error"></p>
                                </div>

                                <div class="form-group">
                                    <label class="form-label">@lang('Amount')</label>
                                    <div class="input-group">
                                        <input class="form-control form--control" name="amount" type="number"
                                            value="{{ old('amount') }}" step="any" autocomplete="off" required>
                                        <span class="input-group-text">{{ __('USD') }}</span>
                                    </div>
                                </div>
                                <div class="preview-details d-none mt-3">
                                    <ul class="list-group">
                                        <li class="list-group-item d-flex justify-content-between">
                                            <span>@lang('Limit')</span>
                                            <span><span class="min fw-bold">0</span> {{ __('USD') }} - <span
                                                    class="max fw-bold">0</span> {{ __('USD') }}</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between">
                                            <span>@lang('Charge')</span>
                                            <span><span class="charge fw-bold">0</span> {{ __('USD') }}</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between">
                                            <span>@lang('Payable')</span> <span><span class="payable fw-bold"> 0</span>
                                                {{ __('USD') }}</span>
                                        </li>
                                        <li class="list-group-item justify-content-between d-none rate-element">

                                        </li>
                                        <li class="list-group-item justify-content-between d-none in-site-cur">
                                            <span>@lang('In') <span class="method_currency"></span></span>
                                            <span class="final_amo fw-bold">0</span>
                                        </li>
                                        <li class="list-group-item justify-content-center crypto_currency d-none">
                                            <span>@lang('Conversion with') <span class="method_currency"></span>
                                                @lang('and final value will Show on next step')</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-sm-12">
                                    <button type="submit"
                                        class="cmn--btn bg--primary submit-btn w-100 border-0">{{ __('Submit') }}</button>

                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')

    <script type="text/javascript">
        (function($) {
            "use strict";
            $('select[name=method]').change(function() {
                if (!$('select[name=method]').val()) {
                    $('.preview-details').addClass('d-none');
                    return false;
                }
                var resource = $('select[name=method] option:selected').data('gateway');
                var max_amount = parseFloat(resource.max_amount);
                var min_amount = parseFloat(resource.min_amount);
                var fixed_charge = parseFloat(resource.fixed_charge);
                var percent_charge = parseFloat(resource.percent_charge);
                var rate = parseFloat(resource.rate)
                if (resource.method.crypto == 1) {
                    var toFixedDigit = 8;
                    $('.crypto_currency').removeClass('d-none');
                } else {
                    var toFixedDigit = 2;
                    $('.crypto_currency').addClass('d-none');
                }
                $('.min').text(parseFloat(resource.min_amount).toFixed(2));
                $('.max').text(parseFloat(resource.max_amount).toFixed(2));
                var amount = parseFloat($('input[name=amount]').val());
                if (!amount) {
                    amount = 0;
                }
                if (amount <= 0) {
                    $('.preview-details').addClass('d-none');
                    return false;
                }
                if (amount < min_amount || amount > max_amount) {
                    $('.submitBtn').prop('disabled', true);
                    $('.limit-error').text(`@lang('Deposit amount crossed gateway limit')`)
                } else {
                    $('.submitBtn').prop('disabled', false);
                    $('.limit-error').text('')
                }
                $('.preview-details').removeClass('d-none');
                var charge = parseFloat(fixed_charge + (amount * percent_charge / 100)).toFixed(2);
                $('.charge').text(charge);
                var payable = parseFloat((parseFloat(amount) + parseFloat(charge))).toFixed(2);
                $('.payable').text(payable);
                var final_amo = (parseFloat((parseFloat(amount) + parseFloat(charge))) * rate).toFixed(
                    toFixedDigit);
                $('.final_amo').text(final_amo);
                if (resource.currency != 'USD') {
                    var rateElement =
                        `<span class="fw-bold">@lang('Conversion Rate')</span> <span><span  class="fw-bold">1 {{ __('USD') }} = <span class="rate">${rate}</span>  <span class="method_currency">${resource.currency}</span></span></span>`;
                    $('.rate-element').html(rateElement)
                    $('.rate-element').removeClass('d-none');
                    $('.in-site-cur').removeClass('d-none');
                    $('.rate-element').addClass('d-flex');
                    $('.in-site-cur').addClass('d-flex');
                } else {
                    $('.rate-element').html('')
                    $('.rate-element').addClass('d-none');
                    $('.in-site-cur').addClass('d-none');
                    $('.rate-element').removeClass('d-flex');
                    $('.in-site-cur').removeClass('d-flex');
                }
                $('.method_currency').text(resource.currency);
                $('input[name=currency]').val(resource.currency);
                $('input[name=method_code]').val(resource.method_code);
                $('input[name=amount]').on('input');
            });
            $('input[name=amount]').on('input', function() {
                $('select[name=method]').change();
                $('.amount').text(parseFloat($(this).val()).toFixed(2));
            });
        })(jQuery);
    </script>
@endpush

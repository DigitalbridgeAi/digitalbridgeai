@extends('user.layout.app')

@section('title')
    @lang('Deposit History')
@endsection
@push('css')
@endpush

@section('content')
    <div class="breadcrumb-area">
        <h3 class="title">@lang('Deposit History')</h3>
        <ul class="breadcrumb">
            <li>
                <a href="{{ route('user.deposit.index') }}">@lang('Deposit')</a>
            </li>
            <li>
                @lang('Deposit History')
            </li>
        </ul>
    </div>

    <div class="dashboard--content-item">
        <div class="mb-4">
            <div class="d-flex justify-content-end">
                <span>
                    <a href="{{ route('user.deposit.create') }}" class="btn btn--base btn--smd">
                        @lang('Deposit Now')
                    </a>
                </span>
            </div>
        </div>
        <div class="accordion table--acordion" id="transactionAccordion">


            @forelse($deposits as $deposit)
                <div class="accordion-item transaction-item">
                    <h2 class="accordion-header" id="h-{{ $loop->iteration }}">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#c-{{ $loop->iteration }}" aria-expanded="false" aria-controls="c-1">
                            <div class="col-lg-4 col-sm-5 col-8 order-1 icon-wrapper">
                                <div class="left">
                                    @if ($deposit->status == 1)
                                        <div class="icon icon-success">
                                            <i class="las la-check"></i>
                                        </div>
                                    @elseif($deposit->status == 2)
                                        <div class="icon icon-warning">
                                            <i class="las la-spinner fa-spin"></i>
                                        </div>
                                    @elseif($deposit->status == 3)
                                        <div class="icon icon-danger">
                                            <i class="las la-ban"></i>
                                        </div>
                                    @endif
                                    <div class="content">
                                        <h6 class="trans-title">{{ __($deposit->gateway?->name) }}</h6>
                                        <span
                                            class="text-muted font-size--14px mt-2">{{ showDateTime($deposit->created_at, 'M d Y @g:i:a') }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-4 col-12 order-sm-2 order-3 content-wrapper mt-sm-0 mt-3">
                                <p class="text-muted font-size--14px"><b>#{{ $deposit->trx }}</b></p>
                            </div>
                            <div class="col-lg-4 col-sm-3 col-4 order-sm-3 order-2 text-end amount-wrapper">
                                <p><b>{{ showAmount($deposit->amount) }} {{ __('USD') }}</b></p>

                            </div>
                        </button>
                    </h2>
                    <div id="c-{{ $loop->iteration }}" class="accordion-collapse collapse" aria-labelledby="h-1"
                        data-bs-parent="#transactionAccordion">
                        <div class="accordion-body">
                            <ul class="caption-list">
                                <li>
                                    <span class="caption">@lang('Charge')</span>
                                    <span class="value">{{ showAmount($deposit->charge) }}
                                        {{ __('USD') }}</span>
                                </li>
                                <li>
                                    <span class="caption">@lang('With Charge')</span>
                                    <span class="value">{{ showAmount($deposit->amount + $deposit->charge) }}
                                        {{ __('USD') }}</span>
                                </li>
                                <li>
                                    <span class="caption">@lang('Conversion')</span>
                                    <span class="value">{{ showAmount($deposit->amount + $deposit->charge) }}
                                        {{ __('USD') }} x {{ showAmount($deposit->rate) }}
                                        {{ __($deposit->method_currency) }} = {{ showAmount($deposit->final_amo) }}
                                        {{ __($deposit->method_currency) }}</span>
                                </li>
                                <li>
                                    @php
                                        $details = $deposit->detail != null ? json_encode($deposit->detail) : null;
                                    @endphp
                                    <span class="caption">@lang('Status')</span>
                                    <span class="value">
                                        @php echo $deposit->statusBadge @endphp @if ($deposit->method_code >= 1000)
                                            <button type="button" class="btn p-0 detailBtn"
                                                data-info="{{ $details }}"
                                                @if ($deposit->status == 3) data-admin_feedback="{{ $deposit->admin_feedback }}" @endif><i
                                                    class="las la-info-circle"></i></button>
                                        @endif
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div><!-- transaction-item end -->
            @empty
                <div class="accordion-body text-center">
                    <h4 class="text--muted"><i class="far fa-frown"></i> {{ __('No Deposit Made') }}</h4>
                </div>
            @endforelse
            {{-- {{ $deposits->links() }} --}}
        </div>
    </div>
@endsection

@push('js')
    <script>
        (function($) {
            "use strict";
            $('.detailBtn').on('click', function() {
                var modal = $('#detailModal');

                var userData = $(this).data('info');
                var html = '';
                if (userData) {
                    userData.forEach(element => {
                        if (element.type != 'file') {
                            html += `
                      <li class="list-group-item d-flex justify-content-between align-items-center">
                          <span>${element.name}</span>
                          <span">${element.value}</span>
                      </li>`;
                        }
                    });
                }

                modal.find('.userData').html(html);

                if ($(this).data('admin_feedback') != undefined) {
                    var adminFeedback = `
                  <div class="my-3">
                      <strong>@lang('Admin Feedback')</strong>
                      <p>${$(this).data('admin_feedback')}</p>
                  </div>
              `;
                } else {
                    var adminFeedback = '';
                }

                modal.find('.feedback').html(adminFeedback);


                modal.modal('show');
            });
        })(jQuery);
    </script>
@endpush

@extends('user.layout.auth')

@section('title')
    Login
@endsection


@section('content')
    <!-- Overlayer -->
    <span class="toTopBtn">
        <i class="fas fa-angle-up"></i>
    </span>
    <div class="overlayer"></div>
    <div class="loader"></div>
    <div class="particle"></div>
    <div class="particle2"></div>
    <div class="particle3"></div>
    <div class="particle4"></div>
    <!-- Overlayer -->

      <!-- Account Section -->
      <section class="accounts-section" style="display:block">
        <div class="accounts-inner">
            <div class="accounts-inner__wrapper bg--section">
                <div class="accounts-left">
                    <div class="accounts-left-content">
                        <a href="{{ url('/') }}">
                            {{-- <img src="{{asset('assets/images/'.$gs->logo)}}" alt="logo" /> --}}
                        </a>
                        <div class="section-header">
                            <h6 class="section-header__subtitle"></h6>
                            <h3 class="section-header__title">@lang('Welcome Back')</h3>
                            <p>
                                {{-- {{ optional($ps)->login_title }} --}}
                                Sign in to continue to your account.
                        
                            </p>
                        </div>
                        <form class="row gy-4" id="loginform" action="{{ route('user.login.submit') }}" method="POST">
                            @includeIf('user.layout.form-both')
                            @csrf
                            <div class="col-sm-12">
                                <label for="username" class="form-label">@lang('Your Email')</label>
                                <input type="email" name="email" id="username" class="form-control" value="{{ old('email') }}">
                            </div>
                            <div class="col-sm-12">
                                <label for="password" class="form-label">@lang('Your Password')</label>
                                <input type="password" name="password" id="password" class="form-control">
                            </div>
                            <div class="col-12 mt-2">
                                <div class="d-flex flex-wrap justify-content-between">
                                    <div class="form-check">
                                        <input type="checkbox" name="remember" id="remember" class="form-check-input"
                                            checked>
                                        <label for="remember" class="form-check-label">@lang('Remember Me')</label>
                                    </div>
                                    {{-- <a href="{{route('user.forgot')}}" class="text--base">@lang('Forget Password')</a> --}}
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <button class="cmn--btn">@lang('Sign In')</button>
                            </div>
                            <div class="col-sm-12">
                                @lang('Not Registered Yet ?') <a href="{{route('user.register')}}" class="text--base">@lang('Create an
                                    Account')</a>
                            </div>
                        </form>
                    </div>
                </div>
                {{--
                <div class="accounts-right bg--blue">
                    <img src="{{ asset('assets/images/' . optional($ps)->login_banner) }}" alt="images">
                    <div class="section-header text-center text-white mb-0">
                        <h6 class="section-header__subtitle"></h6>
                        <h3 class="section-header__title">{{ optional($ps)->login_title }}</h3>
                        <p>
                            @php
                                echo optional($ps)->login_subtitle;
                            @endphp
                        </p>
                    </div>
                </div>
                --}}
            </div>
        </div>
    </section>
    <!-- Accounts Section -->
@endsection

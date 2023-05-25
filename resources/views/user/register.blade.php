@extends('user.layout.auth')

@section('title')
    Register
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
                <div class="accounts-left" style="width: auto;">
                    <div class="accounts-left-content mw-100">
                        <a href="{{ url('/') }}">
                            {{-- <img src="{{asset('assets/images/'.$gs->logo)}}" alt="logo" /> --}}
                        </a>
                        <div class="section-header">
                            <h6 class="section-header__subtitle"></h6>
                            <h3 class="section-header__title">@lang('Create an account')</h3>
                            <p>
                                @lang('Change your lifestyle signing up here. Invest and easily earn money for much better life')
                            </p>
                        </div>
                        <form id="registerform" class="row gy-3" action="{{ route('user.register.submit') }}" method="POST">
                            {{-- @includeIf('includes.user.form-both') --}}
                            @includeIf('user.layout.form-both')
                            @csrf
                            <div class="col-lg-6 col-lg-12 col-xl-6">
                                <label for="name" class="form-label">@lang('Your Name')</label>
                                <input type="text" name="name" id="name" class="form-control"
                                    value={{ old('name') }}>
                            </div>

                            <div class="col-lg-6 col-lg-12 col-xl-6">
                                <label for="email" class="form-label">@lang('Your Email')</label>
                                <input type="email" name="email" id="email" class="form-control"
                                    value={{ old('email') }}>
                            </div>

                            <div class="col-lg-6 col-lg-12 col-xl-6">
                                <label for="username" class="form-label">@lang('User Name')</label>
                                <input type="text" name="username" id="username" class="form-control"
                                    value={{ old('username') }}>
                            </div>

                            <div class="col-lg-6 col-lg-12 col-xl-6">
                                <label for="phone" class="form-label">@lang('Your Phone')</label>
                                <div class="input-group">
                                    <label class="input-group-text m-0 form-label" for="phone"></label>
                                    <input type="text" name="phone" id="phone" class="form-control"
                                        value={{ old('phone') }}>
                                </div>
                            </div>

                            <div class="col-lg-6 col-lg-12 col-xl-6">
                                <label for="password" class="form-label">@lang('Your Password')</label>
                                <input type="password" name="password" id="password" class="form-control">
                            </div>

                            <div class="col-lg-6 col-lg-12 col-xl-6">
                                <label for="confirm-password" class="form-label">@lang('Confirm Password')</label>
                                <input type="password" name="password_confirmation" id="confirm-password"
                                    class="form-control">
                            </div>

                            <div class="col-12 mt-2">
                                <div class="d-flex flex-wrap justify-content-between">
                                    <div class="form-check">
                                        <input type="checkbox" name="remember" id="remember" class="form-check-input"
                                            checked>
                                        <label for="remember" class="form-check-label">@lang('I accept all') <a href="#0"
                                                class="text--base">@lang('Terms & Condition')</a></label>
                                    </div>
                                    {{-- <a href="{{ route('user.forgot') }}" class="text--base">@lang('Forget Password')</a> --}}
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <button type="submit" class="cmn--btn">@lang('Sign Up')</button>
                            </div>
                            <div class="col-sm-12">
                                @lang('Already Registered ?') <a href="{{ route('user.login') }}"
                                    class="text--base">@lang('Sign In')</a>
                            </div>
                        </form>
                    </div>
                </div>
                {{--
                    <div class="accounts-right bg--blue">
                        <img src="{{asset('assets/images/'.optional($ps)->login_banner)}}" alt="images">
                        <div class="section-header text-center text-white mb-0">
                            <h6 class="section-header__subtitle"></h6>
                            <h3 class="section-header__title">{{ optional($ps)->login_title}}</h3>
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

    <script>
        let mainurl = '{{url('/') }}';
        </script>
@endsection

<!DOCTYPE html>
<html lang="en">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    @include('backend.partials.css')
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <head>
        <title>Login</title>
    </head>
    <body>
        <div id="preloader">
            <div class="loader"></div>
        </div>
        <div class="login-area login-s2">
            <div class="container">
                <div class="login-box ptb--100">
                    @include('backend.partials.form-errors')
                    <form method="POST" action="{{ route('admin.login.post') }}" class="authenticationForm">
                        <div class="login-form-head">
                            <h4>Sign In</h4>
                            <p></p>
                        </div>
                        @csrf
                        <div class="login-form-body">
                            <div class="form-gp">
                            <label for="email">Email Address</label>
                            <input type="text" id="email" name="email" required autofocus />
                            <i class="ti-email"></i>
                            <div class="text-danger"></div>
                        </div>

                        <div class="form-gp">
                            <label for="password">Password</label>
                            <input type="password" id="password" name="password" required autocomplete="current-password"/>
                            <i class="ti-lock"></i>
                            <div class="text-danger"></div>
                        </div>

                        <div class="row mb-4 rmber-area">
                            <div class="col-6">
                                <div class="custom-control custom-checkbox mr-sm-2">
                                    <input type="checkbox" class="custom-control-input" id="remember_me" name="remember">
                                    <label class="custom-control-label" for="remember_me">Remember Me</label>
                                </div>
                            </div>
                            <div class="col-6 text-right">
                                <!-- <a href="#">Forgot Password?</a> -->
                            </div>
                        </div>

                        <div class="submit-btn-area">
                            <button id="form_submit" type="submit"> {{ __('Login') }}<i class="ti-arrow-right"></i></button>
                        </div>
                    </form>

                </div>
            </div>
        </div>

        @include('backend.partials.js')
        @stack('scripts')

    </body>
</html>


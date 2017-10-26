@include('layouts.header')


    <div id="breadcrumb-container">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li class="active">Login</li>
            </ul>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <header class="content-title">
                    <h1 class="title">Login or Create An Account</h1>
                    <div class="md-margin"></div><!-- space -->
                </header>

                <div class="row">

                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <h2>New Customer</h2>

                        <p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
                        <div class="md-margin"></div><!-- space -->
                        <a href="{{route('register')}}" class="btn btn-custom-2">Create An Account</a>
                        <div class="lg-margin"></div><!-- space -->
                    </div><!-- End .col-md-6 -->
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <h2>Registered Customers</h2>
                        <p>If you have an account with us, please log in.</p>
                        <div class="xs-margin"></div>

                        <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}

                            <div class="input-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <span class="input-group-addon"><span class="input-icon input-icon-email"></span><span class="input-text">Email&#42;</span></span>

                                <input id="email" type="email" class="form-control input-lg" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="input-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <span class="input-group-addon"><span class="input-icon input-icon-password"></span><span class="input-text">Password&#42;</span></span>

                                <input id="password" type="password" class="form-control input-lg" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group">
                                <span class="help-block text-right"><a href="{{ route('password.request') }}">Forgot your password?</a></span>
                                <button type="submit" class="btn btn-custom-2">LOGIN</button>
                            </div>
                        </form>

                        <div class="sm-margin"></div><!-- space -->
                    </div><!-- End .col-md-6 -->

                </div><!-- End.row -->

            </div><!-- End .col-md-12 -->
        </div><!-- End .row -->
    </div><!-- End .container -->



@include('layouts.footer')
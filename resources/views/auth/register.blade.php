@include('layouts.header')


    <div id="breadcrumb-container">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li class="active">Register Account</li>
            </ul>
        </div>
    </div>


<div class="container">
    <div class="row">
        <div class="col-md-12">
            <header class="content-title">
                <h1 class="title">Register Account</h1>
                <p class="title-desc">If you already have an account, please login at <a href="{{route('login')}}">login page</a>.</p>
            </header>
            <div class="xs-margin"></div><!-- space -->
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="input-group{{ $errors->has('fname') ? ' has-error' : '' }}">
                            <span class="input-group-addon"><span class="input-icon input-icon-user"></span><span class="input-text">First Name&#42;</span></span>

                                <input id="fname" type="text" class="form-control input-lg" name="fname" value="{{ old('fname') }}" required autofocus>

                                @if ($errors->has('fname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('fname') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="input-group{{ $errors->has('lname') ? ' has-error' : '' }}">
                            <span class="input-group-addon"><span class="input-icon input-icon-user"></span><span class="input-text">Last Name&#42;</span></span>

                                <input id="lname" type="text" class="form-control" name="lname" value="{{ old('lname') }}" required autofocus>

                                @if ($errors->has('lname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('lname') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="input-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <span class="input-group-addon"><span class="input-icon input-icon-email"></span><span class="input-text">Email&#42;</span></span>

                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="input-group{{ $errors->has('telephone') ? ' has-error' : '' }}">
                            <span class="input-group-addon"><span class="input-icon input-icon-phone"></span><span class="input-text">Telephone&#42;</span></span>

                                <input id="telephone" type="text" class="form-control" name="telephone" value="{{ old('telephone') }}" required>

                                @if ($errors->has('telephone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('telephone') }}</strong>
                                    </span>
                                @endif

                        </div>

                        <div class="input-group">
                            <span class="input-group-addon"><span class="input-icon input-icon-company"></span><span class="input-text">Company</span></span>

                                <input id="company" type="text" class="form-control" name="company" value="" >

                        </div>

                        <div class="input-group{{ $errors->has('adress') ? ' has-error' : '' }}">
                            <span class="input-group-addon"><span class="input-icon input-icon-address"></span><span class="input-text">Address&#42;</span></span>

                                <input id="adress" type="text" class="form-control" name="adress" value="{{ old('adress') }}" required>

                                @if ($errors->has('adress'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('adress') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="input-group{{ $errors->has('city') ? ' has-error' : '' }}">
                            <span class="input-group-addon"><span class="input-icon input-icon-city"></span><span class="input-text">City&#42;</span></span>

                                <input id="city" type="text" class="form-control" name="city" value="{{ old('city') }}" required>

                                @if ($errors->has('city'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('city') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="input-group{{ $errors->has('postcode') ? ' has-error' : '' }}">
                            <span class="input-group-addon"><span class="input-icon input-icon-postcode"></span><span class="input-text">Post Code&#42;</span></span>

                                <input id="postcode" type="text" class="form-control" name="postcode" value="{{ old('postcode') }}" required>

                                @if ($errors->has('postcode'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('postcode') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="input-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <span class="input-group-addon"><span class="input-icon input-icon-password"></span><span class="input-text">Password&#42;</span></span>

                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="input-group">
                            <span class="input-group-addon"><span class="input-icon input-icon-password"></span><span class="input-text">Confirm Password&#42;</span></span>

                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@include('layouts.footer')
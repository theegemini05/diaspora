@extends('layouts.app')

@section('content')
<div class="container" id="login" style="height: 420px;">
                    <center><img src="{{url('images/user.jpg')}}"></center><br><br>
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}" id="input">
                            <div class="col-md-6 name" >
                                <input style="border: 1px solid #222222;" id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Enter Email-Address" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}" id="input">
                            <div class="col-md-6 password">
                                <input style="border: 1px solid #222222;" id="password" type="password" class="form-control" name="password" placeholder="Enter Password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label style="padding-left: 40px;">
                                        <input type="checkbox" name="remember"> <strong>remember me</strong>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn" style="border: 2px solid #222222; background-color: #fed136; color: #222222; width: 160px;">
                                    <strong>login <i class="fa fa-sign-in"></i></strong>
                                </button><br>

                                <a class="btn btn-link" style="color: #222222; padding-left: 0px;" href="{{ url('/password/reset') }}">
                                    <strong>forgot your password?<strong>
                                </a>
                            </div>
                        </div>
                    </form>
</div>
@endsection
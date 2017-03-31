@extends('layouts.app')

@section('content')
<div class="container" id="login">
                    <center><img src="{{url('images/user.jpg')}}"></center>
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}" id="input">
                            <div class="col-md-6 name">
                                <input style="border: 1px solid #fed136;" id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Enter Your Name(s)" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}" id="input">
                            <div class="col-md-6 email">
                                <input style="border: 1px solid #fed136;" id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Enter Email-Address" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}" id="input">
                            <div class="col-md-6 password">
                                <input style="border: 1px solid #fed136;" id="password" type="password" class="form-control" name="password" placeholder="Enter Password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group" id="input">
                            <div class="col-md-6 password">
                                <input style="border: 1px solid #fed136;" id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Re-enter Password" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn" style="border: 2px solid #222222; background-color: #fed136; color: #222222; width: 160px;">
                                    register <i class="fa fa-user-plus"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
@endsection

@extends('layouts.layout')

@section('content')

<section id="hero-area" >
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div class="block  wow fadeInUp" data-wow-delay=".3s">

            <div class="panel panel-primary"">
                <div class="panel-heading"><center>Inicisar Sesion</center></div>
                <div class="panel-body alert-info" >
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                         {{csrf_field()}}

                        <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                            <label for="username" class="col-md-4 control-label " >Usuario</label>

                            <div class="col-md-6">
                                <input id="username" type="username" class="form-control" name="username" value="{{ old('username') }}" required autofocus>

                                @if ($errors->has('username'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label  ">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

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
                                    <label class="label label-info">
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Recordar Usuario
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-5">
                                <button type="submit" class="btn btn-primary">
                                    Inicisar Sesion
                                </button>


                            </div>
                        </div>
                    </form>
                </div>
            </div>
          </div>

        </div>
    </div>
</div>
</section>
@endsection

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Cambiar contraseña</div>
                <div class="panel-body">
                @if (Session::has('success'))
                    <div class="alert alert-success">{!! Session::get('success') !!}</div>
                @endif
                @if (Session::has('failure'))
                    <div class="alert alert-danger">{!! Session::get('failure') !!}</div>
                @endif
               <form class="form-horizontal" role="form" method="POST" action="/change-password">
                    
                    {{csrf_field()}}
 
                        <div class="form-group{{ $errors->has('old') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Contraseña actual</label>
 
                            <div class="col-md-6">
                                <input id="password" type="password" min="8" minlength="8" class="form-control" name="old">
 
                                @if ($errors->has('old'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('old') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
 
                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-4 control-label">Nueva contraseña</label>
 
                                <div class="col-md-6">
                                    <input id="password" type="password"  min="8" minlength="8"  class="form-control" name="password">
 
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
 
                            <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                <label for="password-confirm" class="col-md-4 control-label">Confirme contraseña</label>
 
                                <div class="col-md-6">
                                    <input id="password-confirm" min="8" minlength="8"  type="password" class="form-control" name="password_confirmation">
 
                                    @if ($errors->has('password_confirmation'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
 
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-primary form-control">Actualizar</button>
                                </div>
                        </div>
                </form>
                </div>
 
            </div>
        </div>
    </div>
</div>
@endsection
 
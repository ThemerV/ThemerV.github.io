@extends('layouts.app')

@section('section')
<main style="min-height: calc(105.1vh - 211px - 58px);">
    <div class="limiter">
		<div class="">
			<div class="container" style="width: 500px;">
				<form class="login100-form validate-form">
					@csrf
					<span class="login100-form-title p-b-49" style="color:red; padding-top: 130px;">
						Login
					</span>
                    <div class="border" style="border-radius: 25px; padding: 30px; width: auto;">
                        <div class="" data-validate = "Username is reauired">
                            <label for="username">CPF</label>
                            <input class="input100 border" type="text" name="username" style="border-radius: 200px; padding-left: 30; width: 400px;">
                            @if ($errors->has('email'))
                            <span class="focus-input100" data-symbol="&#xf206;">{{ $errors->first('email') }}</span>
                            @endif
                        </div>

                        <div class="" data-validate="Password is required">
                            <label for="pass">Senha</label>
                            <input class="input100 border" type="password" name="pass" style="border-radius: 200px; padding-left: 30; width: 400px;">
                            @if ($errors->has('password'))
                            <span class="focus-input100" data-symbol="&#xf190;">{{ $errors->first('password') }}</span>
                            @endif
                        </div>
                        
                        <div class="text-right p-t-8 p-b-31 text-center" style="padding: auto;">
                            <a href="#">
                                Solução para problemas no acesso
                            </a>
                        </div>
                        
                        <div class="container-login100-form-btn">
                            <div class="wrap-login100-form-btn">
                                <button class="login100-form-btn" style="color: white; background-color: red;">
                                    Login
                                </button>
                            </div>
                        </div>
                    </div>
				</form>
			</div>
		</div>
	</div>
</main>

	<div id="dropDownSelect1"></div>
    <!-- <main style="min-height: calc(105.1vh - 211px - 58px);">
        <div class="parent-div" style="display: flex; justify-content: center; align-items: center;">
            <div class="row justify-content-center" style="margin: auto;">
                <div class="col-md-4" style="margin: auto;">
                    <div class="card">
                        <h3 class="card-header text-center">Login</h3>
                        <div class="card-body">
                            <form method="POST" action="{{ route('login.custom') }}">
                                @csrf
                                <div class="form-group mb-3">
                                    <input type="text" placeholder="Email" id="email" class="form-control" name="email" required
                                        autofocus>
                                    @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                                <div class="form-group mb-3">
                                    <input type="password" placeholder="Password" id="password" class="form-control" name="password" required>
                                    @if ($errors->has('password'))
                                    <span class="text-danger">{{ $errors->first('password') }}</span>
                                    @endif
                                </div>
                                <div class="d-grid mx-auto">
                                    <button type="submit" class="btn btn-dark btn-block">Signin</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main> -->
    <!-- <nav class="navbar navbar-expand-lg" style="background-color:firebrick ;">
        <div class="container-fluid">
            <h1 class="navbar-brand">Fatec Campinas</h1>
        </div>
    </nav> -->
    <!-- <main class="login-form" style="display: flex; justify-content: center; align-items: center;">
        <div class="parent-div" style="display: flex; justify-content: center; align-items: center;">
            <div class="row justify-content-center" style="margin: auto;">
                <div class="col-md-4" style="margin: auto;">
                    <div class="card">
                        <h3 class="card-header text-center">Login</h3>
                        <div class="card-body">
                            <form method="POST" action="{{ route('login.custom') }}">
                                @csrf
                                <div class="form-group mb-3">
                                    <input type="text" placeholder="Email" id="email" class="form-control" name="email" required
                                        autofocus>
                                    @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                                <div class="form-group mb-3">
                                    <input type="password" placeholder="Password" id="password" class="form-control" name="password" required>
                                    @if ($errors->has('password'))
                                    <span class="text-danger">{{ $errors->first('password') }}</span>
                                    @endif
                                </div>
                                <div class="d-grid mx-auto">
                                    <button type="submit" class="btn btn-dark btn-block">Signin</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main> -->
@endsection
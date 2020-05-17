@extends('layouts.app')
<link href="{{ asset('/css/login.css') }}" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">


@section('content')

<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">           
            <h3> Ngaji Online</h3>		
			</div>
			<div class="card-body">
                <form method="POST" action="{{ route('login') }}">
                    @csrf        
					<div class="input-group form-group">                        
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fa fa-user text-light mx-auto"></i></span>
						</div>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                             @enderror
						
                    </div>
                    
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fa fa-key text-light mx-auto"></i></span>
						</div>
						<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                    
					<div class="form-group ">
                        {{-- <div class="col-md-6 offset-md-4"> --}}
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label text-light" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        {{-- </div> --}}
                    </div>
					<div class="form-group center">
                        <button type="submit" class="btn login_btn ">
                            {{ __('Login') }}
                        </button>                               
                    </div>
				</form>
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					Belum punya akun? Yuk<a href="register" class="text-success">Daftar</a>
				</div>
				<div class="d-flex justify-content-center">
					@if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Lupa Password?') }}
                        </a>
                    @endif
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
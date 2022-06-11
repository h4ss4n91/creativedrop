@extends('layouts.frontend')
@section('content')

<link rel="stylesheet" href="{{asset('login_css/style.css')}}">

<link rel="stylesheet" href="{{asset('login_css/style.css')}}">

<div style="background-color:#f5f5f5; padding-top:100px; padding-bottom:200px;" class="row">
    <div  class="web-container">
        
        <div class="row justify-content-center">
            <div class="col-md-12">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
<div class="container">
	<div class="screen">
		<div class="screen__content">
			
                <form class="login" method="POST" action="{{ route('login') }}">
                    @csrf
                
				<div class="login__field">
					<i class="login__icon fas fa-user"></i>
					<input type="text" class="login__input" placeholder="User Email">
                    <input id="email" type="email" class="login__input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
				</div>
				<div class="login__field">
					<i class="login__icon fas fa-lock"></i>
                    <input id="password" type="password" class="login__input @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
				</div>
				<button class="button login__submit">
					<span class="button__text">Log In Now</span>
					<i class="button__icon fas fa-chevron-right"></i>
				</button>				
			</form>
			
		</div>
		<div class="screen__background">
			<span class="screen__background__shape screen__background__shape4"></span>
			<span class="screen__background__shape screen__background__shape3"></span>		
			<span class="screen__background__shape screen__background__shape2"></span>
			<span class="screen__background__shape screen__background__shape1"></span>
		</div>		
	</div>
</div>

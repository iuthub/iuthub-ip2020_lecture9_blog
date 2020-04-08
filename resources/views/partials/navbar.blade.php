 <div class="nav">
	@if(!Auth::check())
	
	@if(Route::currentRouteName()!='register')
    <div class="navitem">
 		@error('email')
            <span class="invalid-feedback">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

		<input type="email" name="email" 
		form="loginForm" 
		placeholder="email" 
		value="{{ old('email') }}"
		style="width:150px" 
		required 
	/>
	</div>
	<div class="navitem">
		<input type="password" 
		name="password" 
		form="loginForm" 
		placeholder="Password"
		/>
	</div>
	<div class="navitem">
		<form id="loginForm" action="{{ route('login') }}" method="post">
			@csrf
			<input type="submit" value="Login" />
		</form>
	</div>
	

	<div class="navitem">
		<a href="{{route('register')}}" class="btn">Register</a>
	</div>
	@endif


	@else
	<div class="navitem navitem-left">
			Welcome {{ Auth::user()->name }}
	</div>
	
	<div class="navitem">
            <a href="{{ route('adminCreate')}}" class="btn">New Post</a>
    </div>

	<div class="navitem">
            <a href="{{ route('adminIndex')}}" class="btn">Edit Posts</a>
    </div>
	<div class="navitem">
		<form id="loginForm" action="{{ route('logout') }}" method="post">
			@csrf
			<input type="submit" value="Logout" />
		</form>
	</div>
	@endif

    <div class="navitem">
        <a href="{{ route('blogIndex') }}" class="btn">Blog</a>
    </div>
    <div class="navitem">
        <a href="{{ route('othersAbout') }}" class="btn">About</a>
    </div>
	


    
</div>
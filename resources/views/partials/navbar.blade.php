 <div class="nav">

	@if(!Auth::check())
		<div class="navitem">
			 @error('email')
	            <span class="invalid-feedback" role="alert">
	                <strong>{{ $message }}</strong>
	            </span>
	         @enderror
	    	 
	    	 <input 
	    	 id="email" 
	    	 form="loginForm"
	    	 placeholder="Email" 
	    	 type="email" 
	    	 name="email" 
	    	 value="{{ old('email') }}" 
	    	 required autocomplete="email" autofocus>

	            
	    </div>	

	    <div class="navitem">
	    	@error('password')
	            <span class="invalid-feedback" role="alert">
	                <strong>{{ $message }}</strong>
	            </span>
	        @enderror
	    	
	    	<input id="password" 
	    	type="password" 
	    	name="password" 
			form="loginForm"
			placeholder="Password" 
	    	required autocomplete="current-password">
	    </div>

		<div class="navitem">
			<form id="loginForm" method="POST" action="{{ route('login') }}">
				@csrf
				<input type="submit" value="Login"/>	
			</form>		
		</div>
		<div class="navitem">
			 <a href="{{ route('register') }}" class="btn">Register</a>
		</div>
	@else
		<div class="navitem">
                <a href="{{ route('adminCreate')}}" class="btn">New Post</a>
        </div>
        <div class="navitem">
                <a href="{{ route('adminIndex')}}" class="btn">Edit Posts</a>
        </div>
        <div class="navitem">
        	<form id="logoutForm" method="POST" action="{{ route('logout') }}">
				@csrf
				<input type="submit" value="Logout"/>	
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
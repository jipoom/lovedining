<html>
    <body>
        <h1>LoveDining</h1>
		<div class="container">
		@if(Auth::check())
           {{ HTML::link('/user/logout', 'logout')}}
           {{ HTML::link('/share/fb', 'share on FB!')}}
           {{ HTML::link('/share/tw', 'tweet!')}}
        @else
        	{{HTML::link('/user/login', 'login')}}  
        	{{HTML::link('/register', 'create account')}}  
        	{{HTML::link('/user/fb', 'login with facebook')}}  
        @endif
        	{{ HTML::link('/restaurants', 'ร้านอาหารทั้งหมด')}}
        @if(Session::has('message'))
            <p class="alert">{{ Session::get('message') }}</p>
        @endif
    	</div>
        @yield('content')
        
    </body>
</html>
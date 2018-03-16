@include('includes.element.header')
<body>
	<div class="maincontainer">
		<div class="secondarycontainer">
            <!-- Authentication Links -->
            @if (Auth::check())
            	@include('includes.creation.newcharactercreation5')
            @endif
            <a href="{{ route('logout') }}">Log Out</a>
		</div>
	</div>
@include('includes.element.footer')
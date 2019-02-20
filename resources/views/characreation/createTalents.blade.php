@include('includes.element.header')
@include('includes.element.menu')
@include('includes.element.sidebar')
	<div class="maincontainer">
		<div class="secondarycontainer">
            <!-- Authentication Links -->
            @if (Auth::check())
            	@include('characreation.creation.choosetalents')
            @endif
            <a href="{{ route('logout') }}">Log Out</a>
		</div>
	</div>
@include('includes.element.footer')
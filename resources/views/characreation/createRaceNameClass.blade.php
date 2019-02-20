@include('includes.element.header')
@include('includes.element.menu')
@include('includes.element.sidebar')
	<div class="maincontainer">
		<div class="secondarycontainer">
            <!-- Authentication Links -->
            @include('includes.auth.auth')
            @if (Auth::check())
            	@include('characreation.creation.newcharactercreation')
            @endif
		</div>
	</div>
@include('includes.element.footer')
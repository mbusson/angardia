@include('includes.element.header')
@include('includes.element.menu')
@include('includes.element.sidebar')
	<div class="maincontainer">
		<div class="secondarycontainer">
            <!-- Authentication Links -->
            @if (Auth::check())
            	@include('characreation.creation.preview')
            @endif
		</div>
	</div>
@include('includes.element.footer')

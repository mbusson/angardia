@include('includes.element.header')
@include('includes.element.menu')
@include('includes.element.sidebar')
	<div class="maincontainer">
		<div class="secondarycontainer">
            <!-- Authentication Links -->
            @if (Auth::check())
            	@include('characreation.creation.setstats')
            @endif
		</div>
	</div>
@include('includes.element.footer')
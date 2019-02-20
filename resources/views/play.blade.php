@include('includes.element.header')
@include('includes.element.menu')
@include('includes.element.sidebar')
<?php
	if (Auth::check()) {
		$userid = Auth::user()->id; 
	    $stat = \App\Character::where('owner', $userid)->first();
	}
?>
	<div class="maincontainer">
		<div class="secondarycontainer">
	      <!-- Authentication Links -->
	      @if (Auth::check() && $stat->validated == "y")
	      	@include('characreation.creation.preview')
	      @elseif (Auth::check())
	      	@include('characreation.creation.charactercreation')
	      @else
	      	@include('auth.login')
	      @endif
		</div>
	</div>
@include('includes.element.menu')
@include('includes.element.footer')
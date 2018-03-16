@include('includes.element.header')
<body>
	<div class="maincontainer">
		<div class="secondarycontainer">
            <!-- Authentication Links -->
            @include('includes.auth.auth')
            @if (Auth::check())
            	@include('includes.creation.charactercreation')
            	@include('includes.playview')
            @endif
		</div>
	</div>
@include('includes.element.footer')
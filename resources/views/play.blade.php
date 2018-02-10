@include('includes.header')
<body>
	<div class="maincontainer">
		<div class="secondarycontainer">
            <!-- Authentication Links -->
            @include('includes.auth.auth')
            @if (Auth::check())
            	@include('includes.charactercreation')
            	@include('includes.playview')
            @endif
		</div>
	</div>
</body>
@include('includes.footer')
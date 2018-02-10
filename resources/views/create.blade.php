@include('includes.header')
<body>
	<div class="maincontainer">
		<div class="secondarycontainer">
            <!-- Authentication Links -->
            @include('includes.auth.auth')
            @if (Auth::check())
            	@include('includes.newcharactercreation')
            @endif
		</div>
	</div>
</body>
@include('includes.footer')
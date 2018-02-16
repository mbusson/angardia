@include('includes.header')
<body>
	<div class="maincontainer">
		<div class="secondarycontainer">
            <!-- Authentication Links -->
            @if (Auth::check())
            	@include('includes.newcharactercreation3')
            @endif
		</div>
	</div>
</body>
@include('includes.footer')
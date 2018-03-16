@include('includes.element.header')
<body>
	<div class="maincontainer">
		<div class="secondarycontainer">
            <!-- Authentication Links -->
            @if (Auth::check())
            	@include('includes.creation.newcharactercreation6')
            @endif
		</div>
	</div>
@include('includes.element.footer')

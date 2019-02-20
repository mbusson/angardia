<div class="flexcont">
	<div class="flexbox" style="min-width:20%;">
		<h1>En Attente</h1>
        @include('admin.ajax.newprofile_ajax')
    </div>
	<div class="flexbox" id="mainAdminContentsView" style="min-width:70%;margin-right:16px;">
	    @include('admin.ajax.personnages_ajax')
	</div>
</div>
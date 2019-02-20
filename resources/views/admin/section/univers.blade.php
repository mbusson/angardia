<div class="flexcont">
    <div class="flexbox" style="min-width:7%;text-align:center;padding:4px;height:auto;">
      <?php
        $lexi = \App\Lexicon::orderBy('title')->get();
    ?>
        @include('admin.ajax.univmenu_ajax', $lexi)
    </div>
    <div class="flexbox" id="mainAdminContentsView" style="min-width:85%;">
        @include('admin.ajax.univ_ajax', $lexi)
    </div>
</div>
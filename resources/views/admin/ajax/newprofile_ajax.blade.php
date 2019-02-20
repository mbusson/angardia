<?php
$profileValidation = 'profile_validation';
?>
<div class="tableWrapper">
  <table class="newProfiles" cellspacing="0" cellpadding="0">
    <thead>
      <tr>
        <th id="headerNewProf" colspan="3">
          <form id="newprofiles" action="javascript:void(0);" class="floating">
            <select name="class" id="newprofsel">
              <option value="validate" selected="selected">Prêt à valider</option>
              <option value="pending">En cours d'écriture</option>
              <input type="submit" hidden value="Submit" />
            </select>
          </form>
        </th>
      </tr>
      <tr>
        <th align="left"><span>Nom</span></th>
        <th><span>Message</span></th>
        <th><span></span></th>
      </tr>
    </thead>
  </table>
  <span id="newprofilecontainer"></span>
</div>
<script>
  // Table autochanger
  $(document).ready(function() {
    // default
    var selectedOpt = $("#newprofsel").val();
    var route = "{{ route('admin.mod.prof_val') }} #" + selectedOpt;
    $('#newprofilecontainer').load(route);
    if (selectedOpt == 'validate') {
      $('#headerNewProf').css({"background-color":"#8dad66"})
    } else if (selectedOpt == 'pending') {
      $('#headerNewProf').css({"background-color":"#ce7867"})
    }
    // on change
    $("#newprofsel").change(function() {                
      var selectedsection = $("#newprofsel").val();
      var selectedroute = "{{ route('admin.mod.prof_val') }} #" + selectedsection;
      $('#newprofilecontainer').load(selectedroute);
      if (selectedsection == 'validate') {
        $('#headerNewProf').css({"background-color":"#8dad66"})
      } else if (selectedsection == 'pending') {
        $('#headerNewProf').css({"background-color":"#ce7867"})
      }
    });
  });
  // Entry edit
  function editNewCharTable(){
    // Summon new profile admin panel
    let route= "{{ route('admin.mod.profValUI') }}";
    $('tr.editNewChar').click(function(){
      let id = $(this).attr('id'),
          profileObject = {'id': id};
      $('#mainAdminContentsView').load(route, profileObject);
    }); 
  }
  $(document).ready(editNewCharTable);
  $(document).ajaxComplete(editNewCharTable);
</script>
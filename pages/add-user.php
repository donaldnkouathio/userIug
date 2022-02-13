<div class="modal_shadow add_modal">
  <form class="modal_container">
    <div class="modal_body">
      <h1 class="margin_top_none">Add a new user</h1>

      <div class="form_block">
        <label for="name">Name</label>
        <input type="text" name="name" class="name" value="" required>

        <label for="surname">Surname</label>
        <input type="text" name="surname" class="surname" value="" required>

        <label for="password">Password</label>
        <input type="text" name="password" class="password" value="" required>

        <label for="etab">Etablissement</label>
        <input type="text" name="etab" class="etab" value="" required>

        <label for="email">Email</label>
        <input type="email" name="email" class="email" value="" required>
      </div>
    </div>
    <div class="modal_footer">
      <button type="submit" class="btn btn_primary margin_left" name="addBtn">Add</button>
      <button type="button" name="addBtn" class="btn add_modal_close_btn">Cancel</button>
    </div>
  </form>
</div>

<!-- Modal for Log out -->
<div class="modal_shadow lo_modal">
  <div class="modal_container_tinny">
    <div class="modal_body_tinny">
      <h1 class="margin_top_none">Log out </h1>

      <span>Are you sure to close your session ?</span>

    </div>
    <div class="modal_footer_tinny">
      <button type="button" class="btn btn_danger margin_left" name="lo_btn">Log out</button>
      <button type="button" name="loBtn" class="btn lo_modal_close_btn">Cancel</button>
    </div>
  </div>
</div>


<script type="text/javascript">
  $(document).ready(function(){

    //Show or hide modal
   function toggleModal(modal, modal_btn, modal_btn_close){
     let modal_container= $(".modal_container, .modal_container_tinny");
     modal_container.click(function(ev){
       ev.stopPropagation();
     });
     modal_btn.click(function(){
       modal.css("display", "flex");
       modal_container.removeClass("scale_in");
       modal_container.addClass("scale_out");
     });
     modal_btn_close.click(function(){
       modal_container.removeClass("scale_out");
       modal_container.addClass("scale_in");
       setTimeout(function(){
         modal.fadeOut();
       }, 100);
     });
    }

    toggleModal($(".add_modal"), $(".add_user_btn"), $(".add_modal_close_btn, .add_modal"));

    //Log out
    toggleModal($(".lo_modal"), $(".lo_btn"), $(".lo_modal_close_btn, .lo_modal"));

  });
</script>

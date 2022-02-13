<div class="section">
  <h1 class="margin_top_none">List of Users</h1>

  <div class="item_container">
    <div class="item_contain">
      <?php
        for($i=1; $i<11; $i++){
      ?>
      <div class="item_block">
        <div class="row">
          <span class="col">User No <?php echo $i ?></span>
        </div>
        <div class="row">
          <span class="col_title">Nkouathio</span>
          <span class="col_title">Donald</span>
        </div>
        <div class="row">
          <span class="col">Donaldnkouathio@gmail.com</span>
        </div>
        <div class="bottom_row">
          <span class="col edit_btn edit_btn<?php echo $i; ?>">Edit</span>
          <span class="col del_btn del_btn<?php echo $i; ?>">Delete</span>
        </div>
      </div>
      <?php } ?>
    </div>
  </div>
</div>

<?php
  for($i=1; $i<11; $i++){
?>
  <div class="modal_shadow edit_modal<?php echo $i; ?>">
    <form class="modal_container">
      <div class="modal_body">
        <h1 class="margin_top_none">Edit user No <?php echo $i; ?></h1>

        <div class="form_block">
          <label for="name<?php echo $i; ?>">Name</label>
          <input type="text" name="name<?php echo $i; ?>" class="name" value="" required>

          <label for="surname<?php echo $i; ?>">Surname</label>
          <input type="text" name="surname<?php echo $i; ?>" class="surname" value="" required>

          <label for="etab<?php echo $i; ?>">Etablissement</label>
          <input type="text" name="etab<?php echo $i; ?>" class="etab" value="" required>

          <label for="email<?php echo $i; ?>">Email</label>
          <input type="email" name="email<?php echo $i; ?>" class="email" value="" required>
        </div>
      </div>
      <div class="modal_footer">
        <button type="submit" class="btn btn_primary margin_left" name="edit_btn<?php echo $i; ?>">Add</button>
        <button type="button" name="addBtn" class="btn edit_modal_close_btn<?php echo $i; ?>">Cancel</button>
      </div>
    </form>
  </div>
<?php } ?>



<?php //Delete
  for($i=1; $i<11; $i++){
?>
  <div class="modal_shadow delete_modal<?php echo $i; ?>">
    <form class="modal_container_tinny">
      <div class="modal_body_tinny">
        <h1 class="margin_top_none">Delete user No <?php echo $i; ?></h1>

        <span>Are you sure to delete this user ?</span>

        <input type="hidden" name="id" value="<?php echo $i; ?>">
      </div>
      <div class="modal_footer_tinny">
        <button type="submit" class="btn btn_danger margin_left" name="delete_btn<?php echo $i; ?>">Delete</button>
        <button type="button" name="delBtn" class="btn delete_modal_close_btn<?php echo $i; ?>">Cancel</button>
      </div>
    </form>
  </div>
<?php } ?>

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

    <?php
      for($i=1; $i<11; $i++){
    ?>
    //Edit
    toggleModal($(".edit_modal<?php echo $i; ?>"), $(".edit_btn<?php echo $i; ?>"), $(".edit_modal_close_btn<?php echo $i; ?>, .edit_modal<?php echo $i; ?>"));

    //Delete
    toggleModal($(".delete_modal<?php echo $i; ?>"), $(".del_btn<?php echo $i; ?>"), $(".delete_modal_close_btn<?php echo $i; ?>, .delete_modal<?php echo $i; ?>"));
    <?php } ?>
  });
</script>

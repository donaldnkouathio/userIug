<?php
  $users= $user->getUsers();
?>

<div class="section">
  <span>Welcome <b><?php echo $_SESSION["name"].' '.$_SESSION["surname"]; ?></b></span>

  <h2 class="">List of Users</h2>

  <div class="item_container">
    <div class="item_contain">
      <?php
        foreach($users as $user){
      ?>
      <div class="item_block">
        <div class="row">
          <span class="col">User No <?php echo $user->getId(); ?></span>
        </div>
        <div class="row">
          <span class="col_title"><?php echo $user->getName(); ?></span>
          <span class="col_title"><?php echo $user->getSurname(); ?></span>
        </div>
        <div class="row">
          <span class="col"><?php echo $user->getEtab(); ?></span>
        </div>
        <div class="row">
          <span class="col"><?php echo $user->getEmail(); ?></span>
        </div>
        <div class="bottom_row">
          <span class="col edit_btn edit_btn<?php echo $user->getId(); ?>">Edit</span>
          <span class="col del_btn del_btn<?php echo $user->getId(); ?>">Delete</span>
        </div>
      </div>
      <?php } ?>
    </div>
  </div>
</div>

<?php
  foreach($users as $user){
?>
  <div class="modal_shadow edit_modal<?php echo $user->getId(); ?>">
    <form class="modal_container" id="edit_form<?php echo $user->getId(); ?>">
      <div class="modal_body">
        <h1 class="margin_top_none">Edit user No <?php echo $user->getId(); ?></h1>

        <div class="form_block">
          <label for="name">Name</label>
          <input type="text" name="name" class="name" value="<?php echo $user->getName(); ?>" required>

          <label for="surname">Surname</label>
          <input type="text" name="surname" class="surname" value="<?php echo $user->getSurname(); ?>" required>

          <label for="etab">Etablissement</label>
          <input type="text" name="etab" class="etab" value="<?php echo $user->getEtab(); ?>" required>

          <label for="email">Email</label>
          <input type="email" name="email" class="email" value="<?php echo $user->getEmail(); ?>" required>
        </div>

        <input type="hidden" name="id" value="<?php echo $user->getId(); ?>">
      </div>
      <div class="modal_footer">
        <button type="submit" class="btn btn_primary margin_left" name="edit_btn<?php echo $user->getId(); ?>">Edit</button>
        <button type="button" name="addBtn" class="btn edit_modal_close_btn<?php echo $user->getId(); ?>">Cancel</button>
      </div>
    </form>
  </div>
<?php } ?>



<?php //Delete
  foreach($users as $user){
?>
  <div class="modal_shadow delete_modal<?php echo $user->getId(); ?>">
    <form class="modal_container_tinny"  id="del_form<?php echo $user->getId(); ?>">
      <div class="modal_body_tinny">
        <h2 class="margin_top_none">Delete user No <?php echo $user->getId(); ?></h2>

        <span>Are you sure to delete this user ?</span>

        <input type="hidden" name="id" value="<?php echo $user->getId(); ?>">
      </div>
      <div class="modal_footer_tinny">
        <button type="submit" class="btn btn_danger margin_left" name="delete_btn<?php echo $user->getId(); ?>">Delete</button>
        <button type="button" name="delBtn" class="btn delete_modal_close_btn<?php echo $user->getId(); ?>">Cancel</button>
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
      foreach($users as $user){
    ?>
    //Edit
    toggleModal($(".edit_modal<?php echo $user->getId(); ?>"), $(".edit_btn<?php echo $user->getId(); ?>"), $(".edit_modal_close_btn<?php echo $user->getId(); ?>, .edit_modal<?php echo $user->getId(); ?>"));

    $('#edit_form<?php echo $user->getId(); ?>').submit(function(ev){
      ev.preventDefault();
      var formData = new FormData($('#edit_form<?php echo $user->getId(); ?>')[0]);

      $.ajax({
        url: "<?php echo _HTML_TRAITMENTS_PATH.'edit-user.php'; ?>",
        type: "POST",
        data: formData,
        beforeSend: function(){
          //$('.add_btn').append('<button type="button" class="btn btn_primary margin_left" name="">Adding...</button>');
          //$('.add_btn').prop("disabled", true);
        },
        success: function(ret){
          alert("User edited successfully ! ");
          window.location.reload();
        },
        cache: false,
        contentType: false,
        processData: false
      });
    });

    //Delete
    toggleModal($(".delete_modal<?php echo $user->getId(); ?>"), $(".del_btn<?php echo $user->getId(); ?>"), $(".delete_modal_close_btn<?php echo $user->getId(); ?>, .delete_modal<?php echo $user->getId(); ?>"));

    $('#del_form<?php echo $user->getId(); ?>').submit(function(ev){
      ev.preventDefault();
      var formData = new FormData($('#del_form<?php echo $user->getId(); ?>')[0]);

      $.ajax({
        url: "<?php echo _HTML_TRAITMENTS_PATH.'del-user.php'; ?>",
        type: "POST",
        data: formData,
        beforeSend: function(){
          //$('.add_btn').append('<button type="button" class="btn btn_primary margin_left" name="">Adding...</button>');
          //$('.add_btn').prop("disabled", true);
        },
        success: function(ret){
          alert("User deleted successfully ! ");
          window.location.reload();
        },
        cache: false,
        contentType: false,
        processData: false
      });
    });

    <?php } ?>
  });
</script>

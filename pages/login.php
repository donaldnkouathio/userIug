<div class="section">
  <h1 class="margin_top_none">Log In</h1>

  <div class="login_container">
    <h2 class="margin_top_none">
      Connect you before consult the list of users
    </h2>

    <form class="form_block" id="log_in">
      <label for="email">Email</label>
      <input type="email" name="email" id="email" value="" required>

      <label for="password">Password</label>
      <input type="password" name="password" id="password" value="" required>

      <button type="submit" name="button">Log in</button>
    </form>
  </div>
</div>


<script type="text/javascript">
  $(document).ready(function(){

    //Add user
    $('#log_in').submit(function(ev){
      ev.preventDefault();
      var formData = new FormData($('#log_in')[0]);

      $.ajax({
        url: "<?php echo _HTML_TRAITMENTS_PATH.'login.php'; ?>",
        type: "POST",
        data: formData,
        beforeSend: function(){
          //$('.add_btn').append('<button type="button" class="btn btn_primary margin_left" name="">Adding...</button>');
          //$('.add_btn').prop("disabled", true);
        },
        success: function(ret){
          if(ret=="ok"){
            window.location.reload();
          }else {
            alert(ret);
          }
        },
        cache: false,
        contentType: false,
        processData: false
      });
    });

  });
</script>

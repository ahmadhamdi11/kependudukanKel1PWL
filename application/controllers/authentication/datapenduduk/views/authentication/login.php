<html>
  <head>
    <title>Form Login</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/customStyle.css">
  </head>
  <body>
  <div class="form-wrapper">
    <form method="post" action="<?php echo site_url('authentication/auth/login'); ?>" role="login">
      <?php
      //menampilkan error menggunakan alert javascript
        if(isset($error)){
        echo '<script>
        alert("'.$error.'");
        </script>';
        }
      ?>
      <center>
        <h3>SILAHKAN LOGIN</h3>
         <div class="form-item">
            <input type="text" name="username" placeholder="Masukan Username" size="30" required autofocus /></br></br>
         </div>

         <div class="form-item">
            <input type="password" name="password" placeholder="Masukan Password" size="30" required autofocus="" /></br></br>
         </div>
       
        <div class="button-panel">
            <input type="submit" name="submit" class="button" title="Log In"  value="Login">
        </div>
    
        
      </center>
    </form>
  </div>
  </body>
</html>

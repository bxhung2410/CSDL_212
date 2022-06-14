

<!DOCTYPE html>
<html lang="vi">
  <head>
    <title>Admin</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../assignment/public/assets/css/theme_admin.css">

  </head>

  <body class="footer-offset has-navbar-vertical-aside navbar-vertical-aside-show-xl">
  <?php 
    require_once "./mvc/views/".$data["admin_header"].".php";
  ?>
   <?php 
    require_once "./mvc/views/".$data["admin_sidebar"].".php";
  ?>

  <main id="content" role="main" class="main">
    <div class="content container-fluid">
      <?php 
        require_once "./mvc/views/". $data["admin_page"].".php";
      ?>
    </div>
  </main>

  </body>
</html>

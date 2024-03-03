<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Core theme CSS-->
  <link rel="stylesheet" href="css/login.css">
    <link rel="icon" type="image/png" href="img/Logo.jpg.jfif" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Inter:wght@100&family=Poppins:wght@200&family=Sacramento&family=Work+Sans:ital,wght@0,300;1,200&display=swap"
      rel="stylesheet"
    />
    <script src="https://unpkg.com/feather-icons"></script>
    <title>ARCTIC MONKEY</title>
</head>
<body class="body-login">
<div class="position-absolute top-50 start-50 translate-middle">
  <img src="img/arc.jpg.png" width="110" height="80" class="mb-3 position-absolute top-0 start-50 translate-middle">
      <div class="card mt-5" style="width: 18rem;">
        <div class="card-header text-center">
          <h1>Login</h1>
        </div>
        <form action="" method="post" class="text-center">
            <div class="mb-3">
              <input type="text" placeholder="Username"><i data-feather="user"></i>
            </div>
            <div>
               <input type="password" id="password" placeholder="Password"><i data-feather="eye" id="eye" onclick="showHide();"></i>
            </div>
          
          <button type="button" class="btn btn-dark text-center mt-5">LOGIN</button>
        </form>
      </div>
   </div>
   <script>
      feather.replace();
    </script>
    <script src="js/login.js">
    </script>
</body>
</html>
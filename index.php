<!DOCTYPE html>
<html lang="en">
<head>
  <title>hmmm</title>
  <link rel="stylesheet" type="text/css"  href="style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css"  href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
  
</head>
<body>

<div class="container"> 

  <div class= "login-box">

    <div class= "row"> 

      <div class= "col-md-6 login-left"> 
      <h2>bejelentkezés</h2>
      <form action="Vw.php" method="post">
         <div class="form-grup">
           <label>Felhasználo név</label>
           <input type="text" name="user" class="form-control" required>
         </div>

         <div class="form-grup">
           <label>jelszo </label>
           <input type="password" name="password" class="form-control" required>
         </div>
         
         <button type="submit" class="btn btn-primary"> bejelentkezé</button>
        </form>

      </div>

      <div class= "col-md-6 login-right"> 
      <h2>Regisztrácio</h2>
      <form action="register.php" method="post"></form>
         <div class="form-grup">
           <label>Felhasználo név</label>
           <input type="text" name="user" class="form-control" required>
         </div>

         <div class="form-grup">
           <label>jelszo </label>
           <input type="password" name="password" class="form-control" required>
         </div>
         
         <button type="submit" class="btn btn-primary"> regisztrálok</button>

      </div>

    </div>

 </div>  

</div>

</body>
</html>

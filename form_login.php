<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery-3.3.1.min.js" ></script>
    <script src="js/popper.min.js" ></script>
    <script src="js/bootstrap.min.js" ></script>
    <title>LOGIN</title>
  </head>
  <body>
    <div class="container" style="padding-top:150px;">
      <center>
        <div class="row">
          <div class="col">
          </div>
          <div class="col-3">
            <br>
            <h2>LOGIN</h2>
            <br>
            <form action="login.php" method="POST">
              <div class="form-group">
                <input type="text" class="form-control" name="user" placeholder="User">
              </div>
              <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="Password">
              </div>
              <button type="submit" class="btn btn-danger">Ingresar</button>
            </form>
          </div>
          <div class="col">
          </div>
        </div>
      </center>
    </div>
  </body>
</html>

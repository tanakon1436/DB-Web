<!DOCTYPE html>
<html lang = "en">
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class ="container">
        <div class="col-xs-6">
        <form action="checklogin.php" method="get">
            <div class="form-group">
               <label for="cust_id">Username: </label>
               <input id="cust_id" name="username" type="text" class="form-control">
            </div>
            <div class="form-group">
               <label for="cust_fname">Password :</label>
               <input id="cust_fname" name="password" type="password" class="form-control">
            </div>
             <p></p>
              <input type="submit" class="btn btn-primary" name = "submit">
        </form>
        </div>
        </div>
    </body>
</html>
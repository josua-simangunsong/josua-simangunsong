<!doctype html>
<html lang="en">
  <head>
    <title>Login</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>

    <body>
        <div class="jumbotron">
            <h1 class="display-4" style="text-align:center;">Login</h1>
            <p class="lead"style="text-align:center;" >Silahkan login terlebih dahulu</p>
        </div>
        <div class = "container">
        <div class ="row justify-content-center">
        <!--/ FORM LOGIN /-->
        <form action="login.php" method="post">
        <table>
            <tr>
                <td>Username</td><td>:</td><td><input type="text" name="username" required></td>
            </tr>
            <tr>
                <td>Password</td><td>:</td><td><input type="password" name="password" required></td>
            </tr>
            <tr>
                <td></td><td></td><td><input type="submit" name="login" value="Login" class="btn btn-success"></td>
            </tr>
        </table>
        </form>
        </div>
    </div>
    </body> 
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</html>
<style>
    .jumbotron{
        background-image: url(gambar/uang.png);
        background-size: 100%;
    }
    body{
        background-image: url(gambar/latarlayarutama.jpg);
        background-size: 100%;
    }
    </style>
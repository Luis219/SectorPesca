<!DOCTYPE html>
<html>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!-- Include the above in your HEAD tag -->

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>login</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/styles.css">
</head>

<body>
    <div class="main">

        <div class="container">
            <center>
                <div class="middle">
                    <div id="login">
                        <form action="accesoUsuarios.php" method="POST">
                            <fieldset class="clearfix">
                                <p><span class="fa fa-user"></span><input type="text" name="usuario" Placeholder="Username" required></p>
                                <!-- JS because of IE support; better: placeholder="Username" -->
                                <p><span class="fa fa-lock"></span><input type="password" name="contrasenia" Placeholder="Password" required></p>
                                <!-- JS because of IE support; better: placeholder="Password" -->
                                <div>
                                    <span style="width:50%; text-align:right;  display: inline-block;"><input type="submit" value="INGRESAR"></span>
                                </div>
                            </fieldset>
                            <div class="clearfix"></div>
                        </form>
                        <div class="clearfix"></div>
                    </div> <!-- end login -->
                    <div class="logo">
                        <img src="../assets/img/logo.png" style="min-height: 20px; max-height: 130px" alt="logo">
                        <div class="clearfix"></div>
                    </div>
                </div>
            </center>
        </div>
    </div>
</body>

</html>
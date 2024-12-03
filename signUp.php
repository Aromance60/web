<?php
session_start();
include "includes/functions.php";
singUp();
?>

<head>
    <title>
    Aromance
    </title>
    <link rel="icon" href="images/logo.png" type="image/icon type">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>

<div class="container">
    <div id="signupbox" style="margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
        <div class="panel panel-info">
            <div class="panel-heading">
                <div class="panel-title">Regístrate</div>
            </div>
            <?php
            message();
            ?>
            <div class="panel-body">
                <form id="signupform" class="form-horizontal" role="form" method="post" action="signUp.php">
                    <div class="form-group">
                        <label for="email" class="col-md-3 control-label">Correo electrónico</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="email" placeholder="Dirección de correo electrónico">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="firstname" class="col-md-3 control-label">Nombre</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="Fname" placeholder="Nombre">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="lastname" class="col-md-3 control-label">Apellido</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="Lname" placeholder="Apellido">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="address" class="col-md-3 control-label">Dirección</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="address" placeholder="Dirección">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password" class="col-md-3 control-label">Contraseña</label>
                        <div class="col-md-9">
                            <input type="password" class="form-control" name="passwd" placeholder="Contraseña">
                        </div>
                    </div>
                    <div style="margin-left: 39px;">
                        <b>La contraseña debe contener lo siguiente:</b>
                        <ul>
                            <li>Al menos 1 número y 1 letra</li>
                            <li>Debe tener entre 8 y 30 caracteres</li>
                        </ul>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-12 controls">
                            <input id="btn-login" class="btn btn-success" type="submit" value="Regístrate" name="singUp" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12 control">
                            <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%">
                                ¿Ya tienes una cuenta?
                                <a href="login.php">
                                    Inicia sesión aquí
                                </a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

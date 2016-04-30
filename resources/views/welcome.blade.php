<!DOCTYPE html>
<html>
    <head>
        <title>Hello World!</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <h1 class="title">Welcome to MMADB!</h1>
                
                <?php
                  if (Auth::check()) {
                     $user = Auth::user();
                  ?><h1>Welcome Back <?php echo($user->username); ?></h1><?php
                  } else {
                  ?><a href="<?php echo($redditurl); ?>">Please Login Stranger!</a><?php     
                  }
               ?>
                
                <p></p>
            </div>
        </div>
    </body>
</html>

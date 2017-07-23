<?php


    $error = "";

    $successMessage = "";


    if ($_POST){

        if (!$_POST["email"]){

            $error .= "The email field is required.<br>";

        }

        if (!$_POST["subject"]){

            $error .= "The name field is required.<br>";

        }

        if (!$_POST["content1"]){

            $error .= "The attending field is required.<br>";

        }

        if (!$_POST["content2"]){

            $error .= "The who else is coming  field is required.<br>";

        }

        if ($_POST["email"] && filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) === false) {

            $error .= "The email address is invalid.<br>";
        }

        if ($error != "") {


            $error = '<div class="alert alert-info alert-dismissable" role="alert"><a href="#" class="close" data-dismiss="alert" aria-label="close">×</a><strong>There were error(s) in your form:</strong><br>' . $error . '</div>';

        } else {

            $emailTo = "gracetang1025@hotmail.com";

            $subject = $_POST["subject"];

            $content = $_POST["content1"].$_POST["content2"].$_POST["content3"];

            $headers = "From: ".$_POST["email"];

            if (mail($emailTo, $subject, $content,  $headers)){

                $successMessage = '<div class="alert alert-success alert-dismissable" role="alert"><a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>Your message was sent successfully!</div>';

            } else {

                 $error = '<div class="alert alert-info alert-dismissable" role="alert"><a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>Your message couldn\'t be sent. Please try again.</div>';

            }

        }


    }


?>



<!DOCTYPE html>

<html lang="en">
  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Comfortaa:700" rel="stylesheet">

    <title>Luke & Charlotte</title>


      <style type="text/css">

          #navbar {

            font-family: 'Comfortaa', cursive;


          }
          .nav-item {

            margin-left: 20px;

          }

          .jumbotronSection {

              background-image: url(weddingImages/img_0843.jpg);
              font-family: 'Comfortaa', cursive;
              text-align: center;
              background-repeat: no-repeat;
              background-position: center;
              background-size: cover;
              height: 650px;
              color: white;

          }

          .contactSection {

              height: 800px;

              font-family: 'Comfortaa', cursive;

          }

          #error{

              font-family:serif;

          }

          span {

              color: red;

          }

          .footer {

              height: 100px;
              text-align: center;
              background-color:#A2BDBE;
              margin-top: 100px;
          }




      </style>





  </head>

  <body>

<div class="wrapper">
    <div class="navSection">
        <nav class="navbar navbar-toggleable-md navbar-light bg-faded" id="navbar">
          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <a class="navbar-brand" href="home.html">Luke & Charlotte</a>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-item nav-link" href="home.html">OUR STORY</a>
              <a class="nav-item nav-link" href="where.html">WHEN</a>
              <a class="nav-item nav-link" href="accommodations.html">ACCOMMODATIONS</a>
              <a class="nav-item nav-link active" href="rsvp.php">RSVP<span class="sr-only">(current)</span></a>
            </div>
          </div>
        </nav>
    </div>

    <div class="jumbotronSection">
       <h1 style="padding-top:280px; font-size:70px;">RSVP</h1>
    </div>

        <div class="contactSection container">
            <h3 style="padding-top:80px; text-align: center;">We're so excited to celebrate with you! </h3>
            <p style="padding-top:15px; text-align: center;">KINDLY RESPOND BY SEPTEMBER 1, 2017</p>

            <div id="error"><? echo $error.$successMessage; ?></div>

            <form method="post" style="padding-top:40px;">
              <div class="form-group">
                <label for="email">Email address<span>*</span></label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
              </div>
              <div class="form-group">
                <label for="subject">Name<span>*</span></label>
                <input type="text" class="form-control" id="subject" name="subject">
              </div>
              <div class="form-group">
                <label for="content1">Are you attending?<span>*</span></label>
                <textarea class="form-control" id="content1" name="content1" rows="1"></textarea>
              </div>
                <div class="form-group">
                <label for="content2">Who else is coming with you?<span>*</span></label>
                <textarea class="form-control" id="content2" name="content2" rows="1"></textarea>
              </div>
                <div class="form-group">
                <label for="content3">Song suggestions?</label>
                <textarea class="form-control" id="content3" name="content3" rows="4"></textarea>
              </div>

              <button type="submit" id="submit" class="btn btn-info">Submit</button>
            </form>

        </div>




    <footer class="footer">
          <div class="container" style="padding-top:40px;">
            <span class="text-muted" id=>Copyright 2017 Grace Tang. All Rights Reserved.</span>
          </div>
    </footer>



</div>


    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>



      <script type="text/javascript">

          $("form").submit(function (e) {


              var error = "";

              if ($("#email").val() == ""){

                  error += "The email field is required.<br>";

              }

              if ($("#subject").val() == ""){

                  error += "The name field is required.<br>";

              }

              if ($("#content1").val() == ""){

                  error += "The attending field is required.<br>"

              }

                if ($("#content2").val() == ""){

                  error += "The who else is coming field is required."

              }

              if(error != ""){


                  $("#error").html('<div class="alert alert-info alert-dismissable" role="alert"><a href="#" class="close" data-dismiss="alert" aria-label="close">×</a><strong>There were error(s) in your form:</strong><br>' + error + '</div>');

                  /*
                  $(".alert-dismissable").alert();
                  window.setTimeout(function() { $(".alert-dismissable").alert('close'); }, 2000);
                  */

                  return false;


              } else {

                 return true;

              }


          });


      </script>


  </body>

</html>






















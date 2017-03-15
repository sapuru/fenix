<?php

if(isset($_POST['email'])) {

    $email_to = "aymarasamudio@gmail.com";

    $email_subject = "Contacto Fenix";


    function died($error) {

        // your error code can go here

        echo "Hubo un error en tu mensaje. ";

        echo "Podría tener que ver con lo siguiente: <br /><br />";

        echo $error."<br /><br />";

        echo "Por favor intentalo nuevamente.<br /><br />";

        die();

    }



    // validation expected data exists

    if(!isset($_POST['name']) ||

        !isset($_POST['email']) ||

        !isset($_POST['message'])) {

        died('Disculpas, parece que hay un error en tu mensaje. Intenta nuevamente.');

    }


    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];


    $email_message = "Detalles.\n\n";



    function clean_string($string) {

      $bad = array("content-type","bcc:","to:","cc:","href");

      return str_replace($bad,"",$string);

    }



    $email_message .= "Name: ".clean_string($name)."\n";

    $email_message .= "Email: ".clean_string($email)."\n";

    $email_message .= "Message: ".clean_string($message)."\n";


	// create email headers

	$headers = 'From: '.$email."\r\n".

	'Reply-To: '.$email."\r\n" .

	'X-Mailer: PHP/' . phpversion();

	@mail($email_to, $email_subject, $email_message, $headers);


?>



<!-- include your own success html here -->

<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Fenix</title>
    <meta name="description" content="Comunicación Integral">
    <meta name="viewport" content="width=device-width">

    <!-- Booooooootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="css/main.css">

    <!--[if lt IE 9]>
    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <script>window.html5 || document.write('<script src="js/vendor/html5shiv.js"><\/script>')</script>
    <![endif]-->

  </head>
  <body>
    <div class="grid">
      <div class="container">
        <div class="row">
          <div class="col-md-offset-1 col-md-2">
            <div class="grid-line"></div>
          </div>
          <div class="col-md-2">
            <div class="grid-line"></div>
          </div>
          <div class="col-md-2">
            <div class="grid-line"></div>
          </div>
          <div class="col-md-2">
            <div class="grid-line"></div>
          </div>
          <div class="col-md-2">
            <div class="grid-line" style="margin-right:-30px;border-right:1px dotted #90c2da"></div>
          </div>
        </div>
      </div>
    </div>

    <div class="fixed-top rellax" data-rellax-speed="-2"
      style="transform: rotate(45deg);">
    </div>

    <main class="main">
      <header>
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-offset-2 col-md-10">
            <h3>Gracias por su mensaje, lo estaremos contactando muy pronto.</h3>
          </div>
          </div>
        </div>
      </header>

</main>
      <!-- javascript -->
      <script type="text/javascript" src="js/rellax.js"></script>
      <script>
      	var rellax = new Rellax('.rellax', {
          // center: true
        });
      </script>

    </body>
  </html>





<?php

}

?>

<?php
  $mailerpath = getcwd();

  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\SMTP;
  use PHPMailer\PHPMailer\Exception;

  require "{$mailerpath}/PHPMailer-master/src/Exception.php";
  require "{$mailerpath}/PHPMailer-master/src/PHPMailer.php";
  require "{$mailerpath}/PHPMailer-master/src/SMTP.php";
try{
  $visitorName = $_POST["name"];
  $visitorMobile = $_POST["mobile"];
  $visitorPreference = $_POST["medicine"];

  $mailBody = "
  <h2 style='font-family: sans-serif; text-align: center; padding: 10px;'>CONSULTATION FORM FROM USPHARMACY.NET</h2>
  <h3 style='font-family: sans-serif;color: white; background: #578fff; padding: 10px; margin: 0px;'>Name:</h3>
  <p style='font-family: sans-serif;  padding: 10px; margin: 0px;'>
    {$visitorName}
  </p>
  
  <h3 style='font-family: sans-serif;color: white; background: #578fff; padding: 10px; margin: 0px;'>Mobile:</h3>
  <p style='font-family: sans-serif;  padding: 10px; margin: 0px;'>
    {$visitorMobile}
  </p>
  <h3 style='font-family: sans-serif;color: white; background: #578fff; padding: 10px; margin: 0px;'>Medicine:</h3>
  <p style='font-family: sans-serif;  padding: 10px; margin: 0px;'>{$visitorPreference}</p>


  ";

  $from  = "info@uspharmacy.net"; 
  $namefrom = "USPHARMACY";
  $mail = new PHPMailer(true);
  $mail->Username   = "info@uspharmacy.net";
  $mail->Password   = "Pharma@123";
  $mail->setFrom("info@uspharmacy.net", "USPHARMACY");
  $mail->Subject  = "USPHARMACY FORM SUBMISSION";
  $mail->isHTML();
  $mail->Body = $mailBody;
  $mail->addAddress("info@uspharmacy.net", "uspharmacy");
  
  $mail->send();

  header("Location: https://uspharmacy.net/thank-you");
  die();

} catch (phpmailerException $e) {
  echo '<!DOCTYPE html>
  <html lang="en">
  
    <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Mail Sent</title>
      <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
      integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w=="
      crossorigin="anonymous"
      />
      <style>
        * {
          margin: 0;
          padding: 0;
          color: white;
        }
  
        .circle-wrapper {
          position: relative;
          width: 100px;
          height: 100px;
          float: left;
          margin: 10px;
        }
  
        .icon {
          position: absolute;
          color: #fff;
          font-size: 55px;
          top: 55px;
          left: 55px;
          transform: translate(-50%, -50%);
        }
  
        .circle {
          display: block;
          width: 100%;
          height: 100%;
          border-radius: 50%;
          padding: 2.5px;
          background-clip: content-box;
          animation: spin 10s linear infinite;
        }
  
        .circle-wrapper:active .circle {
          animation: spin 2s linear infinite;
        }
  
        .error {
          background-color: #CA0B00;
          border: 2.5px dashed #CA0B00;
        }
  
        @keyframes spin {
          100% {
            transform: rotateZ(360deg);
          }
        }
  
        .page-wrapper {
          height: 100vh;
          background-color: #578fff;
          display: flex;
          flex-direction: column;
          align-items: center;
          justify-content: center;
        }
  
        h3 {
          font-family: sans-serif;
          margin: 1rem 0rem;
          text-align: center;
        }
  
      </style>
    </head>
  
    <body>
      <div class="page-wrapper">
        <div class="circle-wrapper">
          <div class="error circle"></div>
          <div class="icon">
            <i class="fa fa-times"></i>
          </div>
        </div>
        <h3>Something went wrong<br /> Please try again later</h3>
      
        </div>
      <script>
        setTimeout(() => window.location = "https://uspharmacy.net/", 5000);
  
      </script>
    </body>
  
  </html>
  ';
} catch (Exception $e) {
  echo '<!DOCTYPE html>
  <html lang="en">
  
    <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Mail Sent</title>
      <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
      integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w=="
      crossorigin="anonymous"
      />
      <style>
        * {
          margin: 0;
          padding: 0;
          color: white;
        }
  
        .circle-wrapper {
          position: relative;
          width: 100px;
          height: 100px;
          float: left;
          margin: 10px;
        }
  
        .icon {
          position: absolute;
          color: #fff;
          font-size: 55px;
          top: 55px;
          left: 55px;
          transform: translate(-50%, -50%);
        }
  
        .circle {
          display: block;
          width: 100%;
          height: 100%;
          border-radius: 50%;
          padding: 2.5px;
          background-clip: content-box;
          animation: spin 10s linear infinite;
        }
  
        .circle-wrapper:active .circle {
          animation: spin 2s linear infinite;
        }
  
        .error {
          background-color: #CA0B00;
          border: 2.5px dashed #CA0B00;
        }
  
        @keyframes spin {
          100% {
            transform: rotateZ(360deg);
          }
        }
  
        .page-wrapper {
          height: 100vh;
          background-color: #578fff;
          display: flex;
          flex-direction: column;
          align-items: center;
          justify-content: center;
        }
  
        h3 {
          font-family: sans-serif;
          margin: 1rem 0rem;
          text-align: center;
        }
  
      </style>
    </head>
  
    <body>
      <div class="page-wrapper">
        <div class="circle-wrapper">
          <div class="error circle"></div>
          <div class="icon">
            <i class="fa fa-times"></i>
          </div>
        </div>
        <h3>Something went wrong<br /> Please try again later</h3>
        
      </div>
      <script>
        setTimeout(() => window.location = "https://uspharmacy.net/", 5000);
  
      </script>
    </body>
  
  </html>
  ';
}
?>
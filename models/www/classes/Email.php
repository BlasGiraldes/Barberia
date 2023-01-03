<?php


namespace Classes;

use PHPMailer\PHPMailer\PHPMailer;


class Email
{

    public $email;
    public $nombre;
    public $token;


    public function __construct($email, $nombre, $token)
    {

        $this->email = $email;
        $this->nombre = $nombre;
        $this->token = $token;
    }

    public function enviarConfirmacion()
    {

        // Crear el objeto de email
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->Host = 'smtp-relay.sendinblue.com';
        $mail->SMTPAuth = true;
        $mail->Port = 587;
        $mail->Username = 'blasgiraldes@gmail.com';
        $mail->Password = 'F0m5L4M1GjTEN7ZA';

        $mail->setFrom('blas@barberia.com');
        $mail->addAddress($this->email);
        $mail->Subject = 'Confirma tu cuenta';

        // SET HTML

        $mail->isHTML(TRUE);
        $mail->CharSet = 'UTF-8';

        $mail->Body = "
        <html>
        <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@500;700&display=swap');
        h2 {
            font-size: 25px;
            font-weight: 500;
            line-height: 25px;
        }
    
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #ffffff;
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
        }
    
        p {
            line-height: 18px;
        }
    
        a {
            position: relative;
            z-index: 0;
            display: inline-block;
            margin: 20px 0;
        }
    
        a button {
            padding: 0.7em 2em;
            font-size: 16px !important;
            font-weight: 500;
            background: #000000;
            color: #ffffff;
            border: none;
            text-transform: uppercase;
            cursor: pointer;
        }
        p span {
            font-size: 12px;
        }
        div p{
            border-bottom: 1px solid #000000;
            border-top: none;
            margin-top: 40px;
        }
    </style>
    <body>
        <h1>BarberBlas</h1>
        <h2>Hola, " . $this->nombre . ". ¡Gracias por registrarte!</h2>
        <p>Por favor confirma tu correo electrónico para que puedas comenzar a disfrutar de todos los servicios de
            BarberBlas</p>
        <a href='http://barberblas.alwaysdata.net/confirmar-cuenta?token=" . $this->token . "'><button>Verificar</button></a>
        <p>Si tú no te registraste en BarberBlas, por favor ignora este correo electrónico.</p>
        <div><p></p></div>
        <p><span>Este correo electrónico fue enviado desde una dirección solamente de notificaciones que no puede aceptar correo electrónico entrante. Por favor no respondas a este mensaje.</span></p>
    </body>
    </html>";




        // Enviar mail

        $mail->send();
    }

    public function enviarInstrucciones(){

          // Crear el objeto de email
          $mail = new PHPMailer();
          $mail->isSMTP();
          $mail->Host = 'smtp-relay.sendinblue.com';
          $mail->SMTPAuth = true;
          $mail->Port = 587;
          $mail->Username = 'blasgiraldes@gmail.com';
          $mail->Password = 'F0m5L4M1GjTEN7ZA';
  
          $mail->setFrom('blas@barberia.com');
          $mail->addAddress($this->email);
          $mail->Subject = 'Reestablecer contraseña';
  
          // SET HTML
  
          $mail->isHTML(TRUE);
          $mail->CharSet = 'UTF-8';
  
          $mail->Body = "
          <html>
          <style>
          @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@500;700&display=swap');
          h2 {
              font-size: 25px;
              font-weight: 500;
              line-height: 25px;
          }
      
          body {
              font-family: 'Poppins', sans-serif;
              background-color: #ffffff;
              max-width: 400px;
              margin: 0 auto;
              padding: 20px;
          }
      
          p {
              line-height: 18px;
          }
      
          a {
              position: relative;
              z-index: 0;
              display: inline-block;
              margin: 20px 0;
          }
      
          a button {
              padding: 0.7em 2em;
              font-size: 16px !important;
              font-weight: 500;
              background: #000000;
              color: #ffffff;
              border: none;
              text-transform: uppercase;
              cursor: pointer;
          }
          p span {
              font-size: 12px;
          }
          div p{
              border-bottom: 1px solid #000000;
              border-top: none;
              margin-top: 40px;
          }
      </style>
      <body>
          <h1>BarberBlas</h1>
          <h2>Hola, " . $this->nombre . ". Has solicitado reestablecer tu password.</h2>
          <p>Por favor sigue el siguiente enlace</p>
          <a href='http://barberblas.alwaysdata.net/recuperar?token=" . $this->token . "'><button>Recuperar</button></a>
          <p>Si tú no solicitaste recuperar la contraseña, por favor ignora este correo electrónico.</p>
          <div><p></p></div>
          <p><span>Este correo electrónico fue enviado desde una dirección solamente de notificaciones que no puede aceptar correo electrónico entrante. Por favor no respondas a este mensaje.</span></p>
      </body>
      </html>";
  
  
  
  
          // Enviar mail
  
          $mail->send();
    }

}

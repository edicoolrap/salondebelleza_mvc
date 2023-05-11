<?php

namespace Classes;

use PHPMailer\PHPMailer\PHPMailer;

    class Email {

        public $email;
        public $nombre;
        public $token;

        public function __construct($email, $nombre, $token) {
            $this->email = $email;
            $this->nombre = $nombre;
            $this->token = $token;
        }

        public function enviarConfirmacion() {
            // Crear el objeto
            $mail = new PHPMailer();
            $mail->isSMTP();
            $mail->Host = 'sandbox.smtp.mailtrap.io';
            $mail->SMTPAuth = true;
            $mail->Port = 2525;
            $mail->Username = '94feade0d3361f';
            $mail->Password = '655c0a8a665341';
            $mail->SMTPSecure = 'tls';

            //Configurar contenido del Email
            $mail->setFrom('cuentas@appsalon.com');
            $mail->addAddress('cuentas@appsalon.com', 'AppSalon.com');
            $mail->Subject = 'Confirma tu Cuenta';

            //Habilitar el HTML
            $mail->isHTML(true);
            $mail->CharSet = 'UFT-8';

            //Contenido del HTML
            $contenido = "<html>";
            $contenido .= "<p>Hola " . $this->email . "</strong> Has creado tu cuenta en AppSalon, solo debes confirmarla en el siguiente enlace</p>";
            $contenido .= "<p>Presiona aquí: <a href='http://localhost:3000/confirmar-cuenta?token=" . $this->token . "'>Confirmar Cuenta </a>";
            $contenido .= "<p> Si tu no solicitaste este cambio, ignore este mensaje</p>";
            $contenido .= "</html>";
            
            //Adjuntar el HTML al Body
            $mail->Body = $contenido;
            $mail->AltBody = 'Texto alternativo sin HTML';

            //Enviar el mail
            $mail->send();
        }

        public function enviarInstrucciones() {
            // Crear el objeto
            $mail = new PHPMailer();
            $mail->isSMTP();
            $mail->Host = 'sandbox.smtp.mailtrap.io';
            $mail->SMTPAuth = true;
            $mail->Port = 2525;
            $mail->Username = '94feade0d3361f';
            $mail->Password = '655c0a8a665341';
            $mail->SMTPSecure = 'tls';

            //Configurar contenido del Email
            $mail->setFrom('cuentas@appsalon.com');
            $mail->addAddress('cuentas@appsalon.com', 'AppSalon.com');
            $mail->Subject = 'Reestablece tu Password';

            //Habilitar el HTML
            $mail->isHTML(true);
            $mail->CharSet = 'UFT-8';

            //Contenido del HTML
            $contenido = "<html>";
            $contenido .= "<p>Hola " . $this->nombre . "</strong> Has solicitado reestablecer tu password, sigue el siguiente enlace</p>";
            $contenido .= "<p>Presiona aquí: <a href='http://localhost:3000/recuperar?token=" . $this->token . "'>Reestablecer Password</a>";
            $contenido .= "<p> Si tu no solicitaste este cambio, ignore este mensaje</p>";
            $contenido .= "</html>";
            
            //Adjuntar el HTML al Body
            $mail->Body = $contenido;
            $mail->AltBody = 'Texto alternativo sin HTML';

            //Enviar el mail
            $mail->send();
        }

    }

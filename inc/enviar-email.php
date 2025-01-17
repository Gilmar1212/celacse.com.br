<?php 
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];
    $select = $_POST["selecione"];
    $mensagem = $_POST["mensagem"];
    // Compo E-mail
  $arquivo = "
  <style type='text/css'>
  body {
  margin:0px;
  font-family:Verdane;
  font-size:12px;
  color: #666666;
  }
  a{
  color: #666666;
  text-decoration: none;
  }
  a:hover {
  color: #FF0000;
  text-decoration: none;
  }
  </style>
    <html>
        <table width='510' border='1' cellpadding='1' cellspacing='1' bgcolor='#CCCCCC'>
            <tr>
              <td>
  <tr>
                 <td width='500'><h2>Nome:$nome</h2></td>
                </tr>
                <tr>
                  <td width='320'>E-mail:<b>$email</b></td>
     </tr>
      <tr>
                  <td width='320'>Telefone:<b>$telefone</b></td>
                </tr>
     <tr>
                  <td width='320'>Serviços:$select</td>
                </tr>
                <tr>
                  <td width='320'>Mensagem:$mensagem</td>
                </tr>
            </td>
          </tr>
        </table>
    </html>
  ";
// ini_set("display_errors", 1);
//include required phpmailer files
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';
require 'phpmailer/Exception.php';
//Define namespaces
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\OAuth;
//Create instance of phpmailer
$mail = new PHPMailer();
$mail->CharSet = "UTF-8";
// $mail->SMTPDebug = 1;
//Set mailer to use smtp
$mail->isSMTP(); 
//define smtp host
$mail->Host = "smtp.hostinger.com"; 
//enable smtp authentication
$mail->SMTPAuth = "true";
//set type of encryption (ssl/tls)
$mail->SMTPSecure = "ssl";
//Set port of connection smtp
$mail->Port = "465";
//Set gmail username
$mail->Username = "contato@azurepromotora.com.br";
//set gmail password
$mail->Password = "Jj45612300789.";
//Set email subject
$mail->Subject = "Pedido de orçamento de: $nome -> Email :$email";
//Set sender email 
$mail->setFrom("contato@azurepromotora.com.br");
// email body
$mail->MsgHTML($arquivo);        
$mail->Body =  $arquivo;
//add recipient
$mail->addAddress("contato@azurepromotora.com.br");
//finally send email
if ($mail->Send()) {
    echo '<script>alert("E-mail enviado com sucesso");
        window.location.href= "../index.php";
    </script>';
}else{
    echo '<script>alert("E-mail não enviado")
            window.location.href= "../index.php";
        </script>';
}
//closing smtp connection
$mail->smtpClose();
?>

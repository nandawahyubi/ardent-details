<?php
use PHPMailer\PHPMailer\PHPMailer;

require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';

$mail = new PHPMailer(true);

$alert = '';

if(isset($_POST['submit'])){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $message = $_POST['message'];

  
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'nandawahyubi6121@gmail.com'; // Gmail address which you want to use as SMTP server
    $mail->Password = 'annisasrilestari11'; // Gmail address Password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = '587';

    $mail->setFrom('nandawahyubi6121@gmail.com'); // Gmail address which you used as SMTP server
    $mail->addAddress('nandawahyubi6121@gmail.com'); // Email address where you want to receive emails (you can use any of your gmail address including the gmail address which you used as SMTP server)

    $mail->isHTML(true);
    // $mail->addAttachment('img/1.png');
    $mail->Subject = ('Message Received (Contact Page)');
    $mail->Body = "<table>
                      <tr>
                          <td>Name</td>
                          <td>: $name</td>
                      </tr>
                      <tr>
                          <td>Email</td>
                          <td>: $email</td>
                      </tr>
                      <tr>
                          <td>Phone</td>
                          <td>: $phone</td>
                      </tr>
                      <tr>
                          <td>Message</td>
                          <td>: $message</td>
                      </tr>
                  </table>";

      if ($name && $email && $phone && $message && $mail->send()) {
        $alert = '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Message Sent!</strong> Thank you for contacting us.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>';
                  echo "<meta http-equiv='refresh' content='3;url=index.php#kontak'>";
      } else {
        $alert = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Something went wrong.</strong> Please try again.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>';
                  echo "<meta http-equiv='refresh' content='3;url=index.php#kontak'>";
      }
  
  }
?>
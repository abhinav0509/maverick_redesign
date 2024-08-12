<?php
// The message
include_once("PHPMailerAutoload.php");
$contactName=$_POST['name'];
$phone=$_POST['phone'];
$emailid=$_POST['email'];
$message=$_POST['message'];

$op="";
$op.="<body style='font-family: Poppins, sans-serif;padding:20px;background: #f1f1f1;'>";
$op.="<div style='background-color:#000000;width:80%;max-width:600px;margin-left:auto;margin-right:auto;'>";
$op.="<div style='background-color:#ffffff;padding:50px;'>";
$op.="<header style='text-align:center;'>";
$op.="<img src='https://www.mavericksoftware.in/images/mlogo.png' style='width:100px'/>";
$op.="<h1>Enquiry Submission</h1>";
$op.="</header>";
$op.="<hr style='height:5px;background-color: #EA5C1F;border-color: #EA5C1F;'>";
$op.="<div>";
$op.="<div style='padding:20px 0 50px 0;'>";
$op.="<section>";
$op.="<h3 style='color:#EA5C1F;'>Hello Team Maverick, you have a new enquiry submission from Maverick Website</h3>";
$op.="</section>";
$op.="<section style='text-align:left;margin-top:50px;'>";
$op.="<table style='text-align:left;margin-top:50px;'>";
$op.="<tbody style='width: 30%;vertical-align:top;'>";
$op.="<tr style='width: 30%;vertical-align:top;'>";
$op.="<th style='width: 30%;vertical-align:top;color: #EA5C1F;font-weight:900;display: block;width: 100% !important; padding: 10px;margin:0;'>Name</th>";
$op.="<td style='padding: 10px;margin:0;font-weight:100;display: block;width: 100% !important;'>$contactName</td>";
$op.="</tr>";
$op.="<tr style='width: 30%;vertical-align:top;'>";
$op.="<th style='width: 30%;vertical-align:top;color: #EA5C1F;font-weight:900;display: block;width: 100% !important; padding: 10px;margin:0;'>Email Address</th>";
$op.="<td style='padding: 10px;margin:0;font-weight:100;display: block;width: 100% !important;'>$emailid</td>";
$op.="</tr>";
$op.="<tr style='width: 30%;vertical-align:top;'>";
$op.="<th style='width: 30%;vertical-align:top;color: #EA5C1F;font-weight:900;display: block;width: 100% !important; padding: 10px;margin:0;'>Contact Number</th>";
$op.="<td style='padding: 10px;margin:0;font-weight:100;display: block;width: 100% !important;'>$phone</td>";
$op.="</tr>";
$op.="<tr style='width: 30%;vertical-align:top;'>";
$op.="<th style='width: 30%;vertical-align:top;color: #EA5C1F;font-weight:900;display: block;width: 100% !important; padding: 10px;margin:0;'>Message</th>";
$op.="<td style='padding: 10px;margin:0;font-weight:100;display: block;width: 100% !important;'>$message.</td>";
$op.="</tr>";
$op.="</tbody>";
$op.="</table>";
$op.="</section>";
$op.="</div>";
$op.="</div>";
$op.="</div>";
$op.="<footer style='text-align:center;'>";
$op.="<section style='font-size:10px;color:#000000;padding:20px 0;background-color:#ffffff !important;'>";
$op.="<img src='https://www.mavericksoftware.in/images/mlogo.png' style='width:100px'/>";
$op.="<p>";
$op.="<a href='https://www.mavericksoftware.in/'>mavericksoftware.in</a>";
$op.="</p>";
$op.="<p>1st Floor, Sarita Chambers, Above Punjab National Bank, Bibvewadi Kondwa Road, Pune-411037 (India)</p>";
$op.="<p>Copyright &copy; <script>document.write(new Date().getFullYear())</script> Maverick Software(I) Pvt Ltd All Rights Reserved</p>";
$op.="</section>";
$op.="</footer>";
$op.="</div>";
$op.="</body>";

try {
    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'enquiry@mavericksoftware.in';
    $mail->Password = 'enquiry@1234';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;
    $mail->setFrom('msipl@mavericksoftware.in', 'Maverick Software Enquiry');
    $mail->addAddress('msipl@mavericksoftware.in', 'Maverick Software Enquiry');
    $mail->addAddress('abhi@mavericksoftware.in', 'Maverick Software Enquiry');
    $mail->WordWrap = 50;
    $mail->isHTML(true);
    $mail->Subject = "Maverick Software Enquiry Enquiry";
    $mail->Body = $op;

    if (!$mail->send()) {
        throw new Exception('Mail could not be sent.');
    } else {
        $data["message"] = "Success";
        print_r(json_encode($data));
    }
} catch (Exception $e) {
    echo "<script>alert('Error: " . $mail->ErrorInfo . "'); </script>";
    echo "<script>window.location='http://localhost/maverick_redesign/index.html';</script>";
}

$op = "<body style='font-family: Poppins, sans-serif;padding:20px;background: #f1f1f1;'>";
$op .= "<div style='background-color:#000000;width:80%;max-width:600px;margin-left:auto;margin-right:auto;'>";
$op .= "<div style='background-color:#ffffff;padding:50px;'>";
$op .= "<header style='text-align:center;'>";
$op .= "<img src='https://www.mavericksoftware.in/images/mlogo.png' style='width:100px'/>";
$op .= "<h2>Welcome Mail...(Maverick Software (I) Pvt Ltd.....!</h2>";
$op .= "</header>";
$op .= "<hr style='height:5px;background-color: #EA5C1F;border-color: #EA5C1F;'>";
$op .= "<div>";
$op .= "<div style='padding:20px 0 50px 0;'>";
$op .= "<section>";
$op .= "<h3 style='color:#EA5C1F;'>Hello, $contactName  <br /> <b>Greeting from Maverick Software India Pvt Ltd.</b>, <br />We have received your Enquiry. <br />For details please call us at the following numbers- +91 9373312667 / 87930 93020 <br />Thanking You .</h3>";
$op .= "</section>";
$op .= "<section style='text-align:left;margin-top:50px;'>";
$op .= "</section>";
$op .= "</div>";
$op .= "</div>";
$op .= "</div>";
$op .= "<footer style='text-align:center;'>";
$op .= "<section style='font-size:10px;color:#000000;padding:20px 0;background-color:#ffffff !important;'>";
$op .= "<img src='https://www.mavericksoftware.in/images/mlogo.png' style='width:100px'/>";
$op .= "<p><a href='https://www.mavericksoftware.in/'>mavericksoftware.in</a></p>";
$op .= "<p>1st Floor,Sarita Chambers, Above Punjab National Bank, Bibvewadi Kondwa Road, Pune-411037 (India)</p>";
$op .= "<p>Copyright &copy; <script>document.write(new Date().getFullYear())</script> Maverick Software(I) Pvt Ltd All Rights Reserved</p>";
$op .= "</section>";
$op .= "</footer>";
$op .= "</div>";
$op .= "</body>";

try {
    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'enquiry@mavericksoftware.in';
    $mail->Password = 'enquiry@1234';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;
    $mail->setFrom('msipl@mavericksoftware.in', 'MSIPL');
    $mail->addAddress($emailid, 'MSIPL');
    $mail->AddReplyTo('msipl@mavericksoftware.in', 'Reply to MSIPL');
    $mail->WordWrap = 50;
    $mail->isHTML(true);
    $mail->Subject = "no-reply";
    $mail->Body = $op;
    $mail->send();

    $data['message'] = "Mail Sent...!";
    print_r(json_encode($data));
} catch (Exception $e) {
    echo "<script>alert('Error: " . $mail->ErrorInfo . "'); </script>";
}
?>

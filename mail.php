<?php 
if(isset($_POST['submit'])){
    $to = "malka.nessy@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['first_name'];
    //$last_name = $_POST['last_name'];
    $subject = "Курс: Говорящая колода";
    $subject2 = "Copy of your form submission";
    $message = $first_name . " " . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];
	//$back ="<p><a href="index.html">Back to feedback form</a>.</p>"
	
	
    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    //mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Сообщение отправлено. Спасибо, " . $first_name . ", я отвечу вам в течение двух ближайших дней.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>
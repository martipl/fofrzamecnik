
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $jmeno = htmlspecialchars($_POST['jmeno']);
    $prijmeni = htmlspecialchars($_POST['prijmeni']);
    $email = htmlspecialchars($_POST['email']);
    $problem = htmlspecialchars($_POST['problem']);

    $to = "magictransportzamecnik@gmail.com";
    $subject = "Form Submission";
    $message = "Jméno: $jmeno\nPříjmení: $prijmeni\nEmail: $email\nPopis problému:\n$problem";
    $headers = "From: $email";
}
?>

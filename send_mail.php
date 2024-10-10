<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Získání dat z formuláře
    $name = htmlspecialchars(trim($_POST['name']));
    $address = htmlspecialchars(trim($_POST['address']));
    $phone = htmlspecialchars(trim($_POST['phone']));
    $chciumyt = isset($_POST['chciumyt']) ? implode(', ', $_POST['chciumyt']) : 'Žádná možnost nebyla vybrána';
    $message = htmlspecialchars(trim($_POST['message']));
    $consent = isset($_POST['consent']) ? 'Souhlas udělen' : 'Souhlas neudělen';

    // Nastavení emailu
    $to = "martinek.plic@gmail.com";
    $subject = "Nezávazná poptávka z webu";

    $body = "
    Jméno a příjmení: $name\n
    Město a adresa: $address\n
    Telefonní číslo: $phone\n
    Chci umýt: $chciumyt\n
    Zpráva: $message\n
    Souhlas se zpracováním osobních údajů: $consent\n
    ";

    $headers = "From: info@vasedomena.cz\r\n";
    $headers .= "Reply-To: $name <$phone>\r\n";
    $headers .= "Content-type: text/plain; charset=UTF-8\r\n";

    // Odeslání emailu
    if (mail($to, $subject, $body, $headers)) {
        echo "Vaše zpráva byla úspěšně odeslána. Děkujeme!";
    } else {
        echo "Došlo k chybě při odesílání zprávy. Zkuste to prosím znovu.";
    }
}
?>

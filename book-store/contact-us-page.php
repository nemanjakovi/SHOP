<?php
session_start();
require __DIR__ . "/lib/Class-contact.php";
//PAGE
$pageTitlee = "contact_us";
$systemErrors = [];

try {
    if (isset($_POST["send"])) {


        $systemErrors = [];
        //VALIDATION CONTACT NAME
        $name = (string) $_POST["name"];
        $name = htmlspecialchars(trim($name));
        if (empty($name)) {
            $systemErrors['name'] = "Field name is required!";
        } else if (strlen(!preg_match("/[A-Za-z]+/", $name))) {

            $systemErrors['name'] = "Only letters allowed!";
        }

        //  CONTACT EMAIL
        $email = (string) $_POST['email'];
        $email = trim($email);
        if (empty($email)) {
            $systemErrors['email'] = "Field email is required!";
        } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $systemErrors['email'] = "Invalid email address";
        }

        //VALIDATION CONTACT MESSAGE
        $message = (string) $_POST["message"];
        if (empty($message)) {
            $systemErrors['message'] = "Field message is required!";
        } elseif (strlen($message) > 150) {
            $systemErrors['message'] = "Field must be less than 150 characters!";
        }
        if (empty($systemErrors)) {
            $contact = new Contact($name, $email, $message);
            $contact->sendMessage();
        }
    }
} catch (Throwable $th) {
    //throw $th;
}


require __DIR__ . "/views/_layout/v-header.php";



// PAGE
require __DIR__ . "/views/v-cotact-us-page.php";

// FOOTER
require __DIR__ . "/views/_layout/v-footer.php";

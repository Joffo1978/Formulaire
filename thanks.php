<?php
if($_SERVER['REQUEST_METHOD'] === 'POST') {

$prenom = htmlspecialchars($_POST['user_name']);
$nom=htmlspecialchars($_POST['first_name']);
$sujet=htmlspecialchars($_POST['sujet']);
$email=htmlspecialchars($_POST["user_email"]);
$tel=htmlspecialchars($_POST["user_tel"]);
$message=htmlspecialchars($_POST["user_message"]);

$errors = [];


        // nettoyage et validation des données soumises via le formulaire 
        if(!isset($_POST['user_name']) || trim($_POST['user_name']) === '') 
            $errors[] = "Le nom est obligatoire";
        if(!isset($_POST['first_name']) || trim($_POST['first_name']) === '') 
            $errors[] = "Le prénom est obligatoire";
        if(!isset($_POST['sujet']) || trim($_POST['sujet']) === '') 
            $errors[] = "La sujet est obligatoire";
        if(!isset($_POST['sujet']) || trim($_POST['sujet']) === '') 
            $errors[] = "La sujet est obligatoire";
        if(!isset($_POST['user_tel'])) 
            $errors[] = "Le telephone est obligatoire";    
        if((!isset($_POST['user_email']) || trim($_POST['user_email']) === '')  && FILTER_VALIDATE_EMAIL($email, FILTER_VALIDATE_EMAIL))
            $errors[] = "L'email est obligatoire";
        if(!isset($_POST['user_message']) || trim($_POST['user_message']) === '') 
            $errors[] = "Le message est obligatoire";

        if(empty($errors)) {
    

echo "Merci ". $prenom. " " . $nom . " de nous avoir contacté à propos de ". $sujet.'<br>';

echo "Un de nos conseillers vous contactera soit à l"."’" ."adresse " . $email . " ou par téléphone au " . $tel . " dans les plus brefs délais pour traiter votre demande :".'<br>'; 
echo $message;
        }else{
var_dump ($errors); 
    }

}

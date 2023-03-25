<?php
$errors = [];
$subjectList = [
    "renseignements",
    "inscription",
    "reclamation",
    "retour",
];
var_dump($_POST);

if (!isset($_POST['lastName']) || trim($_POST['lastName']) === '') {
    $errors[] = "Veuillez entrer votre nom";
}
if (!isset($_POST['firstName']) || trim($_POST['firstName']) === '') {
    $errors[] = "Veuillez entrer votre prénom";
}
if (!isset($_POST['userEmail']) || trim($_POST['userEmail']) === '') {
    $errors[] = "Veuillez entrer votre adresse mail";
}
if (!filter_var($_POST['userEmail'], FILTER_VALIDATE_EMAIL)) {
    $errors[] = "Veuillez entrer une adresse mail valide";
}
if (!isset($_POST['phoneNumber']) || trim($_POST['phoneNumber']) === '') {
    $errors[] = "Veuillez entrer votre numéro de téléphone";
}
if (!isset($_POST['subject']) || !in_array($_POST['subject'], $subjectList)) {
    $errors[] = "Veuillez choisir un sujet dans la liste";
}
if (!isset($_POST['userMessage']) || trim($_POST['userMessage']) === '') {
    $errors[] = "Veuillez entrer un message";
}
var_dump($errors);
?>
<ul>
    <?php foreach($errors as $error) {
        ?><li><?php echo($error);?></li>
    <?php }?>
</ul>

<p>Merci <?php echo($_POST['lastName']. " " .$_POST['firstName'])?> de nous avoir contacté à propos de "<?php echo($_POST['subject'])?>".</p>
<p>Un de nos conseillers vous contactera soit à l'adresse <?php echo($_POST['userEmail'])?> ou par téléphone au <?php echo($_POST['phoneNumber'])?> dans les plus brefs delais pour</p>
<p>traiter votre demande :</p><br><br>
<p><?php echo($_POST['userMessage'])?></p>








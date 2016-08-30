<?php

try
{
    $bdd = new PDO('mysql:host=localhost;dbname=phptest;charset=utf8','root','facesimplon');
}
catch(Exception $e)

{
    die('Erreur: '. $e->getMessage());
}

    $usermail = $_POST['usermail'];
    $username = $_POST['username'];
    $subject = $_POST['subject'];
    $content = $_POST['content'];

$req = $bdd->prepare("INSERT INTO contact(user, usermail, subject, content) VALUES(:username,:usermail,:subject,:content)");

    $req->bindParam(':usermail', $usermail);
    $req->bindParam(':username', $username);
    $req->bindParam(':subject', $subject);
    $req->bindParam(':content', $content);

    $req->execute();

echo "my job is done";

?>
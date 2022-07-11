<?php
session_start();
require 'Connexion.php';

if(isset($_POST['delete_student']))
{
    $student_id = mysqli_real_escape_string($con, $_POST['delete_student']);

    $query = "DELETE FROM students WHERE id='$student_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Student Deleted Successfully";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Student Not Deleted";
        header("Location: index.php");
        exit(0);
    }
}

if(isset($_POST['update_student']))
{
    $student_id = mysqli_real_escape_string($con, $_POST['student_id']);

    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $course = mysqli_real_escape_string($con, $_POST['course']);

    $query = "UPDATE students SET name='$name', email='$email', phone='$phone', course='$course' WHERE id='$student_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Student Updated Successfully";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Student Not Updated";
        header("Location: index.php");
        exit(0);
    }

}


if(isset($_POST['enregistrer']))
{
    $nom = mysqli_real_escape_string($con, $_POST['nom']);
    $prenom = mysqli_real_escape_string($con, $_POST['prenom']);
    $matricule = mysqli_real_escape_string($con, $_POST['matricule']);
    $comment = mysqli_real_escape_string($con, $_POST['comment']);
    $service = mysqli_real_escape_string($con, $_POST['service']);
    $Objetdemande = mysqli_real_escape_string($con, $_POST['Objetdemande']);
    $datedepot = mysqli_real_escape_string($con, $_POST['datedepot']);
    

    $query = "INSERT INTO agent (nom,prenom,Matricule_Agent,Commentaire,service,Objet_Demande,Date_depot) VALUES ('$nom','$prenom','$matricule','$comment','$service','$Objetdemande','$datedepot')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        echo "string1";
    }
    else
    {
        echo "string2";
    }
}

?>
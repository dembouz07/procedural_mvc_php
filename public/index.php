<a href="index.php">Home</a>
<a href="index.php?page=etudiant">Etudiant</a>
<a href="index.php?page=cours">Cours</a>
<?php
    require '../app/models/database.php';
    require '../app/models/Cours.php';
    require '../app/models/Etudiant.php';

    require '../app/controllers/CoursController.php';
    require '../app/controllers/EtudiantController.php';

    if (isset($_GET['page'])) {
        if($_GET['page'] == 'etudiant'){
            Etudiant();
        }

        if($_GET['page'] == 'cours'){
            Cours();
        }
    }else{
        ?>
            <h1>GESTION UNIVERSITAIRE</h1>
        <?php
    }

?>


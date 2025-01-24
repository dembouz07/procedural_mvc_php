<a href="index.php">Home</a>
<a href="index.php?page=etudiant">Etudiant</a>
<a href="index.php?page=cours">Cours</a>
<?php
    require '../models/database.php';
    require '../models/Cours.php';
    require '../models/Etudiant.php';

    require '../controllers/CoursController.php';
    require '../controllers/EtudiantController.php';

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


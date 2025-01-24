<?php

    if(isset($_GET['action'])){
        if($_GET['page'] == 'etudiant' && $_GET['action'] == 'addEtudiant'){
            createEtudiant();
        }

        if($_GET['page'] == 'etudiant' && $_GET['action'] == 'editEtudiant'){
            editEtudiant();
        }

        if($_GET['page'] == 'etudiant' && $_GET['action'] == 'saveEtudiant'){
            storeEtudiant();
        }

        if($_GET['page'] == 'etudiant' && $_GET['action'] == 'updateEtudiant'){
            updateEtudiants();
        }

        if($_GET['page'] == 'etudiant' && $_GET['action'] == 'deleteEtudiant'){
            deleteEtudiant();
        }
    }else{
        indexEtudiant();
    }

?>
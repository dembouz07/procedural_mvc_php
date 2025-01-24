<?php

    if(isset($_GET['action'])){
        if($_GET['page'] == 'cours' && $_GET['action'] == 'addCours'){
            createCours();
        }

        if($_GET['page'] == 'cours' && $_GET['action'] == 'editCours'){
            editCours();
        }

        if($_GET['page'] == 'cours' && $_GET['action'] == 'saveCours'){
            storeCours();
        }

        if($_GET['page'] == 'cours' && $_GET['action'] == 'updateCours'){
            updateCourss();
        }

        if($_GET['page'] == 'cours' && $_GET['action'] == 'deleteCours'){
            deleteCours();
        }
    }else{
    indexCours();
    }

?>
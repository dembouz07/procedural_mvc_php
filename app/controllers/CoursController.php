<?php

function Cours(){
    require '../views/cours/index.php';
}

function indexCours(){
    $cours = getAllCours();
    require '../views/cours/show.php';
}

function createCours(){
    require '../views/cours/create.php';
}

function storeCours(){
    extract($_POST);
    insertCours($nomCours, $code, $nb_heure);
    header("location:index.php?page=cours");
}

function editCours(){
    $cours = getCoursById($_GET['id']);
    require '../views/cours/edit.php';
}

function updateCourss(){
    extract($_POST);
    updateCours($idCours, $nomCours, $code, $nb_heure);
    header("location:index.php?page=cours");
}

function deleteCours(){
    deleteCoursById($_GET['id']);
    header("location:index.php?page=cours");
}
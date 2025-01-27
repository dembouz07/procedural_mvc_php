<?php

function Etudiant(){
    require '../app/views/etudiants/index.php';
}

function indexEtudiant(){
    $etudiants = getAllEtudiant();
    require '../app/views/etudiants/show.php';
}

function createEtudiant(){
    require '../app/views/etudiants/create.php';
}

function storeEtudiant(){
    extract($_POST);
    insertEtudiant($nomEtu, $prenomEtu, $emailEtu, $filiere);
    header("location:index.php?page=etudiant");
}

function editEtudiant(){
    $etudiant = getEtudiantById($_GET['id']);
    require '../app/views/etudiants/edit.php';
}

function updateEtudiants(){
    extract($_POST);
    updateEtudiant($idEtu, $nomEtu, $prenomEtu, $emailEtu, $filiere);
    header("location:index.php?page=etudiant");
}

function deleteEtudiant(){
    $id = $_GET['id'];
    deleteEtudiantById($id);
    header("location:index.php?page=etudiant");
}
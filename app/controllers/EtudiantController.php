<?php

function Etudiant(){
    require '../views/etudiants/index.php';
}

function indexEtudiant(){
    $etudiants = getAllEtudiant();
    require '../views/etudiants/show.php';
}

function createEtudiant(){
    require '../views/etudiants/create.php';
}

function storeEtudiant(){
    extract($_POST);
    insertEtudiant($nomEtu, $prenomEtu, $emailEtu, $filiere);
    header("location:index.php?page=etudiant");
}

function editEtudiant(){
    $etudiant = getEtudiantById($_GET['id']);
    require '../views/etudiants/edit.php';
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
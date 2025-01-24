<?php

function getAllEtudiant(){
    global $connexion;

    $query = "SELECT * FROM etudiants order by id asc";
    $result = pg_query($connexion, $query);
    return $result;
}

function getEtudiantById($id){
    global $connexion;

    $query = "SELECT * FROM etudiants WHERE id = $id";
    $result = pg_query($connexion, $query);
    return pg_fetch_assoc($result);
}

function insertEtudiant($nom, $prenom, $email, $filiere){
    global $connexion;

    $query = "INSERT INTO etudiants (nom, prenom, email, filiere) VALUES ('$nom', '$prenom', '$email', '$filiere')";
    pg_query($connexion, $query);
}

function updateEtudiant($id, $nom, $prenom, $email, $filiere){
    global $connexion;

    $query = "UPDATE etudiants SET nom = '$nom', prenom = '$prenom', email = '$email', filiere = '$filiere' WHERE id = $id";
    pg_query($connexion, $query);
}

function deleteEtudiantById($id){
    global $connexion;

    $query = "DELETE FROM etudiants WHERE id = $id";
    pg_query($connexion, $query);
}
<?php

function getAllCours(){
    global $connexion;

    $query = "SELECT * FROM cours order by id asc";
    $result = pg_query($connexion, $query);
    return $result;
}

function getCoursById($id){
    global $connexion;

    $query = "SELECT * FROM cours WHERE id = $id";
    $result = pg_query($connexion, $query);
    return pg_fetch_assoc($result);
}

function insertCours($nom, $code, $nb_heure){
    global $connexion;

    $query = "INSERT INTO cours (nom, code, nb_heure) VALUES ('$nom', '$code', $nb_heure)";
    pg_query($connexion, $query);
}

function updateCours($id, $nom, $code, $nb_heure){
    global $connexion;

    $query = "UPDATE cours SET nom = '$nom', code = '$code', nb_heure = $nb_heure WHERE id = $id";
    pg_query($connexion, $query);
}

function deleteCoursById($id){
    global $connexion;

    $query = "DELETE FROM cours WHERE id = $id";
    pg_query($connexion, $query);
}
<h1>Modifier un etudiant</h1>
<form action="?page=etudiant&action=updateEtudiant" method="post">
    <label for="">ID</label>
    <input type="text" name="idEtu" id="" value="<?= $etudiant['id'] ?>" readOnly><br><br>
    <label for="">NOM</label>
    <input type="text" name="nomEtu" id="" value="<?= $etudiant['nom'] ?>"><br><br>
    <label for="">PRENOM</label>
    <input type="text" name="prenomEtu" id="" value="<?= $etudiant['prenom'] ?>"><br><br>
    <label for="">EMAIL</label>
    <input type="email" name="emailEtu" id="" value="<?= $etudiant['email'] ?>"><br><br>
    <label for="">FILIERE</label>
    <input type="text" name="filiere" id="" value="<?= $etudiant['filiere'] ?>"><br><br>
    <button type="submit">SAVE</button>
</form>
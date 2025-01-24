<h1>Modifier un cours</h1>
<form action="?page=cours&action=updateCours" method="post">
    <label for="">ID</label>
    <input type="text" name="idCours" id="" value="<?= ($cours ? $cours['id']:'') ?>" readOnly><br><br>
    <label for="">NOM</label>
    <input type="text" name="nomCours" id="" value="<?= ($cours ? $cours['nom']:'') ?>"><br><br>
    <label for="">CODE</label>
    <input type="text" name="code" id="" value="<?= ($cours ? $cours['code']:'') ?>"><br><br>
    <label for="">NOMBRE D'HEURE</label>
    <input type="number" name="nb_heure" id="" value="<?= ($cours ? $cours['nb_heure']:'') ?>"><br><br>
    <button type="submit">SAVE</button>
</form>
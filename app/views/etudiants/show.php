<a href="?page=etudiant&action=addEtudiant">
    <br><button type="button">ADD</button>
</a>
<table>
    <tr>
        <td>ID</td>
        <td>NOM</td>
        <td>PRENOM</td>
        <td>EMAIL</td>
        <td>FILIERE</td>
        <td>ACTIONS</td>
    </tr>
    <?php while($etudiant = pg_fetch_assoc($etudiants)) { ?>
    <tr>
        <td><?= $etudiant['id'] ?></td>
        <td><?= $etudiant['nom'] ?></td>
        <td><?= $etudiant['prenom'] ?></td>
        <td><?= $etudiant['email'] ?></td>
        <td><?= $etudiant['filiere'] ?></td>
        <td>
            <a href="?page=etudiant&action=editEtudiant&id=<?= $etudiant['id'] ?>">EDIT</a>
            <a href="?page=etudiant&action=deleteEtudiant&id=<?= $etudiant['id'] ?>">DELETE</a>
        </td>
    </tr>
    <?php } ?>

</table>
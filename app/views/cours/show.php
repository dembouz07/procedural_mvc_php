<a href="?page=cours&action=addCours">
    <br><button type="button">ADD</button>
</a>
<table>
    <tr>
        <td>ID</td>
        <td>NOM</td>
        <td>CODE</td>
        <td>NB HEURE</td>
        <td>ACTIONS</td>
    </tr>
    <?php while($c = pg_fetch_assoc($cours)) { ?>
    <tr>
        <td><?= $c['id'] ?></td>
        <td><?= $c['nom'] ?></td>
        <td><?= $c['code'] ?></td>
        <td><?= $c['nb_heure'] ?></td>
        <td>
            <a href="?page=cours&action=editCours&id=<?= $c['id'] ?>">EDIT</a>
            <a href="?page=cours&action=deleteCours&id=<?= $c['id'] ?>">DELETE</a>
        </td>
    </tr>
    <?php } ?>

</table>
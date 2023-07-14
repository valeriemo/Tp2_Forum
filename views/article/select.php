<h2>Forum</h2>
<table class="listing">
    <thead>
        <tr>
            <th>Titre</th>
            <th>Article</th>
            <th>User id</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($data as $row){ ?>
            <tr>
                <td><?= ucfirst($row['title']); ?> </td>
                <td><?= ucfirst($row['text']); ?> </td>
                <td><?= ucfirst($row['name']); ?> </td>
            </tr>
        <?php } ?>

    </tbody>
</table>
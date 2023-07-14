

<h2 class="sous-titre petit">Last post</h2>
<table>
    <thead>
        <tr>
            <th>Date</th>
            <th>Title</th>
            <th>Text</th>
            <th>Author</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($data as $row){ ?>
            <tr>
                <td><?= date('l', strtotime($row['date'])) . '</br><small>' .  $row['date'] . '</small>'; ?></td>
                <td><?= ucfirst($row['title']) ; ?> </td>
                <td><?= ucfirst($row['text']) ; ?> </td>
                <td><?= ucfirst($row['name']) ; ?> </td>
            </tr>
        <?php } ?>

    </tbody>
</table>








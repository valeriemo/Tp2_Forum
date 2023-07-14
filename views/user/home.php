<div >
    <h1 class="sous-titre" >Welcome <?= ucfirst($_SESSION['name']); ?>,</h1>
</div>

<h4 class="sous-titre petit">Your last posts</h4>


<?php if ($data == "You don't have any post yet!") : ?>
    <span><?php echo $data; ?></span>
<?php else : ?>
    <?php echo "
    <table>
    <thead>
        <tr>
            <th>Date</th>
            <th>Titre</th>
            <th>Article</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
    "; ?>
        <?php
        $aArticle = [];
        foreach ($data as $row) :
            $id = $row[0];
            $title = $row[1];
            $text = $row[2];
            $date = $row[3];
            $idUser = $row[4];

            $aArticle[] = [
                'id' => $id,
                'title' => $title,
                'text' => $text,
                'date' => $date,
                'idUser' => $idUser
            ];
        ?>
        <tr> 
            <td><?= date('l', strtotime($date)) . '</br><small>' .  $date . '</small>'; ?></td>
            <td><?= ucfirst($title); ?></td>
            <td><?= ucfirst($text); ?></td>
            <td><a href="<?php echo "?module=article&action=edit&id=$id"; ?>"><button class='bouton'>Edit</button></a></td>
            <td><a href="<?php echo "?module=article&action=delete&id=$id"; ?>"><button class='bouton'>Delete</button></a></td>
        </tr>
        <?php endforeach; ?>
    <?php echo "
    </tbody>
</table>
    "; ?>
<?php endif; ?>









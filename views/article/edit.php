<div class="container">
    <h2 class="sous-titre petit">Update your post</h2>

    <form action="?module=article&action=update" method="post">
        <label>
            Title :
            <input required maxlength="60" type="text" name="title" value="<?=$data['title']?>">
        </label>
        <label>
            Text :
            <input class="text" required type="text" name="text" value="<?= $data['text']?>">
        </label>
        <input type="hidden" name="date" value="<?php echo date('Y-m-d') ?>">
        <input type="hidden" name="id" value="<?= $data['id'] ?>">
        <input class="bouton" type="submit" value="post">
        <input type="hidden" name="idUser" value="<?= $data['idUser_id']?>">
    </form>
</div>

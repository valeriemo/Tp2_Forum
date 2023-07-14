
<div class="container">
    <h2 class="sous-titre petit">Create a new post</h2>
    <form action="?module=article&action=store" method="post">
        <label>
            Title :
            <input required maxlength="100" minlength="5" type="text" name="title">
        </label>
        <label>
            Text :
            <input class="text" required type="text" maxlength="1000" name="text">
        </label>
            <input class="bouton" type="submit" value="post">
            <input type="hidden" name="date" value="<?php echo date('Y-m-d') ?>">
            <input type="hidden" name="idUser" value="<?= $_SESSION['idUser']; ?>">
    </form>
</div>

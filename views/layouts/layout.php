<?php 
$connected = isset($_SESSION['fingerPrint']) && $_SESSION['fingerPrint'] === md5($_SERVER['HTTP_USER_AGENT'] . $_SERVER['REMOTE_ADDR']);

$txtConnexion = $connected ? "Déconnexion" : "Connexion";
$action = $connected ? "logout" : "login";
$hidden = $connected ? "block" : "hidden";
$block = $connected ? "hidden" : "block";


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MVC</title>
    <link rel="stylesheet" href="resources/css/style.css">
</head>
<body>
    <nav>


        <div>
        <a href="index.php">&#128378;<span class="title">Class forum</span></a>
        </div>
        <div>
            <a class="<?php echo $hidden ?>" href="?module=article&action=create"><button class="bouton">New post</button></a>
            <a class="<?php echo $hidden ?>" href="?module=user&action=home"><button class="bouton">My post</button></a>
            <a class="<?php echo $block ?>" href="?module=user&action=create"><button class="bouton">New user</button></a>
            <a href="?module=user&action=<?php echo $action ?>"><button class="bouton"><?php echo $txtConnexion ?></button></a>
        </div>
    </nav>

    <main>
        <?php echo $content; ?>
    </main>
</body>

<footer>
<i>Welcome</i>
<p>MVC framework</p>
</footer>

</html>



















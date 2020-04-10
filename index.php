<html>
    <head>
        <title>connexion</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
    <?php include('header.php')?>
        <div class="cadre">
            <div class="header_cadre">
                <p>Login Form</p>
            </div>
            <div class="login">
                <input type="text" name="login" id="" placeholder="Login" class="login">
                <img src="Images/Icônes/ic-login.png" alt="login" class="img">
            </div>
            <div class="pwd">
                <input type="password" name="password" placeholder="Password" id="" class="pwd">
                <img src="Images/Icônes/ic-password.png" alt="login" class="img">
            </div>
            <div class="bas">
                <div class="bouton"><input type="submit" name="connexion" value="Connexion" id="" class="bouton"></div>
                <div class="lien"><a href="inscrire.php">S'inscrire pour jouer ?</a></div>
            </div>
        </div>
    </body>
</html>
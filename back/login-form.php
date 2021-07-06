<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/header-admin.css">
    <link rel="stylesheet" href="../styles/style-admin.css">
    <title>inscription</title>
</head>
<body>

<div class="bandeauHeader">
    
    <a href="../pages/admin.php">RETOUR</a>
    
    <a href="../pages/index.php">ADMIN</a>
    

</div>

    <form action="login-form-handler.php" method="post" id="form_admin">
        <div>
            <label for="input-username">nom d'utilisateur</label>
            <input type="name" name="username" id="input-username" required>
        </div>
        <div>
            <label for="input-username">password</label>
            <input type="password" name="password" id="input-password" required>
        </div>
        <div>
        <div>
            <input type="submit" id="submit" value="s'inscrire"><span id="error"></span>
        </div>
    </form>

    <script src="../scripts/main-admin.js"></script>
    
    
    
    <?php include "../includes/footer-admin.php"; ?>

</body>
</html>
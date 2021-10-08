<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php require "templates/header.php"; ?>

    <main class="admin-main">
        <?php if( isset( $_SESSION['user'] ) ): ?>
            <h2>Welcome</h2>
        <?php else: ?>
            <form action="<?php echo htmlspecialchars( $_SERVER["PHP_SELF"] ); ?>" method="POST">
                <label for="user">User</label>
                <input type="text" name="user" id="user">
    
                <label for="password">Password</label>
                <input type="password" name="password" id="password">
    
                <input type="submit" name="submit" value="Access">
            </form>
        <?php endif; ?>
    </main>

    <?php require "templates/footer.php"; ?>
</body>
</html>
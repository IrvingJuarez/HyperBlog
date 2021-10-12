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
            <section class="panel-control-main">
                <article class="admin-main_header">
                    <h2>Welcome, <?php echo $_SESSION['user']; ?></h2>
                    <span class="hamburger-btn">
                        <i class="fas fa-bars fa-lg"></i>

                        <ul class="admin-header-menu">
                            <li><a class="logout" href="logout.php">Logout</a></li>
                            <li><a href="new-article.php">Create a new one</a></li>
                        </ul>
                    </span>
                </article>

                <article class="admin-main_body">
                    <div class="admin_body_header">
                        <h2>Current Articles</h2>
                    </div>

                    <div class="admin_body_content">
                        <?php echo $articlesList ?? ""; ?>
                    </div>
                </article>
            </section>
        <?php else: ?>
            <form action="<?php echo htmlspecialchars( $_SERVER["PHP_SELF"] ); ?>" method="POST">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" value="<?php echo $email ?? ""; ?>">
    
                <label for="password">Password</label>
                <input type="password" name="password" id="password" value="<?php echo $password ?? ""; ?>">
    
                <?php
                    if( isset( $_POST['submit'] ) ){

                        nonEmpty($email, "Email");
                        nonEmpty($password, "Password");

                        if( empty($errors) ){
                            $_POST['email'] = clear($email);
                            $_POST['password'] = clear($password);
                            connect();
                        }else{
                            echo $errors;
                        }
                    }
                ?>

                <input type="submit" name="submit" value="Access">
            </form>
        <?php endif; ?>
    </main>

    <?php require "templates/footer.php"; ?>
</body>
</html>
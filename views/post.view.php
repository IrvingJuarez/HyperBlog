<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php require "templates/header.php"; ?>

    <main class="post-main">
        <?php if( !empty($errors) ): ?>
            <?php echo $errors; ?>
        <?php else: ?>
            <section class="post-header">
                <h2><?php echo $article['title']; ?></h2>
                <nav>
                    <span><i class="fas fa-user"></i> Irving Juárez, </span>
                    <i><?php echo dateFormat($article['date']); ?></i>
                </nav>
            </section>
            <section class="post-body">
                <article class="body_img-container">
                    <img src="<?php echo $article['img']; ?>" alt="<?php echo $article['title']; ?>">
                </article>
    
                <p><?php echo nl2br( $article["content"] ); ?></p>
            </section>
        <?php endif; ?>
    </main>

    <?php require "templates/footer.php"; ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php require "templates/header.php"; ?>

    <main class="new-article_main">
        <?php if( !empty($errors) ): ?>
            <?php echo $errors; ?>
        <?php else: ?>
            <?php while($article = $result->fetch_assoc()): ?>
                <h2>Edit</h2>
                <form action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF'] ); ?>" method="POST" enctype="multipart/form-data">
                    <section>
                        <label for="title">Title</label>
                        <input type="text" name="title" id="title" value="<?php echo $article['title']; ?>">
                    </section>
        
                    <section>
                        <label for="content">Content</label>
                        <textarea name="content" id="content"><?php echo $article['content']; ?></textarea>
                    </section>
        
                    <section>
                        <label for="photo">Add an image for the cover</label>
                        <article class="new-post_cover-img">
                            <img src="<?php echo $article['img']; ?>" alt="">
                        </article>
                        <input type="file" name="photo" id="photo" value="<?php echo $article['img']; ?>">
                    </section>
        
                    <section>
                        <?php
        
                            if( isset($_POST['upload']) ){
                                nonEmpty($title, "Title");
                                nonEmpty($content, "Content");
        
                                if($errors){
                                    echo $errors;
                                }else{
                                    upload($title, $content);
                                }
                            }
        
                        ?>
                    </section>
        
                    <div class="new-article_form-btns">
                        <input type="submit" name="upload" value="Upload">
                        <!-- <input type="button" name="save" value="Save"> -->
                    </div>
                </form>
            <?php endwhile; ?>
        <?php endif; ?>
    </main>

    <?php require "templates/footer.php" ?>
</body>
</html>
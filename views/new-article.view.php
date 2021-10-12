<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create a new article</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php require "templates/header.php"; ?>

    <main class="new-article_main">
        <a class="new-article_return-arrow" href="admin.php"><i class="fas fa-arrow-left fa-lg"></i></a>
        <h2>Create a new post</h2>
        <form action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF'] ); ?>" method="POST">
            <section>
                <label for="title">Title</label>
                <input type="text" name="title" id="title" placeholder="Add a title" value="<?php echo $title ?? ""; ?>">
            </section>

            <section>
                <label for="content">Content</label>
                <textarea name="content" id="content" placeholder="Add the content"><?php echo $content ?? ""; ?></textarea>
            </section>

            <section>
                <label for="img">Add an image for the cover</label>
                <article class="new-post_cover-img"><i class="fas fa-camera fa-2x"></i></article>
                <input type="file" name="img" id="img">
            </section>

            <section>
                <?php

                    if( isset($_POST['upload']) ){
                        nonEmpty($title, "Title");
                        nonEmpty($content, "Content");

                        if($errors){
                            echo $errors;
                        }else{
                            echo "OK";
                        }
                    }

                ?>
            </section>

            <div class="new-article_form-btns">
                <input type="submit" name="upload" value="Upload">
                <!-- <input type="button" name="save" value="Save"> -->
            </div>
        </form>
    </main>

    <?php require "templates/footer.php"; ?>
</body>
</html>
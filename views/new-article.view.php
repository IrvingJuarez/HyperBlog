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
        <form action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF'] ); ?>" method="POST">
            <section>
                <label for="title">Title</label>
                <input type="text" name="title" id="title" placeholder="Add a title">
            </section>

            <section>
                <label for="content">Content</label>
                <textarea name="content" id="content" placeholder="Add the content"></textarea>
            </section>

            <section>
                <label for="img">Add an image for the cover</label>
                <input type="file" name="img" id="img">
            </section>

            <section>
                <input type="submit" name="upload" value="Upload">
                <input type="button" name="save" value="Save">
            </section>
        </form>
    </main>

    <?php require "templates/footer.php"; ?>
</body>
</html>
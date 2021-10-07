<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php require "templates/header.php"; ?>

    <main class="main-index">
        <section class="index_card">
            <article class="index_card-content">
                <a href="post.php">
                    <div class="card-content_img-container">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRLVq5gKeP5kmrMJvbix207u-bWF3YD2mLdh4yc60hiKtbW0nIXbwEsuNmpVwV2zXXnEl8&usqp=CAU" alt="">
                    </div>
                </a>
                <div class="card-content_text">
                    <h3><a href="post.php">The crypto revolution</a></h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis ratione culpa quibusdam architecto velit amet voluptates. Ex, architecto? Ipsum incidunt sit illo. Culpa, voluptatum! Accusamus ad hic illo officia veritatis.
                    </p>

                    <span class="text-info"><a href="author.php">Author</a>, <i>1/12/2019</i></span>
                </div>
            </article>

            <article class="index_card-status">
                <ul class="status_ul">
                    <li>
                        <i class="far fa-heart"></i>
                        <p>10</p>
                    </li>
                    <li>
                        <i class="far fa-comment"></i>
                        <p>9</p>
                    </li>
                </ul>

                <a href="post.php" class="status_anchor">See the post<i class="fa fa-arrow-right"></i></a>
            </article>
        </section>
    </main>

    <?php require "templates/footer.php"; ?>
</body>
</html>
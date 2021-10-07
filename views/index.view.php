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
                <div class="card-content_img-container">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRLVq5gKeP5kmrMJvbix207u-bWF3YD2mLdh4yc60hiKtbW0nIXbwEsuNmpVwV2zXXnEl8&usqp=CAU" alt="">
                </div>
                <div class="card-content_text">
                    <h3>The crypto revolution</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis ratione culpa quibusdam architecto velit amet voluptates. Ex, architecto? Ipsum incidunt sit illo. Culpa, voluptatum! Accusamus ad hic illo officia veritatis.
                    </p>

                    <span class="text-info">Author, <i>1/12/2019</i></span>
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

                <a class="status_anchor">See the post<i class="fa fa-arrow-right"></i></a>
            </article>
        </section>
    </main>

    <?php require "templates/footer.php"; ?>
    <script src="https://kit.fontawesome.com/d125d34573.js" crossorigin="anonymous"></script>
</body>
</html>
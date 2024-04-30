<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include "cdn.php" ?>
</head>

<body>
    <div class="container">
        <header class="d-flex justify-content-center py-3">
            <ul class="nav nav-pills">
                <li class="nav-item">
                    <a href="#" class="nav-link active" aria-current="page">Home</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Features</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Pricing</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">FAQs</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">About</a>
                </li>
            </ul>
        </header>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="index.php" method="post">
                                <div class="input-group mb-3">
                                    <input type="text" name="query" class="form-control" placeholder="Search for recipes" aria-label="Search for recipes" aria-describedby="button-addon2">
                                    <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Search</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <?php
                $data = require_once 'functions/search.php';
                foreach ($data['results'] as $recipe) {
                ?>
                    <div class="col-md-4 mt-3">
                        <div class="card text-center">
                            <img src="<?php echo $recipe['image']; ?>" alt="<?php echo $recipe['title']; ?>" class="card-img-top"><br>
                            <div class="card-body">
                                <h5 class="card-title text-align"><?php echo $recipe['title']; ?></h5>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>

        </div>
    </div>
</body>

</html>
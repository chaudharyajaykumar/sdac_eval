<?php
include 'db.php';

if (!isset($_SESSION['id'])) {
    header(('Location:login.php'));
}

$result = $con->query("select * from menu");

?>














<!doctype html>
<html lang="en" data-bs-theme="light">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS v5.3.8 -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
        crossorigin="anonymous" />
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-sm navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <h2>RMS</h2>
                </a>
                <button
                    class="navbar-toggler d-lg-none"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapsibleNavId"
                    aria-controls="collapsibleNavId"
                    aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                        <li class="nav-item">
                            <a
                                class="nav-link active"
                                href="dashboard.php"
                                aria-current="page">Home <span class="visually-hidden">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="add.php">add</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="view.php">view</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="epdf.php">pdf</a>
                        </li>
                    </ul>
                    <form class="d-flex my-2 my-lg-0" action="logout.php">
                        <button
                            class="btn btn-outline-success my-2 my-sm-0"
                            type="submit">
                            Logout
                        </button>
                    </form>
                </div>
            </div>
        </nav>
    </header>
    <main>

        <div
            class="container">
            <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
                <ol class="carousel-indicators">
                    <li
                        data-bs-target="#carouselId"
                        data-bs-slide-to="0"
                        class="active"
                        aria-current="true"
                        aria-label="First slide"></li>
                    <li
                        data-bs-target="#carouselId"
                        data-bs-slide-to="1"
                        aria-label="Second slide"></li>
                    <li
                        data-bs-target="#carouselId"
                        data-bs-slide-to="2"
                        aria-label="Third slide"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <img
                            src="materail/c1.jpg"
                            height="300px"
                            width="100%"
                            class="w-100 d-block"
                            alt="First slide" />
                        <div class="carousel-caption d-block text-danger d-md-block">
                            <h3>food 1</h3>
                            <p>special offer:20 % discount</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img
                            src="materail/c2.jpg"
                            height="300px"
                            width="100%" class="w-100 d-block"
                            alt="Second slide" />
                        <div class="carousel-caption d-block text-danger d-md-block">
                            <h3>food 2</h3>
                            <p>special offer:10 % discount</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img
                            src="materail/c3.webp"
                            height="300px"
                            width="100%" class="w-100 d-block"
                            alt="Third slide" />
                        <div class="carousel-caption d-block text-danger d-md-block">
                            <h3>food 3</h3>
                            <p>special offer:5 % discount</p>
                        </div>
                    </div>
                </div>
                <button
                    class="carousel-control-prev"
                    type="button"
                    data-bs-target="#carouselId"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button
                    class="carousel-control-next"
                    type="button"
                    data-bs-target="#carouselId"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

        </div>

        <div
            class="container py-2 my-3 rounded border ">
            <div
                class="row justify-content-center align-items-center g-2">
                <?php while ($row = $result->fetch_assoc()) { ?>
                    <div class="col-3">
                        <div class="card">
                            <img class="card-img-top" src="images/<?= $row['image'] ?>" alt="Title" />
                            <div class="card-body">
                                <small class=""><?= $row['iname'] ?></small>
                                <h4 class="card-title"><?= $row['price'] ?></h4>
                                <p class="card-text"><?= $row['category'] ?></p>
                                <a
                                    class="p-2 rounded border"
                                    name=""
                                    id=""
                                    class="btn btn-primary"
                                    href="edit.php?id=<?= $row['id'] ?>"
                                    role="button">edit</a>
                                <a
                                    class="p-2 rounded border"
                                    name=""
                                    id=""
                                    class="btn btn-primary"
                                    href="delete.php?id=<?= $row['id'] ?>"
                                    role="button">delete</a>

                            </div>
                        </div>

                    </div>

                <?php } ?>

            </div>

        </div>

    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Bundle (includes Popper) -->
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>

</html>
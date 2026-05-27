<?php
include 'db.php';

// if (!isset($_SESSION['id'])) {
//     header(('Location:login.php'));
// }

$result = $con->query("select * from menu");

?>




<!doctype html>
<html lang="en" data-bs-theme="light">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <style>
        table {
            margin: 20px;
            padding: 30px;
            border-radius: 5px;
            background: radial-gradient(red, blue, green);
            background-size: 1200px 200px;
            animation: ani-move 5s infinite alternate ease-in;
        }

        @keyframes ani-move {

            0%,
            50% {
                background-position: 100%;
            }

            100% {
                background-position: 50%;
            }
        }

        table th {
            padding-right: 4px;
            padding-left: 4px;
        }

        table td:hover {
            transition: transform 2s ease;
            transform: translate(10px.10px);
        }

        table th:hover {
            transition: transform 2s ease;
            transform: scale(2);
        }
    </style>
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
            class="container my-3 text-center py-3 rounded shadow">
            <h2>Menu</h2>
            <table border="1">
                <thead>
                    <th>id</th>
                    <th>item name</th>
                    <th>description</th>
                    <th>price</th>
                    <th>category</th>
                    <th>image</th>
                    <th>user id</th>
                </thead>
                <tbody>
                    <?php while ($row = $result->fetch_assoc()) { ?>
                        <td><?= $row['id'] ?></td>
                        <td><?= $row['iname'] ?></td>
                        <td><?= $row['description'] ?></td>
                        <td><?= $row['price'] ?></td>
                        <td><?= $row['category'] ?></td>
                        <td><?= $row['image'] ?></td>
                        <td><?= $row['user_id'] ?></td>
                    <?php  } ?>

                </tbody>
            </table>

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
<?php
include("vendor/autoload.php");

use Helpers\Auth;

$user = Auth::check();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
        crossorigin="anonymous" />
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" />

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"
        defer></script>
</head>

<body>

    <div class="container py-4" style="max-width: 800px;">
        <p class="h3 mb-3">Profile</p>

        <?php if ($user->photo): ?>
            <img src="_actions/photos/<?= $user->photo ?>" alt="" class="img-thumbnail" width="300">
        <?php endif ?>

        <form action="_actions/upload.php" method="post" class="input-group my-4" enctype="multipart/form-data">

            <input type="file" name="photo" class="form-control">
            <button class="btn btn-secondary">Upload</button>

        </form>

        <ul class="list-group mb-3">
            <li class="list-group-item">Name: <?= $user->name ?></li>
            <li class="list-group-item">Email: <?= $user->email ?></li>
            <li class="list-group-item">Phone: <?= $user->phone ?></li>
            <li class="list-group-item">Address: <?= $user->address ?></li>
        </ul>
        <a href="admin.php">Admin</a> |
        <a href="_actions/logout.php" class="text-danger">Logout</a>
    </div>

</body>

</html>
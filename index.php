<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
    <div class="container text-center" style="max-width:600px">
        <h1 class="h3 my-4">Login</h1>

        <?php if (isset($_GET['incorrect'])): ?>
            <div class="alert alert-warning">
                Incorrect email or password!
            </div>
        <?php endif ?>

        <form action="_actions/login.php" method="post" class="mb-3">
            <input type="email" name="email" placeholder="Email" required class="form-control mb-2">
            <input type="password" name="password" placeholder="Password" required class="form-control mb-2">
            <button class="btn btn-primary w-100">Login</button>
        </form>

        <a href="register.php">Register</a>
    </div>
</body>

</html>
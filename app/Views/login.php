<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="<?= base_url('public/css/style.css') ?>">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Lato:wght@400&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <h1>Welcome to Intermover</h1>
        <p>Your trusted moving service provider</p> <!-- Paragraph below the header -->
    </header>
    <main>
        <form action="#" method="post" class="form-container">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required><br>

            <div class="form-buttons">
                <button type="submit">Login</button>
                <button type="button" onclick="window.location.href='<?= base_url('/register') ?>'">Register</button>
            </div>
        </form>
    </main>
</body>
</html>

<!-- app/Views/register.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - InterMover</title>
    <link rel="stylesheet" href="<?= base_url('public/css/style.css') ?>">
</head>
<body>
    <header>
        <h1>Register</h1>
        <nav>
            <a href="<?= base_url('/') ?>">Home</a>
            <a href="<?= base_url('/login') ?>">Login</a>
        </nav>
    </header>
    
    <div class="container">
        <form id="registerForm">
            <label for="full_name">Full Name:</label>
            <input type="text" id="full_name" name="full_name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="phone_number">Phone Number:</label>
            <input type="text" id="phone_number" name="phone_number">

            <label for="country_of_origin">Country of Origin:</label>
            <input type="text" id="country_of_origin" name="country_of_origin" required>

            <label for="country_of_residence">Country of Residence:</label>
            <input type="text" id="country_of_residence" name="country_of_residence" required>

            <label for="date_of_birth">Date of Birth:</label>
            <input type="date" id="date_of_birth" name="date_of_birth" required>

            <label for="gender">Gender:</label>
            <select id="gender" name="gender" required>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Other">Other</option>
            </select>

            <label for="university_name">University Name:</label>
            <input type="text" id="university_name" name="university_name" required>

            <label for="city">City:</label>
            <input type="text" id="city" name="city" required>

            <label for="program_start_year">Program Start Year:</label>
            <input type="number" id="program_start_year" name="program_start_year" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Register</button>
        </form>
    </div>

    <script>
        document.getElementById('registerForm').addEventListener('submit', function (e) {
            e.preventDefault(); // Prevent default form submission

            // Gather form data
            const formData = new FormData(this);
            const data = Object.fromEntries(formData);

            // Send data using fetch API
            fetch('<?= base_url('auth/register') ?>', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(data)
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert('Registration successful!');
                    window.location.href = '<?= base_url('/login') ?>'; // Redirect to login
                } else {
                    alert('Error: ' + data.error);
                }
            })
            .catch((error) => {
                console.error('Error:', error);
                alert('An error occurred during registration.');
            });
        });
    </script>
</body>
</html>


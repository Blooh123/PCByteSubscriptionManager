<?php
global $imageLogo2Source, $imageLogoSource, $imageDataCalendarSource, $imageProfile1Source, $imageProfile2Source;
require '../app/core/imageConfig.php';

if (!isset($_SESSION['username']) || !$_SESSION['role'] == 'Admin') {
    $uri = str_replace('/add_customer', '/login', $_SERVER['REQUEST_URI']);
    header('Location: ' . $uri);
    exit;
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin || Add User</title>
    <link rel="icon" href="<?php echo $imageLogo2Source ?>">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Poppins:400,600&display=swap" rel="stylesheet">

    <!-- Include Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- TailwindCSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="<?php echo ROOT?>assets/css/home.css">
</head>

<body class="bg-gray-100 flex justify-center items-center h-screen">
<div class="bg-white shadow-lg rounded-lg p-6 w-full max-w-lg">
    <h2 class="text-xl font-semibold text-gray-700 mb-4">
        <i class="fas fa-user-plus text-blue-500"></i> Add New User
    </h2>

    <?php if (!empty($data['error'])): ?>
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: '<?php echo $data['error']; ?>'
                });
            });
        </script>
    <?php endif; ?>

    <?php if (!empty($data['success'])): ?>
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                Swal.fire({
                    icon: 'success',
                    title: 'Success!',
                    text: '<?php echo $data['success']; ?>',
                    confirmButtonText: 'OK'
                }).then(() => {
                    window.location.href = '<?php echo ROOT; ?>users'; // Redirect after success
                });
            });
        </script>
    <?php endif; ?>

    <form method="POST">
        <!-- Personal Information -->
        <div class="mb-4">
            <h3 class="text-lg font-semibold text-gray-600 mb-2">Personal Info</h3>

            <!-- Full Name -->
            <label class="block text-gray-600 font-medium">Full Name</label>
            <input type="text" name="full_name" required class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-300" placeholder="Enter full name">
        </div>

        <!-- Sex -->
        <div class="mb-4">
            <label class="block text-gray-600 font-medium">Sex</label>
            <select name="sex" required class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-300">
                <option value="">Select</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
        </div>

        <!-- Birthdate -->
        <div class="mb-4">
            <label class="block text-gray-600 font-medium">Birthdate</label>
            <input type="date" name="birthdate" required class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-300">
        </div>

        <div class="mb-4">
            <!-- Contact -->
            <label class="block text-gray-600 font-medium">Contact Number</label>
            <input type="text" name="contact" required class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-300" placeholder="Enter Contact Number">
        </div>

        <!-- Account Information -->
        <div class="mb-4">
            <h3 class="text-lg font-semibold text-gray-600 mb-2">Account Info</h3>

            <!-- Role -->
            <label class="block text-gray-600 font-medium">Role</label>
            <select name="role" required class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-300">
                <option value="Admin">Admin</option>
                <option value="Cashier">Cashier</option>
            </select>
        </div>

        <!-- Username -->
        <div class="mb-4">
            <label class="block text-gray-600 font-medium">Username (Unique)</label>
            <input type="text" name="username" required class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-300" placeholder="Enter username">
        </div>

        <!-- Password -->
        <div class="mb-4">
            <label class="block text-gray-600 font-medium">Password</label>
            <input type="password" name="password" required class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-300" placeholder="Enter password">
        </div>

        <!-- Buttons -->
        <div class="flex justify-between">
            <a href="<?php echo ROOT ?>users" class="px-4 py-2 bg-gray-300 text-gray-700 rounded hover:bg-gray-400 transition">
                <i class="fas fa-arrow-left"></i> Back
            </a>
            <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600 transition">
                <i class="fas fa-save"></i> Add User
            </button>
        </div>
    </form>
</div>

<!-- SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>
</html>



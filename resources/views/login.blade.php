<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Login - BookEdukasi</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />

    <link href="css/styles.css" rel="stylesheet" />

    <style>
        body {
            background-color: #f8f8fa;
            font-family: 'Playfair Display', serif;
        }

        .login-container {
            max-width: 400px;
            margin: auto;
            padding: 20px;
            background-color: white;
            margin-top: 50px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .signup-link {
            text-align: center;
            margin-top: 10px;
        }

        .signup-link a {
            color: #007bff;
            text-decoration: none;
            font-weight: bold;
        }

        .page-heading {
            text-align: center;
            margin-bottom: 30px;
        }
    </style>
</head>

<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">BookEdukasi</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index">Home</a>
                    </li>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about">About Us</a>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Login Form Container -->
    <div class="container login-container">
        <h2 class="page-heading">Login</h2>
        <form onsubmit="return login()">
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <!-- Added text and link for Sign Up -->
            <div class="mb-3 signup-link">
                <p>Don't have an Account? <a href="register">Sign Up!</a></p>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->

    <script src="js/scripts.js"></script>
    <script>
        function login() {
            // Get the username/email input value
            var username = document.getElementById("username").value;
    
            
            if (username.toLowerCase().startsWith("admin_187221")) {
                // Redirect to admin.html for admin users
                window.location.href = "admin";
            } else {
                // Redirect to index.html for non-admin users
                window.location.href = "index";
            }
    
            // Return false to prevent the form from submitting
            return false;
        }
    </script>
    

</body>

</html>

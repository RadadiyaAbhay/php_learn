<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instagram Clone</title>
</head>
<body>

    <!-- Registration Form -->
    <h2>Register</h2>
    <form action="register.php" method="post">
        <label for="username">Username:</label>
        <input type="text" name="username" required>
        
        <label for="password">Password:</label>
        <input type="password" name="password" required>

        <input type="submit" name="register" value="Register">
    </form>

    <hr>

    <!-- Login Form -->
    <h2>Login</h2>
    <form action="login.php" method="post">
        <label for="username">Username:</label>
        <input type="text" name="username" required>
        
        <label for="password">Password:</label>
        <input type="password" name="password" required>

        <input type="submit" name="login" value="Login">
    </form>

    <h2>Show Posts</h2>
    <a href="show_posts.php">View Posts</a>


    <h2>Post a Photo</h2>
    <form action="post_photo.php" method="post" enctype="multipart/form-data">
        <label for="photo">Select Photo:</label>
        <input type="file" name="photo" accept="image/*" required>

        <label for="caption">Caption:</label>
        <textarea name="caption" rows="4" cols="50" placeholder="Add a caption..."></textarea>

        <input type="submit" name="post_photo" value="Post Photo">
    </form>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>06 Laboratory Exercise 1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="form-container">
        <h1>Online Registration Form</h1>
        <form action="register.php" method="POST">
            <label for="lastName">Last Name <span class="required">*</span></label>
            <input type="text" id="lastName" name="lastName" required><br>

            <label for="firstName">First Name <span class="required">*</span></label>
            <input type="text" id="firstName" name="firstName" required><br>

            <label for="middleInitial">Middle Initial</label>
            <input type="text" id="middleInitial" name="middleInitial"><br>

            <label for="age">Age <span class="required">*</span></label>
            <input type="number" id="age" name="age" required><br>

            <label for="contactNo">Contact No. <span class="required">*</span></label>
            <input type="text" id="contactNo" name="contactNo" required><br>

            <label for="email">E-mail <span class="required">*</span></label>
            <input type="email" id="email" name="email" required><br>

            <label for="address">Address <span class="required">*</span></label>
            <textarea id="address" name="address" required></textarea><br>

            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>

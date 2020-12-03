<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
</head>
<body>
    <h1>
        <?php echo $greeting; ?>
    </h1>

    <form action="" method="post">
        <label for="name">User Name</label>
        <input type="text" name="userName" id="name">
        <br>
        <br>
        <textarea name="message" id="message" rows="10"></textarea>
        <input type="submit" value="Send Message" name="submit">
    </form>
</body>
</html>
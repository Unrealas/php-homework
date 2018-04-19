<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<!-- The data encoding type, enctype, MUST be specified as below -->
<form enctype="multipart/form-data" action="data.php" method="POST">
    <!-- MAX_FILE_SIZE must precede the file input field/ 5MB -->
    <input type="hidden" name="MAX_FILE_SIZE" value="5000000" />
    <!-- Name of input element determines name in $_FILES array -->
    Profilio foto: <input name="userfile[]" type="file" multiple />
    <input type="submit" value="Send File" />
</form>
</body>
</html>
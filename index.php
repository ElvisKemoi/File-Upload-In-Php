<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>File Upload</title>
</head>
<body>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <label for="file">Choose a file to upload:</label>
        <input type="file" name="file" id="file">
        <button type="submit" name="submit">Upload</button>
    </form>
</body>
</html>

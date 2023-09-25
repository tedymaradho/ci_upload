<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload</title>
</head>
<body>
    <?php foreach($errors as $err): ?>
        <li><?= esc($err) ?></li>
    <?php endforeach ?>

    <?= form_open_multipart('upload/upload') ?>
        <input type="file" name="gambar"  >
        <br><br>
        <button type="submit" value="upload">Upload</button>
    </form>
    
</body>
</html>
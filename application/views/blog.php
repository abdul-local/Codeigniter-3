<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blogspot abdul</title>
</head>
<body>
    <div class="blog">
    <h1>Artikel Terbaru</h1>
    <?php foreach($blogs as $key=> $blog) : ?>
        <h1><?php echo $blog['title'] ?></h1>
        <p><?php echo $blog['content']; ?></p>
    <?php endforeach; ?>
    </div>
</body>
</html>
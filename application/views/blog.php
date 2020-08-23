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
        <!-- gunakan site_url untuk mengarahkannya ke halaman url yang kita arahkan -->

        <h1><a href="<?php echo site_url('Blog/detail/'. $blog['url']); ?> ">
        <?php echo $blog['title'] ?></a></h1>
        <a href="<?php echo site_url('Blog/edit/'. $blog['id']); ?> "> Edit</a>
        <a href="<?php echo site_url('Blog/delete/'. $blog['id']); ?> "> Hapus</a>
        <a href="<?php echo site_url('Blog/add/'. $blog['url']); ?> "> Tambah</a>
        <p><?php echo $blog['content']; ?></p>
    <?php endforeach; ?>
    </div>
</body>
</html>
<html>
<head>
<meta charset="UTF-8">
<title></title>
</head>
<body>
<h1>Edit Artikel</h1>
<form method="POST">
    <div>
        <label>Judul</label>
        <input type="text" name="title" value="<?php echo $blog['title'];?>">
    </div>
       <div>
        <label>Url</label>
        <input type="text" name="url"  value="<?php echo $blog['url'];?>">
    </div>
    <div>
        <label>Konten</label>
        <textarea name="content" id="" cols="30" rows="10">
               <?php echo $blog['content'];?>
           </textarea>
    </div>
    <button type="submit">Edit Artikel</button>
</form>
</body>
</html>
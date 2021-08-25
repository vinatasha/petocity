<!DOCTYPE html>
<html lang="en">
    <head>
        <title>LOGIN</title>
    </head>
    <body>
        <h1>Mengganti Kata Sandi</h1>
        <?php foreach ($posts as $post): ?>
            <p><?php echo $post->kataSandi; ?></p>
            <a href="<?php echo base_url('Control/update'. $post->id); ?>">Ganti</a>
        <?php endforeach; ?>

    </body>
</html>
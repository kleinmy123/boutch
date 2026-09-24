<!-- site/templates/projects.php -->
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $site->title() ?></title>
    <?= css(['assets/css/style.css', 'assets/css/gallery.css']) ?>
</head>

<body>
    <?php snippet('header') ?>

    <main>
        <?php snippet('gallery') ?>
    </main>
  
    <?php snippet('footer') ?>
</body>
</html>
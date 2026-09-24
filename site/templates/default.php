<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $page->title() ?></title>
    <?= css('assets/css/style.css') ?>
</head>
<body>
    <?php snippet('header') ?>

    <main>
        <h1><?= $page->title() ?></h1>
        <?= $page->text()->kt() ?>
    </main>
</body>
</html>
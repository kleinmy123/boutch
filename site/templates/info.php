<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $site->title() ?></title>
    <?= css('assets/css/style.css') ?>
</head>

<body>
    <?php snippet('header') ?>

    <main>
        <p class="info-text"><?= $page->text() ?></p>
        <p class="info-text"><?= $page->contact() ?></p>
    </main>
    <?php snippet('footer') ?>
</body>
</html>
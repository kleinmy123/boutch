<!-- site/templates/home.php -->
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
        <!-- hier kommt der Homepage-spezifische Inhalt -->
    </main>
    <?php snippet('footer') ?>
</body>
</html>
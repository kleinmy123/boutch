<?php
$leftImages  = $page->images()->filterBy('filename', '^=', 'left');
$rightImages = $page->images()->filterBy('filename', '^=', 'right');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?= $site->title() ?></title>
<?= css('assets/css/style.css') ?>
</head>

<body>

<div class="image-container">
<div>
<?php if ($leftImages->count() > 0): ?>
<img class="image-left" src="<?= $leftImages->first()->url() ?>" alt="FFF">
<?php endif ?>
</div>
<div>
<?php if ($rightImages->count() > 0): ?>
<img class="image-right" src="<?= $rightImages->first()->url() ?>" alt="J">
<?php endif ?>
</div>
</div>

<script>
const galleries = {
left: [<?php foreach ($leftImages as $img): ?>"<?= $img->url() ?>",<?php endforeach ?>],
right: [<?php foreach ($rightImages as $img): ?>"<?= $img->url() ?>",<?php endforeach ?>]
};

function setupClickGallery(selector, key) {
const img = document.querySelector(selector);
if (!img) return;
let index = 0;
    img.addEventListener('click', () => {
      index = (index + 1) % galleries[key].length;
      img.src = galleries[key][index];
    });
  }

setupClickGallery('.image-left', 'left');
setupClickGallery('.image-right', 'right');
</script>
</body>
</html>
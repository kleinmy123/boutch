<div class="gallery">
    <?php foreach ($page->images() as $image): ?>
    <div class="gallery-item">
        <div class="frame">
            <img src="<?= $image->url() ?>" alt="<?= $image->alt() ?>">
        </div>
        <div class="info">
            <p class="info-title"><?= $image->title() ?></p>
            <p class="info-caption"><?= $image->caption() ?></p>
        </div>
    </div>
    <?php endforeach ?>
</div>
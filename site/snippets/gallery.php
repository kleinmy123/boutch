<div class="gallery">
    <?php foreach ($page->images() as $image): ?>
    <div class="gallery-item">
        <div class="frame">
            <img src="<?= $image->url() ?>" alt="<?= $image->alt() ?>">
        </div>
    </div>
    <?php endforeach ?>
</div>
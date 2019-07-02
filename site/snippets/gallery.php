<?php if($page->imagegallery()): ?>
<div class="imagegallery" >
    <?php foreach($page->imagegallery() as $image): ?>
        <a
            data-caption="<?= $image->caption() ?>"
            href="<?= $image->url() ?>"
            data-at-480="<?= $image->thumb([ 'width' => 480,])->url() ?>"
            data-at-768="<?= $image->thumb([ 'width' => 768,])->url() ?>"
            data-at-1024="<?= $image->thumb([ 'width' => 1024,])->url() ?>"
            data-at-1600="<?= $image->thumb([ 'width' => 1600,])->url() ?>"
            class=" block gutter w-full mb-8"
        >
            <img src="<?= $image->thumb([
                'width'   => 720,
                'height'  => 540,
                'quality' => 80,
                'crop'    => true
            ])->url() ?>" alt="<?= $image->caption() ?>" class="block w-full card-thumb">
        </a>
    <?php endforeach; ?>
</div>
<?php endif; ?>

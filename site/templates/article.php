<?php snippet('header') ?>

<article class="container gutter ">
    <header class="gutter mb-12">
        <h1 class="heading-2"><?= $page->title() ?></h1>
        <time class="" datetime="<?= $page->date()->toDate("Y-m-d") ?>"><?= $page->longDate() ?></time>
    </header>
    <div class="flex flex-row flex-wrap">
        <div class="w-full lg:w-1/2 gutter generated mb-12">
            <?= $page->text()->kt() ?>
        </div>
        <div class="w-full lg:w-1/2 flex flex-row flex-wrap mb-8">
            <?php snippet('gallery'); ?>
        </div>

    </div>
</article>

<?php snippet('footer'); ?>

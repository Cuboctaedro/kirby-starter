<?php snippet('header') ?>

<div class="container gutter">
    <article class="w-full lg:w-2/3 xl:w-1/2 gutter">
        <div class="homebox mb-12 p-6 text-white text-base md:text-lg">
            <?= $page->text()->kt() ?>
        </div>
    </article>
<?php $newsitem = $pages->find('news')->children()->sortBy('date', 'desc')->first();?>
    <a class="w-full lg:w-2/3 xl:w-1/2 gutter block" href="<?= $newsitem->url() ?>">
        <div class="homebox mb-12 p-6">
            <h2 class="font-bold text-base md:text-lg mb-4 text-teal-500"><?= $newsitem->title() ?></h2>
            <div class="text-white text-base md:text-lg">
                <?= $newsitem->text()->excerpt(150) ?>
            </div>
        </div>
    </a>

</div>

<?php snippet('footer'); ?>

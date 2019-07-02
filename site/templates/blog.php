<?php snippet('header') ?>

<article class="container gutter">
    <header class="hidden">
        <h1 class="heading-1"><?= $page->title() ?></h1>
    </header>

    <ul class="pb-12 flex flex-row flex-wrap">
        <?php foreach ($page->children()->sortBy('date', 'desc') as $item): ?>
            <li class="mb-8">
                <article class="flex flex-row flex-wrap">
                    <div class="w-full md:w-1/2 lg:w-1/3 xl:w-1/4 gutter">
                        <?php if ($item->cover()): ?>
                            <img src="<?= $item->cover()->thumb([
                                'width'   => 464,
                                'height'  => 348,
                                'quality' => 80,
                                'crop'    => true
                            ])->url() ?>" class="block w-full"  />
                        <?php else: ?>
                            <div class="w-full imageframe" ></div>
                        <?php endif; ?>
                    </div>
                    <div class="w-full md:w-1/2 lg:w-2/3 xl:w-3/4 gutter">
                        <header class="mb-12 ">
                            <h2 class="heading-2">
                                <a href="<?= $item->url() ?>" class="line"><?= $item->title() ?></a>
                            </h2>
                            <time class="block" datetime="<?= $item->date()->toDate("Y-m-d") ?>"><?= $item->longDate() ?></time>
                        </header>
                        <div class="generated">
                            <?= $item->text()->excerpt(200) ?>
                        </div>
                    </div>
                </article>
            </li>
        <?php endforeach; ?>
    </ul>

</article>


<?php snippet('footer'); ?>

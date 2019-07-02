<?php
$items = $site->pages()->listed();
if($items->isNotEmpty()):
?>

<nav aria-label="Main Menu" class="relative uppercase tracking-wider text-sm">
    <button class="h-12 px-8 lg:px-4 block lg:hidden uppercase tracking-wider leading-12 " aria-expanded="false" data-toggle-menu="#main-menu" title="Menu Toggle">
        <?php snippet('icons/burger'); ?>
        <span class="visually-hidden">Menu</span>
    </button>
    <ul class="absolute md:static flex flex-col lg:flex-row bg-teal-500 shadow-2xl lg:shadow-none main-menu" id="main-menu">
    <?php foreach($items as $item): ?>
        <?php if($item != $pages->find('news') && $item->hasChildren()): ?>
        <li class="relative w-full">
            <button class="block w-full text-left h-12 px-8 lg:px-4 bg-teal-500 hover:bg-teal-300 uppercase tracking-wider whitespace-no-wrap leading-12 border-t border-solid border-teal-900 lg:border-t-0" aria-expanded="false" data-toggle-submenu="#<?= $item->slug() ?>" title="<?= $item->url() ?> Menu Toggle"><?= $item->title() ?></button>
            <ul class="lg:absolute bg-teal-700 lg:shadow-2xl" id="<?= $item->slug() ?>" hidden>
                <?php foreach($item->children() as $child): ?>
                    <li class="w-64">
                        <a class="block w-full h-12 px-8 lg:px-4 bg-teal-700 hover:bg-teal-300 border-t border-solid border-teal-900 whitespace-no-wrap leading-12" href="<?= $child->url() ?>"><?= $child->title() ?></a>
                    </li>
                <?php endforeach ?>
            </ul>
        </li>

        <?php else: ?>
        <li class="w-full">
            <a class="block w-full h-12 px-8 lg:px-4 bg-teal-500 hover:bg-teal-300 whitespace-no-wrap leading-12 border-t border-solid border-teal-900 lg:border-t-0" href="<?= $item->url() ?>"><?= $item->title() ?></a>
        </li>
        <?php endif; ?>
    <?php endforeach ?>
    </ul>
</nav>

<?php endif ?>

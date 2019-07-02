<nav class="gutter w-full" >
    <ul class="flex flex-row justify-end  lowercase">
        <?php if($page->hasPrevListed()): ?>
            <li class="">
                <a href="<?= $page->prevListed()->url() ?>" title="Go to: <?= $page->prevListed()->title() ?>" ><?php
                // snippet('icons/arrow-left') ?> <span>Next</span></a>
            </li>
        <?php endif; ?>
            <li class="pl-6">
                <a href="<?= $page->parent()->url() ?>" title="Go to: <?= $page->parent()->title() ?>" ><?php
                // snippet('icons/arrow-up') ?> <span> <?= $page->parent()->title() ?></span></a>
            </li>
        <?php if($page->hasNextListed()): ?>
            <li class="pl-6">
                <a href="<?= $page->nextListed()->url() ?>" title="Go to: <?= $page->nextListed()->title() ?>" ><span> Previous</span> <?php
                // snippet('icons/arrow-right') ?></a>
            </li>
        <?php endif; ?>
    </ul>
</nav>

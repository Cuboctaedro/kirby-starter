<?php
$items = $site->pages()->listed();
if($items->isNotEmpty()):
?>

<nav>
    <ul>
    <?php foreach($items as $item): ?>
        <?php $children = $item->children()->listed(); ?>
        <?php if($children->isNotEmpty()): ?>
        <li>
            <a class="<?php e($item->isOpen(), ' is-active ') ?>" href="<?= $item->url() ?>"><?= $item->title() ?></a>
            <ul>
            <?php foreach($children as $child): ?>
                <li>
                    <a class="<?php e($child->isOpen(), ' is-active ') ?>" href="<?= $child->url() ?>"><?= $child->title() ?></a>
                </li>
            <?php endforeach ?>
            </ul>
        </li>
        <?php else: ?>
        <li>
            <a class="<?php e($item->isOpen(), ' is-active ') ?>" href="<?= $item->url() ?>"><?= $item->title() ?></a>
        </li>
        <?php endif ?>
    <?php endforeach ?>
    </ul>
</nav>

<?php endif ?>

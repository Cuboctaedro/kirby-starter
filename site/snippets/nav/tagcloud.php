<?php

$projects = $site->find('work');

$menutags = $projects->children()->listed()->pluck('tags', ',', true);

?>

<nav class="tagcloud">
    <ul>
        <li>
            <a class="" href="<?= $projects->url() ?>">All projects</a>
        </li>
    <?php foreach($menutags as $menutag): ?>
        <li>
            <a class="<?php e(isset($tag) && Str::kebab($menutag) == $tag, 'text-black', '')?>" href="<?= $projects->url() ?>/tag/<?= Str::kebab($menutag) ?>"><?= $menutag ?></a>
        </li>
    <?php endforeach ?>
    </ul>
</nav>

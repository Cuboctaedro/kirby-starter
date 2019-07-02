<meta property="og:title" content="<?= $page->title()?>" />
<meta property="og:description" content="<?= $page->metadescription()?>" />
<meta property="og:url" content="<?= $page->url()?>" />
<?php if($page->coverimage()): ?>
    <meta property="og:image" content="<?= $page->coverimage()->toFile()->thumb([
        'width'   => 1200,
        'height'  => 630,
        'crop'    => true
    ])->url() ?>" />
<?php endif; ?>

<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="<?= $site->sitetwitter() ?>">
<meta name="twitter:creator" content="<?= $page->authortwitter() ?>">
<meta name="twitter:title" content="<?= $page->title() ?>">
<meta name="twitter:description" content="<?= $page->metadescription()?>">
<?php if($page->coverimage()): ?>
    <meta name="twitter:image" content="<?= $page->coverimage()->toFile()->thumb([
        'width'   => 1200,
        'height'  => 630,
        'crop'    => true
    ])->url() ?>" />
<?php endif; ?>

<script type="application/ld+json">
{
    "@context": "http://schema.org",
    "@type": "WebPage",
    "name": "<?= $page->title() ?>",
    "description": "<?= $page->metadescription()?>",
    "publisher": {
        "name": "<?= $site->title() ?>"
    }
    <?php if($page->coverimage()): ?>
    ,
    "image": "<?= $page->coverimage()->toFile()->thumb(['width'=> 1200,'height'=> 630,'crop'=> true])->url() ?>"
    <?php endif; ?>
}
</script>

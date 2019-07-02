<?php

Kirby::plugin('objecteam/page-methods', [
    'pageMethods' => [
        'summary' => function () {
            if ($this->contentblocks()->exists() and $this->contentblocks()->isNotEmpty()) {
                foreach ($this->contentblocks()->toStructure() as $section) {
                    if ($section->_key() == 'text') {
                        return $section->text()->excerpt(180);
                        break;
                    }
                }
            } elseif ($this->text()->exists() and $this->text()->isNotEmpty()) {
                return $this->text()->excerpt(180);
            } else {
                return "";
            }
        },
        'metadescription' => function() {
            if($this->description()->exists() and $this->description()->isNotEmpty()) {
                return $this->description();
            } else {
                return $this->summary();
            }
        },
        'coverimage' => function() {
            if($this->featuredimage()->exists() and $this->featuredimage()->isNotEmpty()) {
                return $this->featuredimage()->toFile();
            } elseif($this->hasImages()) {
                return $this->images()->first();
            } else {
                return false;
            }
        },

    ]
]);

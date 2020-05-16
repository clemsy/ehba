<?php

use craft\elements\Entry;
use craft\helpers\UrlHelper;

return [
    'endpoints' => [
        'news.json' => function() {
            return [
                'elementType' => Entry::class,
                'criteria' => ['section' => 'news'],
                'transformer' => function(Entry $entry) {
                    return [
                        'title' => $entry->title,
                        'url' => $entry->url,
                        'jsonUrl' => UrlHelper::url("news/{$entry->id}.json"),
                        'summary' => $entry->newsSummary,
                        'picture' => $entry->pageBanner,
                    ];
                },
            ];
        },
        'news/<entryId:\d+>.json' => function($entryId) {
            return [
                'elementType' => Entry::class,
                'criteria' => ['id' => $entryId],
                'one' => true,
                'transformer' => function(Entry $entry) {
                    return [
                        'title' => $entry->title,
                        'url' => $entry->url,
                        'summary' => $entry->newsSummary,
                        'body' => $entry->body,
                    ];
                },
            ];
        },,
        'rest/<slug:{slug}>.json' => function($slug) {
            return [
                'elementType' => Entry::class,
                'criteria' => ['slug' => $slug],
                'one' => true,
                'transformer' => function(Entry $entry) {
                    return [
                        'title' => $entry->pageTitle,
                        'section' => $entry->sectionTitle,
                        'url' => $entry->url,
                        'body' => $entry->pageContent,
                    ];
                },
            ];
        },
    ]
];
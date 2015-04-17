<?php namespace Anomaly\FilesModule;

use Anomaly\Streams\Platform\Addon\Module\Module;

/**
 * Class FilesModule
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\FilesModule
 */
class FilesModule extends Module
{

    /**
     * The module icon.
     *
     * @var string
     */
    protected $icon = 'folder-open';

    /**
     * The addon sections.
     *
     * @var array
     */
    protected $sections = [
        'browser' => [
            'buttons' => [
                'upload' => [
                    'button'     => 'success',
                    'icon'       => 'upload',
                    'text'       => 'module::button.upload',
                    'attributes' => [
                        'data-toggle' => 'uploader'
                    ]
                ],
                [
                    'button'     => 'new_folder',
                    'attributes' => [
                        'data-toggle' => 'folder'
                    ]
                ]
            ]
        ],
        'disks'   => [
            'buttons' => [
                'new_disk'
            ]
        ],
        'adapters',
        'settings'
    ];

}

<?php namespace Anomaly\FilesModule\Disk\Form;

use Anomaly\FilesModule\Adapter\AdapterExtension;
use Anomaly\Streams\Platform\Ui\Form\FormBuilder;

/**
 * Class DiskFormBuilder
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\FilesModule\Disk\Form
 */
class DiskFormBuilder extends FormBuilder
{

    /**
     * The storage adapter.
     *
     * @var null|AdapterExtension
     */
    protected $adapter = null;

    /**
     * The form fields.
     *
     * @var array
     */
    protected $fields = [
        'name',
        'slug' => [
            'disabled' => 'edit'
        ]
    ];

    /**
     * The fields to skip.
     *
     * @var array
     */
    protected $skips = [
        'adapter'
    ];

    /**
     * Fired just before
     * saving the form entry.
     */
    public function onSaving()
    {
        $entry   = $this->getFormEntry();
        $adapter = $this->getAdapter();

        $entry->adapter = $adapter->getNamespace();
    }

    /**
     * Get the adapter.
     *
     * @return AdapterExtension|null
     */
    public function getAdapter()
    {
        return $this->adapter;
    }

    /**
     * Set the adapter.
     *
     * @param AdapterExtension $adapter
     * @return $this
     */
    public function setAdapter(AdapterExtension $adapter)
    {
        $this->adapter = $adapter;

        return $this;
    }
}

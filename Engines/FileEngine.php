<?php

namespace QuantaQuirk\View\Engines;

use QuantaQuirk\Contracts\View\Engine;
use QuantaQuirk\Filesystem\Filesystem;

class FileEngine implements Engine
{
    /**
     * The filesystem instance.
     *
     * @var \QuantaQuirk\Filesystem\Filesystem
     */
    protected $files;

    /**
     * Create a new file engine instance.
     *
     * @param  \QuantaQuirk\Filesystem\Filesystem  $files
     * @return void
     */
    public function __construct(Filesystem $files)
    {
        $this->files = $files;
    }

    /**
     * Get the evaluated contents of the view.
     *
     * @param  string  $path
     * @param  array  $data
     * @return string
     */
    public function get($path, array $data = [])
    {
        return $this->files->get($path);
    }
}

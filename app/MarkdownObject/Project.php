<?php

namespace App\MarkdownObject;
use \File;

class Project
{
    protected $dir = 'projects';

    protected $path;

    public function __construct($project)
    {
        $this->path = storage_path($this->dir.'/'.$project);
    }

    public function raw()
    {
        return; // File::get($this->path);
    }

    public function get()
    {
        return; // return rendered Markdown
    }
}

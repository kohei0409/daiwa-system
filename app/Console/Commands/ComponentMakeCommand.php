<?php

namespace App\Console\Commands;

use Illuminate\Console\GeneratorCommand;

class ComponentMakeCommand extends GeneratorCommand
{
    protected $name = 'make:component';

    protected $description = 'Create a new component class';

    protected $type = 'Component';

    protected function getStub()
    {
        return __DIR__.'/stubs/component.stub';
    }

    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace.'\View\Components';
    }
}

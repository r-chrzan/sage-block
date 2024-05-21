<?php

namespace SageBlock\Console;

use Illuminate\Support\Str;

class BlockMakeCommand extends MakeCommand
{
    /**
     * The console command signature.
     *
     * @var string
     */
    protected $signature = 'sage-block {name* : The name of the block}
                            {--force : Overwrite any existing files}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new Sage block renderer.';

    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = 'SageBlock';

    /**
     * The view partial directory used when generated.
     *
     * @var string|bool
     */
    protected $viewDirectory = 'blocks';

    /**
     * The view stub used when generated.
     *
     * @var string|bool
     */
    protected $view = 'block';

    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        return __DIR__ . '/stubs/block.stub';
    }
}

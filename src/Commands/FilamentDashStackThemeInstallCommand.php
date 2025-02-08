<?php

namespace Nuxtifyts\DashStackTheme\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Process;
use Symfony\Component\Console\Attribute\AsCommand;

#[AsCommand('filament-dash-stack-theme:install')]
class FilamentDashStackThemeInstallCommand extends Command
{
    /** 
     * @var 0 
     */
    public const SUCCESS = 0;

    /** 
     * @var 1 
     */
    public const FAILURE = 1;

    /** 
     * @var string
     */
    protected $signature = 'filament-dash-stack-theme:install';

    /** 
     * @var string
     */
    protected $description = 'Install the Dash Stack theme for Filament';

    /** 
     *  @return 1|0
     */
    public function handle(): int
    {
        $this->info('Installing the Dash Stack theme...');

        if (($npmVersionResult = Process::run('npm -v'))->failed()) {
            $this->error('NPM is required to install the Dash Stack theme.');
            return static::FAILURE;
        }

        $this->info("Using NPM version {$npmVersionResult->output()}");

        return static::SUCCESS;
    }
}

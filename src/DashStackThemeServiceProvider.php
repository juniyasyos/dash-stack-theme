<?php

namespace Nuxtifyts\DashStackTheme;

use Nuxtifyts\DashStackTheme\Commands\FilamentDashStackThemeInstallCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Illuminate\Console\Command;

class DashStackThemeServiceProvider extends PackageServiceProvider
{
    protected const PACKAGE_NAME = 'nuxtifyts/dash-stack-theme';

    protected const CONFIG_FILE_NAME = 'filament-dash-stack-theme';

    public function configurePackage(Package $package): void
    {
        $package
            ->name(self::PACKAGE_NAME)
            ->hasConfigFile(self::CONFIG_FILE_NAME)
            ->hasViews()
            ->hasCommands(...self::commandsClassStrings());
    }

    /** 
     *  @return list<class-string<Command>>
     */
    protected static function commandsClassStrings(): array
    {
        return [
            FilamentDashStackThemeInstallCommand::class
        ];
    }
}

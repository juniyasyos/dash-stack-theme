<?php

namespace Nuxtifyts\DashStackTheme;

use Nuxtifyts\DashStackTheme\Commands\FilamentDashStackThemeInstallCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class DashStackThemeServiceProvider extends PackageServiceProvider
{
    protected const CONFIG_FILE_NAME = 'filament-dash-stack-theme';

    public function configurePackage(Package $package): void
    {
        $package
            ->name('nuxtifyts/dash-stack-theme')
            ->hasConfigFile(self::CONFIG_FILE_NAME)
            ->hasViews()
            ->hasCommand(FilamentDashStackThemeInstallCommand::class);
    }
}

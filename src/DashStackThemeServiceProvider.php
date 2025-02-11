<?php

namespace Nuxtifyts\DashStackTheme;

use Illuminate\Console\Command;
use Nuxtifyts\DashStackTheme\Commands\FilamentDashStackThemeInstallCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class DashStackThemeServiceProvider extends PackageServiceProvider
{
    public const PACKAGE_NAME = 'nuxtifyts/dash-stack-theme';

    protected const CONFIG_FILE_NAME = 'filament-dash-stack-theme';

    public function configurePackage(Package $package): void
    {
        $package
            ->name(self::PACKAGE_NAME)
            ->hasConfigFile(self::CONFIG_FILE_NAME)
            ->hasViews()
            ->hasAssets()
            ->hasCommands(...self::commandsClassStrings());
    }

    /**
     * @return list<class-string<Command>>
     */
    protected static function commandsClassStrings(): array
    {
        return [
            FilamentDashStackThemeInstallCommand::class,
        ];
    }
}

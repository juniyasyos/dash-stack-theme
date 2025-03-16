<?php

namespace Juniyasyos\DashStackTheme;

use Filament\Support\Assets\Css;
use Filament\Support\Facades\FilamentAsset;
use Illuminate\Console\Command;
use Juniyasyos\DashStackTheme\Commands\FilamentDashStackThemeInstallCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class DashStackThemeServiceProvider extends PackageServiceProvider
{
    public const PACKAGE_NAME = 'juniyasyos/dash-stack-theme-juniyasyos';

    protected const CONFIG_FILE_NAME = 'filament-dash-stack-theme-juniyasyos';

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
     * @return $this
     */
    public function boot()
    {
        parent::boot();

        $this->bootDefaultFont();


        // 🔹 Publikasi aset CSS
        $this->publishes([
            __DIR__ . '/../resources/css-publish' => resource_path('css/filament/dash-stack-theme-juniyasyos'),
        ], 'dash-stack-theme-juniyasyos-assets');

        $this->publishes([
            __DIR__ . '/../resources/dist' => resource_path('assets/dash-stack-theme'),
        ], 'dash-stack-theme-juniyasyos-dist');

        return $this;
    }

    /**
     * bootDefaultFont
     *
     * @return static
     */
    protected function bootDefaultFont(): static
    {
        if (config('filament-dash-stack-theme-juniyasyos.use-default-font')) {
            FilamentAsset::register([
                Css::make(
                    id: 'dash-stack-theme-juniyasyos-font',
                    path: 'https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap'
                ),
            ]);
        }

        return $this;
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

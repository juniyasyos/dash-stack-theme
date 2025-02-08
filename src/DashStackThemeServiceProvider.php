<?php

namespace Nuxtifyts\DashStackTheme;

use Illuminate\Support\ServiceProvider;

class DashStackThemeServiceProvider extends ServiceProvider
{
    protected const CONFIG_FILE_NAME = 'filament-dash-stack-theme';

    protected const CONFIG_FILE_NAME_FULL = self::CONFIG_FILE_NAME.'.php';

    public function register(): void
    {
        $this->mergeConfigFrom(path: $this->configFilePath(), key: self::CONFIG_FILE_NAME);

        $this->publishes(
            paths: [$this->configFilePath() => config_path(self::CONFIG_FILE_NAME_FULL)],
            groups: 'filament-dash-stack-theme-config'
        );
    }

    private function configFilePath(): string
    {
        return __DIR__.'/../config/'.self::CONFIG_FILE_NAME_FULL;
    }
}

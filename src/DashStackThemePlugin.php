<?php

namespace Nuxtifyts\DashStackTheme;

use Filament\Contracts\Plugin;
use Filament\Panel;

class DashStackThemePlugin implements Plugin
{
    public static function make(): self
    {
        return new self;
    }

    public function getId(): string
    {
        return 'nuxtifyts/filament-dash-stack-theme';
    }

    public function register(Panel $panel): void
    {
        $panel
            ->colors([
                'primary' => config('filament-dash-stack-theme.default-colors.primary'),
            ])
            ->sidebarCollapsibleOnDesktop(config('filament-dash-stack-theme.side-bar-collapsable-on-desktop'))
            ->collapsibleNavigationGroups(config('filament-dash-stack-theme.collapsible-navigation-groups'))
            ->viteTheme('vendor/nuxtifyts/dash-stack-theme/resources/css/theme.css');
    }

    public function boot(Panel $panel): void
    {
        //
    }
}

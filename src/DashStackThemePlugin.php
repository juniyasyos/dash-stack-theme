<?php

namespace Juniyasyos\DashStackTheme;

use Filament\Contracts\Plugin;
use Filament\Panel;

class DashStackThemePlugin implements Plugin
{
    public static function make(): self
    {
        return new self();
    }

    public function getId(): string
    {
        return 'juniyasyos/filament-dash-stack-theme-juniyasyos';
    }

    public function register(Panel $panel): void
    {
        $panel
            ->colors([
                'primary' => config('filament-dash-stack-theme-juniyasyos.default-colors.primary'),
            ])
            ->sidebarCollapsibleOnDesktop(config('filament-dash-stack-theme-juniyasyos.side-bar-collapsable-on-desktop'))
            ->collapsibleNavigationGroups(config('filament-dash-stack-theme-juniyasyos.collapsible-navigation-groups'))
            ->breadcrumbs(config('filament-dash-stack-theme-juniyasyos.breadcrumbs'));

        if (config('filament-dash-stack-theme-juniyasyos.use-default-font')) {
            $panel->font('Nunito Sans');
        }
    }

    public function boot(Panel $panel): void
    {
        //
    }
}

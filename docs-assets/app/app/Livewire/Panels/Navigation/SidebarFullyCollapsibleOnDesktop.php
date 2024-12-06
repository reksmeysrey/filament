<?php

namespace App\Livewire\Panels\Navigation;

use Filament\Pages\Page;
use Filament\Navigation\NavigationItem;

class SidebarFullyCollapsibleOnDesktop extends Page
{
    protected static string $view = 'livewire.panels.navigation.fully-collapsible-on-desktop';

    public function mount()
    {
        filament()
            ->getCurrentPanel()
            ->navigationItems([
                NavigationItem::make()
                    ->label('Products')
                    ->sort(2)
                    ->icon('heroicon-o-document-text')
                    ->url(fn (): string => '#'),
            ])
            ->sidebarFullyCollapsibleOnDesktop();
    }
}

<?php

namespace App\Filament\Resources\TeamResource\Pages;

use Filament\Resources\Pages\Page;
use App\Filament\Resources\TeamResource;
use Filament\Pages\Actions\ButtonAction;

class Teams extends Page
{
    protected static string $resource = TeamResource::class;

    protected static string $view = 'filament.resources.team-resource.pages.teams';

    protected function getActions(): array
    {
        return [
            ButtonAction::make('settings')
                ->label('Settings')
                ->url(route('settings')),
        ];
    }
}

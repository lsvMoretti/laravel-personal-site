<?php

namespace App\Filament\Resources\ProjectResource\Pages;

use App\Filament\Resources\ProjectResource;
use Filament\Infolists;
use Filament\Infolists\Infolist;
use Filament\Resources\Pages\ViewRecord;

class ViewProject extends ViewRecord
{
    protected static string $resource = ProjectResource::class;

    public function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                Infolists\Components\Section::make('Customer Details')
                    ->schema([
                        Infolists\Components\TextEntry::make('customer.name'),
                        Infolists\Components\TextEntry::make('customer.email'),
                        Infolists\Components\TextEntry::make('customer.phone'),
                    ])->columns(2),
                Infolists\Components\Section::make('Project Details')
                    ->schema([
                        Infolists\Components\TextEntry::make('name'),
                        Infolists\Components\TextEntry::make('description'),
                        Infolists\Components\TextEntry::make('framework')
                            ->columnSpanFull(),
                        Infolists\Components\TextEntry::make('labour_rate')
                            ->money('GBP'),
                        Infolists\Components\TextEntry::make('cost')
                            ->money('GBP'),
                    ])->columns(2),
            ]);
    }
}

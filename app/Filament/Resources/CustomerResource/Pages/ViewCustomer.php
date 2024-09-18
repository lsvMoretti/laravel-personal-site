<?php

namespace App\Filament\Resources\CustomerResource\Pages;

use App\Filament\Resources\CustomerResource;
use Filament\Infolists;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Infolist;
use Filament\Resources\Pages\ViewRecord;

class ViewCustomer extends ViewRecord
{
    protected static string $resource = CustomerResource::class;

    public function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                Infolists\Components\Section::make('Customer Details')
                    ->schema([
                        Infolists\Components\TextEntry::make('name'),
                        Infolists\Components\TextEntry::make('email'),
                        Infolists\Components\TextEntry::make('phone')
                            ->columnSpanFull(),
                        Infolists\Components\TextEntry::make('address_line_one')
                            ->label('Address'),
                        Infolists\Components\TextEntry::make('address_line_two')
                            ->label('Address line two'),
                        Infolists\Components\TextEntry::make('city'),
                        Infolists\Components\TextEntry::make('county'),
                        Infolists\Components\TextEntry::make('country'),
                        Infolists\Components\TextEntry::make('post_code'),
                    ])->columns(2),
                Infolists\Components\Section::make('Projects')
                    ->schema([
                        Infolists\Components\RepeatableEntry::make('projects')
                            ->schema([
                                Infolists\Components\TextEntry::make('name')
                                    ->label('Project Name'),
                                TextEntry::make('description')
                                    ->label('Project Description'),
                                TextEntry::make('framework')
                                    ->columnSpanFull(),
                                TextEntry::make('labour_rate')
                                    ->money('GBP'),
                                TextEntry::make('cost')
                                    ->money('GBP'),
                            ])
                            ->hiddenLabel()
                            ->columns(2),
                    ])->columnSpanFull(),

            ]);
    }
}

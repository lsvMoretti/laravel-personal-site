<?php

namespace App\Filament\Resources\ProjectsResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class TasksRelationManager extends RelationManager
{
    protected static string $relationship = 'tasks';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Wizard::make([
                    Forms\Components\Wizard\Step::make('Info')
                        ->schema([
                            Forms\Components\TextInput::make('title')
                                ->required(),
                            Forms\Components\TextInput::make('description')
                                ->required(),
                            Forms\Components\Select::make('status')
                                ->options([
                                    'todo' => 'To Do',
                                    'in_progress' => 'In Progress',
                                    'in_review' => 'In Review',
                                    'awaiting_payment' => 'Awaiting Payment',
                                    'completed' => 'Completed',
                                ])
                                ->required(),
                        ]),
                    Forms\Components\Wizard\Step::make('Time')
                        ->schema([
                            Forms\Components\DateTimePicker::make('complete_by')
                                ->timezone('Europe/London'),
                            TextInput::make('time')
                                ->numeric(),
                        ]),
                ])->columnSpanFull(),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('title')
            ->columns([
                Tables\Columns\TextColumn::make('title'),
                TextColumn::make('description'),
                TextColumn::make('status'),
                TextColumn::make('complete_by'),
                TextColumn::make('time'),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
}

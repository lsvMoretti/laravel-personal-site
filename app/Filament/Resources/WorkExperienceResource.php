<?php

namespace App\Filament\Resources;

use App\Filament\Resources\WorkExperienceResource\Pages;
use App\Models\WorkExperience;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class WorkExperienceResource extends Resource
{
    protected static ?string $model = WorkExperience::class;

    protected static ?string $slug = 'work-experiences';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                DatePicker::make('start_date'),

                DatePicker::make('end_date'),

                TextInput::make('role')
                    ->required(),

                TextInput::make('company')
                    ->required(),

                TextInput::make('website')
                    ->required(),

                TextInput::make('description')
                    ->required(),

                Placeholder::make('created_at')
                    ->label('Created Date')
                    ->content(fn(?WorkExperience $record): string => $record?->created_at?->diffForHumans() ?? '-'),

                Placeholder::make('updated_at')
                    ->label('Last Modified Date')
                    ->content(fn(?WorkExperience $record): string => $record?->updated_at?->diffForHumans() ?? '-'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('start_date')
                    ->date(),

                TextColumn::make('end_date')
                    ->date(),

                TextColumn::make('role'),

                TextColumn::make('company'),

                TextColumn::make('website'),

                TextColumn::make('description'),

                TextColumn::make('tags'),
            ])
            ->filters([
                //
            ])
            ->actions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->bulkActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListWorkExperiences::route('/'),
            'create' => Pages\CreateWorkExperience::route('/create'),
            'edit' => Pages\EditWorkExperience::route('/{record}/edit'),
        ];
    }

    public static function getGloballySearchableAttributes(): array
    {
        return [];
    }
}

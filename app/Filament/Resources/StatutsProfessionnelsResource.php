<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use App\Models\StatutsProfessionnels;
use App\Models\statuts_professionnels;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\StatutsProfessionnelsResource\Pages;
use App\Filament\Resources\StatutsProfessionnelsResource\RelationManagers;

class StatutsProfessionnelsResource extends Resource
{
    protected static ?string $model = statuts_professionnels::class;

    protected static ?string $navigationIcon = 'heroicon-o-computer-desktop';
    protected static ?string $navigationLabel = 'Statut Professionnel';
    protected static ?string $navigationGroup = 'Réglages et école ';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('statut')->label('Statut')->columnSpanFull()->required()
                
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->label('ID')->searchable(),
                TextColumn::make('statut')->label('Statut')->searchable(),
                TextColumn::make('created_at')->label('created_at')->searchable(),
            ])
            ->filters([
                //
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

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageStatutsProfessionnels::route('/'),
        ];
    }
}

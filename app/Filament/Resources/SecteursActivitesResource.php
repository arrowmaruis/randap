<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use App\Models\SecteursActivites;
use App\Models\secteurs_activites;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\SecteursActivitesResource\Pages;
use App\Filament\Resources\SecteursActivitesResource\RelationManagers;

class SecteursActivitesResource extends Resource
{
    protected static ?string $model = secteurs_activites::class;

    protected static ?string $navigationIcon = 'heroicon-o-square-3-stack-3d';
    protected static ?string $navigationLabel = 'Secteur d\'activité';
    protected static ?string $navigationGroup = 'Réglages et école ';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('secteur')->label('Secteur')->columnSpanFull()->required()
                
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->label('ID')->searchable(),
                TextColumn::make('secteur')->label('Secteur')->searchable(),
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
            'index' => Pages\ManageSecteursActivites::route('/'),
        ];
    }
}

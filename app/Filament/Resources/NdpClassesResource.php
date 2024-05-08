<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use App\Models\NdpClasses;
use Filament\Tables\Table;
use App\Models\ndp_classes;
use Filament\Resources\Resource;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\NdpClassesResource\Pages;
use App\Filament\Resources\NdpClassesResource\RelationManagers;

class NdpClassesResource extends Resource
{
    protected static ?string $model = ndp_classes::class;

    protected static ?string $navigationIcon = 'heroicon-o-calendar-days';
    protected static ?string $navigationLabel = 'Les classes';
    protected static ?string $navigationGroup = 'Réglages et école ';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('classe')->label('Classe')->columnSpanFull()->required()
                
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->label('ID')->searchable(),
                TextColumn::make('classe')->label('Classe')->searchable(),
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
            'index' => Pages\ManageNdpClasses::route('/'),
        ];
    }
}

<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DomainesExpertiseResource\Pages;
use App\Filament\Resources\DomainesExpertiseResource\RelationManagers;
use App\Models\domaines_expertise;
use App\Models\DomainesExpertise;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DomainesExpertiseResource extends Resource
{
    protected static ?string $model = domaines_expertise::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = 'Les Domaines Expertises';
    protected static ?string $navigationGroup = 'Réglages et école ';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('domaine')->label('Domaine')->columnSpanFull()->required()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->label('ID')->searchable(),
                TextColumn::make('domaine')->label('Domaine')->searchable(),
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
            'index' => Pages\ManageDomainesExpertises::route('/'),
        ];
    }
}

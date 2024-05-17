<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Donation;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\DonationResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\DonationResource\RelationManagers;

class DonationResource extends Resource
{
    protected static ?string $model = Donation::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    
    protected static ?string $navigationLabel = 'Donation';
    protected static ?string $navigationGroup = 'Nous soutenir';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('Nom')->label('Nom')->searchable(),
                TextColumn::make('Prenoms')->label('Prénom')->searchable(),
                TextColumn::make('Email')->label('Email')->searchable(),
                TextColumn::make('Telephone')->label('Téléphone')->searchable(),
                TextColumn::make('Autorisation')->label('Autor. Pub'),
                TextColumn::make('Logo')->label('Logo'),
                TextColumn::make('Date_transmission')->label('Date T'),
                TextColumn::make('Montant_don')->label('Montant')->searchable(),
                TextColumn::make('Mode_paiement')->label('Mode')->searchable(),
                TextColumn::make('created_at')->label('Créé le')->limit(10),
            ])
            ->filters([
                //
            ])
            ->actions([
                // Tables\Actions\EditAction::make(),
                // Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ManageDonations::route('/'),
        ];
    }
}

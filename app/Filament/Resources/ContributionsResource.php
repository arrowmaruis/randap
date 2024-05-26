<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\Contributions;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ContributionsResource\Pages;
use App\Filament\Resources\ContributionsResource\RelationManagers;

class ContributionsResource extends Resource
{
    protected static ?string $model = Contributions::class;

    protected static ?string $navigationIcon = 'heroicon-o-banknotes';

    protected static ?string $navigationLabel = 'Les Cotisations';
    protected static ?string $navigationGroup = 'L\'affiliation à l\'organisation';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('user_id')
                    ->relationship('user', 'name')
                    ->required()
                    ->searchable()
                    ->label('Utilisateur'),
                TextInput::make('amount')
                    ->required()
                    ->numeric()
                    ->label('Montant'),
                DatePicker::make('date')
                    ->required()
                    ->label('Date de cotisation'),
                Select::make('description')
                    ->options([
                        'Cotisation mensuelle' => 'Cotisation mensuelle',
                        'Droit d\'adhésion' => 'Droit d\'adhésion',
                    ])
                    ->required()
                    ->label('Type de contribution'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('user.name')
                    ->label('Utilisateur')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('amount')
                    ->label('Montant')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('date')
                    ->label('Date de cotisation')
                    ->sortable(),
                TextColumn::make('description')
                    ->label('Description')
                    ->sortable(),
                TextColumn::make('created_at')
                    ->label('Créé le')
                    ->sortable()
                    ->dateTime(),
                TextColumn::make('updated_at')
                    ->label('Mis à jour le')
                    ->sortable()
                    ->dateTime(),
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
            'index' => Pages\ManageContributions::route('/'),
        ];
    }
}

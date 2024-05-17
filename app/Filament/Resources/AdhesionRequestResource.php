<?php

namespace App\Filament\Resources;

use create;
use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use App\Models\AdhesionRequests;

use Filament\Resources\Resource;
use Filament\Tables\Actions\Action;
use App\Notifications\AdhesionAccepted;
use Filament\Tables\Columns\TextColumn;
use App\Models\create_sent_emails_table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Archilex\ToggleIconColumn\Columns\ToggleIconColumn;
use App\Filament\Resources\AdhesionRequestResource\Pages;
use App\Filament\Resources\AdhesionRequestResource\RelationManagers;

class AdhesionRequestResource extends Resource
{
    protected static ?string $model = AdhesionRequests::class;

    protected static ?string $navigationIcon = 'heroicon-o-clipboard-document-check';

    protected static ?string $navigationLabel = 'Demande d\'adhésion';
    protected static ?string $navigationGroup = 'L\'affiliation à l\'organisation';

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
                TextColumn::make('nom')->sortable()->searchable(),
                TextColumn::make('prenoms')->sortable()->searchable(),
                TextColumn::make('email')->sortable()->searchable(),
                TextColumn::make('telephone')->sortable()->searchable(),
                TextColumn::make('promotion')->label('promo')->sortable()->searchable()->limit(4),
                TextColumn::make('message')->sortable()->searchable()->limit(15),
                // TextColumn::make('reference1')->sortable()->searchable(),

                ToggleIconColumn::make('is_accepted')->label('Statut')
                    ->onIcon('heroicon-s-lock-open')
                    ->offIcon('heroicon-o-lock-closed'),
                Tables\Columns\TextColumn::make('created_at')->sortable()->label('Date création')->limit(10),
            ])
            ->filters([
                //
            ])
            ->actions([
                Action::make('accept')
                    ->label(function (AdhesionRequests $record) {
                        return $record->is_accepted ? 'Accepté' : 'Accepter';
                    })
                    ->icon('heroicon-o-check')
                    ->action(function (AdhesionRequests $record) {
                        if (!$record->is_accepted) {
                            $record->update(['is_accepted' => true]);

                            $token = Str::random(60);
                            $expiresAt = now()->addDays(2);

                            create_sent_emails_table::create([
                                'adhesion_request_id' => $record->id,
                                'email' => $record->email,
                                'token' => $token,
                                'expires_at' => $expiresAt,
                            ]);

                            $record->notify(new AdhesionAccepted($record, $token));

                            session()->flash('success', 'La demande d\'adhésion a été acceptée et un email a été envoyé.');
                        } else {
                            session()->flash('info', 'La demande d\'adhésion a déjà été acceptée.');
                        }
                    })
                    ->color(function (AdhesionRequests $record) {
                        return $record->is_accepted ? 'info' : 'success';
                    })

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
            'index' => Pages\ManageAdhesionRequests::route('/'),
        ];
    }
}

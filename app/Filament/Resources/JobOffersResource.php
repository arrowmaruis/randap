<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use App\Models\JobOffers;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\JobOffersResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\JobOffersResource\RelationManagers;

class JobOffersResource extends Resource
{
    protected static ?string $model = JobOffers::class;

    protected static ?string $navigationIcon = 'heroicon-o-briefcase';
    protected static ?string $navigationLabel = 'Les emploies';
    protected static ?string $navigationGroup = 'Les Annonces et Actualites ';

    public static function form(Form $form): Form
    {
        $userId = auth()->id();

        return $form->schema([
            TextInput::make('job_title')->required()->label('Titre du poste'),
            TextInput::make('company')->required()->label('Entreprise'),
            TextInput::make('email')->required()->label('Email')->email(),
            TextInput::make('expertise')->required()->label('Année d\'expérience'),
            TextInput::make('required_skills')->required()->label('Compétences requises'),
            DatePicker::make('closing_date')->required()->label('Date limite des candidatures')->minDate(now()),
            Textarea::make('job_description')->columnSpanFull()->required()->rows(5)->cols(5),
            FileUpload::make('logo')->label('Logo')
                ->avatar(),
            Hidden::make('user_id') // Champ user_id masqué
                ->default($userId)
                ->required(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->label('ID'),
                ImageColumn::make('logo')->label('Logo')->circular(),

                TextColumn::make('job_title')->label('Post'),
                TextColumn::make('company')->label('Entreprise'),
                TextColumn::make('email')->label('Email'),
                TextColumn::make('expertise')->label('Expérience'),
                TextColumn::make('closing_date')->label('Date limite'),
                // TextColumn::make('created_at')->label('Date de création'),
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
            'index' => Pages\ManageJobOffers::route('/'),
        ];
    }
}

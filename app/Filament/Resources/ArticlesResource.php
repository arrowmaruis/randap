<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Articles;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Columns\SelectColumn;
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteBulkAction;
use App\Filament\Resources\ArticlesResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ArticlesResource\RelationManagers;

class ArticlesResource extends Resource
{
    protected static ?string $model = Articles::class;

    protected static ?string $navigationIcon = 'heroicon-o-clipboard-document-check';
    
    protected static ?string $navigationLabel = 'Les articles';
    protected static ?string $navigationGroup = 'Les Annonces et Actualites ';


    public static function form(Form $form): Form
    {
        $userId = auth()->id();

        return $form
            ->schema([
                Card::make()->schema([
                    Grid::make(2)->schema([
                        Select::make('type')
                            ->label('Type')
                            ->options([
                                'News' => 'Actualité',
                                'Event' => 'Événement',
                            ])
                            ->required(),

                        TextInput::make('title')
                            ->label('Titre')
                            
                            ->required()
                            ->maxLength(255),

                            TextInput::make('location')
                            ->label('Lieu')
                            ->required()
                            ->maxLength(255),

                        DatePicker::make('publication_date')
                            ->label('Date de publication')
                            ->required(),

                            Textarea::make('content')
                            ->label('Contenu')
                            ->required(),

                        FileUpload::make('image')
                            ->label('Image')
                            ->image()
                            ->required(),
                            Hidden::make('user_id') // Champ user_id masqué
                            ->default($userId)
                            ->required(),
                    ])
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->label('ID'),
                TextColumn::make('user.name')->label('Auteur'),
                
                TextColumn::make('title')->label('Titre')->searchable()->limit(15),
                ImageColumn::make('image')->label('Image')->circular(),

                TextColumn::make('type')->label('Type'),
                TextColumn::make('publication_date')->label('Date de publication'),
                TextColumn::make('location')->label('Lieu'),
                TextColumn::make('created_at')->label('Créé le')->limit(10),
            ])
            ->filters([
                SelectFilter::make('type')->label('Type')->options([
                    'actualité' => 'Actualité',
                    'événement' => 'Événement',
                ]),
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
            'index' => Pages\ManageArticles::route('/'),
        ];
    }
}

<?php

namespace Happytodev\FilamentSocialNetworks\Resources;

use Closure;
use Filament\Forms;
use Filament\Tables;
use Filament\Resources\Form;
use App\Models\SocialNetwork;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\SocialNetworkResource\RelationManagers;
use Happytodev\FilamentSocialNetworks\Resources\SocialNetworkResource\Pages;

class SocialNetworkResource extends Resource
{
    protected static ?string $model = SocialNetwork::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('name')
                    ->options([
                        'facebook' => 'Facebook',
                        'github' => 'Github',
                        'instagram' => 'Instagram',
                        'twitter' => 'Twitter',
                        'youtube' => 'Youtube',
                    ])
                    ->required(),
                Forms\Components\FileUpload::make('icon'),
                Forms\Components\TextInput::make('url'),
                Forms\Components\Toggle::make('is_active')
                    ->default(true),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\ImageColumn::make('icon'),
                Tables\Columns\TextColumn::make('url'),
                Tables\Columns\BooleanColumn::make('is_active'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSocialNetworks::route('/'),
            'create' => Pages\CreateSocialNetwork::route('/create'),
            'edit' => Pages\EditSocialNetwork::route('/{record}/edit'),
        ];
    }
}

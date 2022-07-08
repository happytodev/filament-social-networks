<?php

namespace Happytodev\FilamentSocialNetworks\Resources;

use App\Models\SocialNetwork;
use Filament\Forms;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Happytodev\FilamentSocialNetworks\Resources\SocialNetworkResource\Pages;

class SocialNetworkResource extends Resource
{
    protected static ?string $model = SocialNetwork::class;

    protected static ?string $navigationIcon = 'heroicon-o-thumb-up';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name'),
                Forms\Components\Toggle::make('is_active')
                            ->inline(false)
                            ->default(true),
                Repeater::make('social_network')
                    ->schema([
                        Forms\Components\Select::make('name')
                            ->options([
                                'devianart' => 'DevianArt',
                                'discord' => 'Discord',
                                'facebook' => 'Facebook',
                                'github' => 'Github',
                                'instagram' => 'Instagram',
                                'linkedin' => 'LinkedIn',
                                'medium' => 'Medium',
                                'pinterest' => 'Pinterest',
                                'reddit' => 'Reddit',
                                'skype' => 'Skype',
                                'snapchat' => 'Snapchat',
                                'soundcloud' => 'SoundCloud',
                                'telegram' => 'Telegram',
                                'tiktok' => 'TikTok',
                                'tumblr' => 'Tumblr',
                                'twitch' => 'Twitch',
                                'twitter' => 'Twitter',
                                'vimeo' => 'Vimeo',
                                'wattpad' => 'WattPad',
                                'whatsapp' => 'WhatsApp',
                                'youtube' => 'Youtube',
                            ])
                            ->searchable()
                            ->reactive()
                            ->afterStateUpdated(function ($set, ?string $state) {
                                switch ($state) {
                                    case 'discord':
                                        # code...
                                        $set('url', 'https://discord.gg/{YourChannel}');

                                        break;
                                    case 'telegram':
                                        # code...
                                        $set('url', 'https://t.me/{YourUsername}');

                                        break;
                                    case 'tumblr':
                                        # code...
                                        $set('url', '{YourUsername}.tumblr.com');

                                        break;
                                    default:
                                        # code...
                                        $set('url', 'https://www.' . $state . '.com/');

                                        break;
                                }
                            })
                            ->required(),
                        Forms\Components\Toggle::make('is_active')
                            ->inline(false)
                            ->default(true),
                        Forms\Components\TextInput::make('url')
                            ->label('Enter your username or channel identifier 
                            (depends on rule of the selected social network)')
                            ->url()
                            ->columnSpan(2),
                        Forms\Components\FileUpload::make('icon')
                            ->columnSpan(2),
                ])
                ->columnSpan(2)
                ->collapsible()
                ->createItemButtonLabel('Add a new social network to this group'),
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

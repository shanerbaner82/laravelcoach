<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DeveloperResource\Pages;
use App\Filament\Resources\DeveloperResource\RelationManagers;
use App\Models\Developer;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DeveloperResource extends Resource
{
    protected static ?string $model = Developer::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->columns(1)
            ->inlineLabel()
            ->schema([
                TextInput::make('name')
                    ->required()
                    ->maxLength(255),

                TextInput::make('x_handle')
                    ->required()
                    ->maxLength(255)
                    ->prefix('@'),

                TextInput::make('years_experience_php')
                    ->required()
                    ->numeric()
                    ->label('Years of PHP Experience'),

                TextInput::make('years_experience_other')
                    ->required()
                    ->numeric()
                    ->label('Years of Other Programming Experience'),


                Select::make('ide')
                    ->options([
                        'VS Code' => 'VS Code',
                        'PhpStorm' => 'PhpStorm',
                        'Sublime Text' => 'Sublime Text',
                        'Other' => 'Other'
                    ])
                    ->required()
                    ->label('Preferred IDE'),
                Toggle::make('is_employed_as_dev')
                    ->required()
                    ->label('Currently Employed as Developer'),

                Toggle::make('willing_to_appear_on_camera')
                    ->required()
                    ->label('Willing to Appear on Camera'),

                Toggle::make('has_video_experience')
                    ->required()
                    ->label('Any experience with screencasts or videos?'),

                Toggle::make('interested_in_learning_laravel')
                    ->default(true)
                    ->required()
                    ->label('Interested in Learning Laravel'),

                TextInput::make('weekly_time_available')
                    ->required()
                    ->numeric()
                    ->label('Weekly Hours Available'),

                Textarea::make('learning_goal')
                    ->required()
                    ->maxLength(65535)
                    ->label('What are your learning goals?'),

                Select::make('php_framework_experience')
                    ->multiple()
                    ->options([
                        'None' => 'None',
                        'Laravel' => 'Laravel',
                        'Symfony' => 'Symfony',
                        'CodeIgniter' => 'CodeIgniter',
                        'other' => 'Other'
                    ])
                    ->required()
                    ->label('PHP Framework Experience'),


                Textarea::make('learning_challenges')
                    ->required()
                    ->maxLength(65535)
                    ->label('What challenges do you face while learning?'),

                Textarea::make('desired_project_type')
                    ->required()
                    ->maxLength(65535)
                    ->label('What type of project would you like to build?'),

                Select::make('preferred_learning_method')
                    ->options([
                        'Tutorials' => 'Tutorials',
                        'Hands-on projects' => 'Hands-on projects',
                        'Pair programming' => 'Pair programming',
                        'Documentation' => 'Documentation'
                    ])
                    ->required()
                    ->label('Preferred Learning Method'),


                Textarea::make('laravel_topics')
                    ->required()
                    ->label('Laravel Topics of Interest'),

                Textarea::make('struggles')
                    ->required()
                    ->maxLength(65535)
                    ->label('What are your current struggles?'),

                Textarea::make('comments')
                    ->maxLength(65535)
                    ->label('Additional Comments'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label('Name')
                    ->searchable(),
                TextColumn::make('x_handle')
                    ->label('X Handle')
                    ->searchable(),
                TextColumn::make('years_experience_php')
                    ->label('PHP')
                    ->numeric(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
            'index' => Pages\ListDevelopers::route('/'),
            'create' => Pages\CreateDeveloper::route('/create'),
            'edit' => Pages\EditDeveloper::route('/{record}/edit'),
        ];
    }
}

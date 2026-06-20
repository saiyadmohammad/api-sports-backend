<?php

namespace App\Filament\Resources\PageResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

use Filament\Forms\Components\KeyValue;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\TextColumn;

class SectionRelationManager extends RelationManager
{
    protected static string $relationship = 'section';

    public function form(Form $form): Form
    {
        $record = $form->getRecord();

        return $form->schema([
            ...static::getSectionFields($record?->type),
        ]);
    }

    protected static function getSectionFields(?string $type): array
    {
        return match ($type) {
                
            'hero_home' => [
                TextInput::make('section_data.heading'),
                TextInput::make('section_data.title_first'),
                TextInput::make('section_data.title_second'),
                Textarea::make('section_data.subtitle'),
                FileUpload::make('section_data.image'),
            ],

            'feature' => [
                TextInput::make('section_data.heading'),
                TextInput::make('section_data.title'),
                Textarea::make('section_data.subtitle'),

                Repeater::make('section_data.features')
                    ->schema([
                        TextInput::make('icon'),
                        TextInput::make('title'),
                        TextInput::make('description'),
                    ]),
            ],

            'widget' => [
                TextInput::make('section_data.heading'),
                TextInput::make('section_data.title'),
                Repeater::make('section_data.features')->simple(TextInput::make('feature')),
            ],

            'sports' => [
                Repeater::make('section_data.sports')
                    ->schema([
                        TextInput::make('icon'),
                        TextInput::make('name'),
                        // TextInput::make('slug'),
                    ]),
            ],

            'developer_home' => [
                TextInput::make('section_data.heading'),
                TextInput::make('section_data.title'),
                Repeater::make('section_data.features')->simple(TextInput::make('feature')),

                Repeater::make('section_data.codes')
                    ->schema([
                        TextInput::make('label'),
                        TextInput::make('code'),
                        // TextInput::make('active'),
                    ]),
            ],

            'seamless_integrations' => [
                TextInput::make('section_data.heading'),
                TextInput::make('section_data.title'),
                TextInput::make('section_data.subtitle'),

                Repeater::make('section_data.tech_icons')
                    ->schema([
                        TextInput::make('name'),
                        FileUpload::make('img'),
                    ]),
            ],

            'why_choose' => [
                TextInput::make('section_data.heading'),

                Repeater::make('section_data.features')
                    ->schema([
                        TextInput::make('title'),
                        TextInput::make('description'),
                        FileUpload::make('img'),
                    ]),
            ],

            'blogs' => [
                TextInput::make('section_data.heading'),
                TextInput::make('section_data.title'),
                Textarea::make('section_data.subtitle'),

                Repeater::make('section_data.blogs')
                    ->schema([
                        TextInput::make('title'),
                        TextInput::make('subtitle'),
                        TextInput::make('date'),
                        TextInput::make('type'),
                        TextInput::make('color'),
                        FileUpload::make('img'),
                    ]),
            ],

            'cta_section' => [
                TextInput::make('section_data.heading'),
                TextInput::make('section_data.title'),
                TextInput::make('section_data.subtitle'),
                FileUpload::make('section_data.image'),
            ],
        
            // football page
            'hero_football' => [
                TextInput::make('section_data.heading'),
                TextInput::make('section_data.title_first'),
                TextInput::make('section_data.title_middle'),
                Textarea::make('section_data.title_last'),
                Textarea::make('section_data.subtitle'),
                FileUpload::make('section_data.image'),

                Repeater::make('section_data.key_metrics')
                    ->schema([
                        TextInput::make('icon'),
                        TextInput::make('title'),
                        TextInput::make('subtitle'),
                        // FileUpload::make('image'),
                    ]),
            ],

            'data_coverage_football' => [
                TextInput::make('section_data.heading'),
                TextInput::make('section_data.title'),
                TextInput::make('section_data.subtitle'),

                Repeater::make('section_data.all_features')
                    ->schema([
                        TextInput::make('name'),
                        // TextInput::make('country'),
                        FileUpload::make('img'),
                        Toggle::make('features.live'),
                        Toggle::make('features.teams'),
                        Toggle::make('features.players'),
                        Toggle::make('features.results'),
                        Toggle::make('features.fixtures'),
                        Toggle::make('features.standings'),
                    ]),
            ],

            'developer_football' => [
                TextInput::make('section_data.heading'),
                TextInput::make('section_data.title'),
                TextInput::make('section_data.subtitle'),
                // Repeater::make('section_data.features')->simple(TextInput::make('feature')),

                Repeater::make('section_data.codes')
                    ->schema([
                        TextInput::make('label'),
                        TextInput::make('code'),
                        // TextInput::make('active'),
                    ]),
            ],

            // Cricket page
            'hero_cricket' => [
                TextInput::make('section_data.heading'),
                TextInput::make('section_data.title_first'),
                TextInput::make('section_data.title_middle'),
                Textarea::make('section_data.title_last'),
                Textarea::make('section_data.subtitle'),
                FileUpload::make('section_data.image'),

                Repeater::make('section_data.key_metrics')
                    ->schema([
                        TextInput::make('icon'),
                        TextInput::make('title'),
                        TextInput::make('subtitle'),
                        // FileUpload::make('image'),
                    ]),
            ],

            'data_coverage_cricket' => [
                TextInput::make('section_data.heading'),
                TextInput::make('section_data.title'),
                TextInput::make('section_data.subtitle'),

                Repeater::make('section_data.all_features')
                    ->schema([
                        TextInput::make('name'),
                        // TextInput::make('country'),
                        FileUpload::make('img'),
                        Toggle::make('features.live'),
                        Toggle::make('features.teams'),
                        Toggle::make('features.players'),
                        Toggle::make('features.results'),
                        Toggle::make('features.fixtures'),
                        Toggle::make('features.standings'),
                    ]),
            ],

            'developer_cricket' => [
                TextInput::make('section_data.heading'),
                TextInput::make('section_data.title'),
                TextInput::make('section_data.subtitle'),
                // Repeater::make('section_data.features')->simple(TextInput::make('feature')),

                Repeater::make('section_data.codes')
                    ->schema([
                        TextInput::make('label'),
                        TextInput::make('code'),
                        // TextInput::make('active'),
                    ]),
            ],

            'pricing' => [
                TextInput::make('section_data.heading'),
                TextInput::make('section_data.title'),
                Textarea::make('section_data.subtitle'),

                Repeater::make('section_data.pricing_plans')
                    ->schema([
                        TextInput::make('name'),
                        TextInput::make('description'),
                        TextInput::make('price')->numeric(),
                        TextInput::make('currency'),
                        TextInput::make('billing'),
                        TextInput::make('badge'),
                        Toggle::make('popular'),
                        Repeater::make('features')->simple(TextInput::make('feature')),
                    ]),
            ],

            default => [
                KeyValue::make('section_data'),
            ],
        };
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('title')
            ->columns([
                TextColumn::make('title'),
                TextColumn::make('type'),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
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
}

<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\ServicesCategoryResource\Pages;
use App\Filament\Admin\Resources\ServicesCategoryResource\RelationManagers;
use App\Models\Services_category;
use App\Models\ServicesCategory;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ServicesCategoryResource extends Resource
{
    protected static ?string $model = Services_category::class;

    protected static ?string $navigationIcon = 'carbon-category';

    protected static ?string $navigationBadgeTooltip = 'The number of categories';

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make("name"),
                Forms\Components\TextInput::make("description"),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->searchable(),
                Tables\Columns\TextColumn::make('description')->searchable(),
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

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListServicesCategories::route('/'),
            'create' => Pages\CreateServicesCategory::route('/create'),
            'edit' => Pages\EditServicesCategory::route('/{record}/edit'),
        ];
    }
}

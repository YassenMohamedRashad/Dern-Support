<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\RequestResource\Pages;
use App\Filament\Admin\Resources\RequestResource\RelationManagers;
use App\Models\Request;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\SelectColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class RequestResource extends Resource
{
    protected static ?string $model = Request::class;

    protected static ?string $navigationIcon = 'gmdi-request-page-r';
    protected static ?string $navigationBadgeTooltip = 'The number of requests';

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    public static function form(Form $form): Form
    {

        return $form
            ->schema([
                Forms\Components\TextInput::make('total_cost')->integer()->required(),
                Forms\Components\TextInput::make('details')->required(),
                Forms\Components\Select::make('status')->required()->options([
                    "completed" => "completed",
                    "in_progress" => "in_progress",
                ])->default("in_progress")->selectablePlaceholder(false),
                Forms\Components\Select::make("user_id")->relationship(name:"user",titleAttribute:"name")->required()->native(false)->searchable()->preload(),
                Forms\Components\TextInput::make('service_id')->required()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')->searchable(),
                Tables\Columns\TextColumn::make('total_cost')->sortable(),
                Tables\Columns\TextColumn::make('details'),
                Tables\Columns\TextColumn::make('status')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'in progress' => 'gray',
                        'completed' => 'success',
                        'in_progress' => 'warning',
                    }),
                Tables\Columns\TextColumn::make('user.name'),
                Tables\Columns\TextColumn::make('service_id'),
            ])
            ->filters([
                SelectFilter::make('status')->label("status")
                    ->options([
                        "in_progress" => 'in_progress',
                        "completed" => 'completed',
                    ]),
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
            'index' => Pages\ListRequests::route('/'),
            'create' => Pages\CreateRequest::route('/create'),
            'edit' => Pages\EditRequest::route('/{record}/edit'),
        ];
    }
}

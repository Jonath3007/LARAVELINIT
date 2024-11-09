<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TPSResource\Pages;
use App\Filament\Resources\TPSResource\RelationManagers;
use App\Models\TPS;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TPSResource extends Resource
{
    protected static ?string $model = TPS::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextArea::make('name'),
                Forms\Components\TextArea::make('alamat'),
                Forms\Components\Select::make('jurusan_id')
                ->relationship('kandidat', 'name')
                ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('alamat')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('kandidat.name')->searchable()->sortable(),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('type')
                ->relationship('kandidat', 'name')
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
            'index' => Pages\ListTPS::route('/'),
            'create' => Pages\CreateTPS::route('/create'),
            'edit' => Pages\EditTPS::route('/{record}/edit'),
        ];
    }
}

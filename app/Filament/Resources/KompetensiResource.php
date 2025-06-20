<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KompetensiResource\Pages;
use App\Filament\Resources\KompetensiResource\RelationManagers;
use App\Models\Kompetensi;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class KompetensiResource extends Resource
{
    protected static ?string $model = Kompetensi::class;

    protected static ?string $navigationGroup = 'Akademik';

    protected static ?string $navigationLabel = 'Kompetensi';

    protected static ?string $navigationIcon = 'heroicon-o-book-open';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\RichEditor::make('teks')
                    ->nullable()
                    ->columnSpanFull()
                    ->helperText('Teks singkat kompetensi (opsional). Kosongkan jika tidak ada informasi tambahan.'),
                Forms\Components\RichEditor::make('deskripsi')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('teks')
                    ->limit(50)
                    ->html(),
                Tables\Columns\TextColumn::make('deskripsi')
                    ->limit(50)
                    ->html(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
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
            'index' => Pages\ListKompetensis::route('/'),
            'create' => Pages\CreateKompetensi::route('/create'),
            'view' => Pages\ViewKompetensi::route('/{record}'),
            'edit' => Pages\EditKompetensi::route('/{record}/edit'),
        ];
    }
}

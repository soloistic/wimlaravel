<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PdfResource\Pages;
use App\Filament\Resources\PdfResource\RelationManagers;
use App\Models\Pdf;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PdfResource extends Resource
{
    protected static ?string $model = Pdf::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
    ->required()
    ->maxLength(255),

                Forms\Components\FileUpload::make('pdf_url')
    ->label('PDF File')
    ->directory('pdfs')
    ->acceptedFileTypes(['application/pdf'])
    ->required(),

Forms\Components\FileUpload::make('thumbnail_url')
    ->label('Thumbnail Image')
    ->directory('thumbnails')
    ->image()
    ->required(),

Forms\Components\DatePicker::make('published_at')
    ->label('Publish Date')
    ->required(),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('thumbnail_url')->label('Thumbnail'),
                Tables\Columns\TextColumn::make('title')->searchable(),
                Tables\Columns\TextColumn::make('published_at')->date()->sortable(),
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
            'index' => Pages\ListPdfs::route('/'),
            'create' => Pages\CreatePdf::route('/create'),
            'edit' => Pages\EditPdf::route('/{record}/edit'),
        ];
    }
}

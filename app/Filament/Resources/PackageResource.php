<?php

namespace App\Filament\Resources;

use App\Enums\PackageStatus;
use App\Enums\PackageStatus1;
use App\Enums\PickupLocation;
use App\Filament\Resources\PackageResource\Pages;
use App\Filament\Resources\PackageResource\RelationManagers;
use App\Models\Package;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Actions;
use filament\filament;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PackageResource extends Resource
{
    protected static ?string $model = Package::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('user_id')
                    ->relationship('user', 'name')
                    ->required(),
                Forms\Components\TextInput::make('tracking_number')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('weight')
                    ->numeric(),
                Forms\Components\TextInput::make('vendor')
                    ->required()
                    ->maxLength(255),
                // Forms\Components\TextInput::make('pickup_location')
                //     ->required()
                //     ->maxLength(255),
                Forms\Components\Select::make('pickup_location')
                    ->options(PickupLocation::class)
                    ->required(),
                Forms\Components\Textarea::make('order_description')
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('balance')
                    ->numeric(),
                Forms\Components\Select::make('status')
                    ->options(PackageStatus::class)
                    ->required(),
                Forms\Components\TextInput::make('courier')
                    ->maxLength(255),
                Forms\Components\TextInput::make('usd_value')
                    ->numeric(),
                Forms\Components\DateTimePicker::make('received_at'),
                // Forms\Components\TextInput::make('invoice_path')
                //     ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('tracking_number')
                    ->searchable(),
                Tables\Columns\TextColumn::make('weight')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('vendor')
                    ->searchable(),
                    Tables\Columns\TextColumn::make('order_description')
                    ->searchable(),
                Tables\Columns\TextColumn::make('pickup_location')
                    ->searchable(),
                Tables\Columns\TextColumn::make('balance')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('status')
                    ->searchable(),
                Tables\Columns\TextColumn::make('courier')
                    ->searchable(),
                Tables\Columns\TextColumn::make('usd_value')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('received_at')
                    ->dateTime()
                    ->sortable(),
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
                Actions\Action::make('view')
                    ->label('Invoice')
                    ->icon('heroicon-s-document')
                    ->color('danger')
                    ->url(fn (Package $record): string => route('view.package', $record)) // Assuming 'view.file' is the route to view a file
                    ->openUrlInNewTab(),
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
            'index' => Pages\ListPackages::route('/'),
            'create' => Pages\CreatePackage::route('/create'),
            'edit' => Pages\EditPackage::route('/{record}/edit'),
        ];
    }
}

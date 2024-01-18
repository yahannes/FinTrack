<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CompanyPaymentResource\Pages;
use App\Filament\Resources\CompanyPaymentResource\RelationManagers;
use App\Models\CompanyPayment;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CompanyPaymentResource extends Resource
{
    protected static ?string $model = CompanyPayment::class;
    protected static ?string $navigationLabel = 'Company payment';
    protected static ?string $modelLabel = 'Payment';
    protected static ?string $navigationGroup = 'Company management';
    protected static ?string $navigationIcon = 'heroicon-o-credit-card';
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('company_id')
                    ->relationship('company', 'name')
                    ->required(),
                Forms\Components\TextInput::make('account')
                    ->required()
                    ->numeric()
                    ->mask('00000000000000000000')
                    ->maxLength(20)
                    ->placeholder('00000000000000000000'),
                Forms\Components\TextInput::make('bic')
                    ->required()
                    ->numeric()

                    ->mask('012345678')
                    ->placeholder('012345678')
                    ->maxLength(9),
                Forms\Components\TextInput::make('corporate_account')
                    ->mask('00000000000000000000')
                    ->placeholder('00000000000000000000')
                    ->required()
                    ->maxLength(20),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('company.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('account')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('bic')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('corporate_account')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('deleted_at')
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
            'index' => Pages\ListCompanyPayments::route('/'),
            'create' => Pages\CreateCompanyPayment::route('/create'),
            'view' => Pages\ViewCompanyPayment::route('/{record}'),
            'edit' => Pages\EditCompanyPayment::route('/{record}/edit'),
        ];
    }
}
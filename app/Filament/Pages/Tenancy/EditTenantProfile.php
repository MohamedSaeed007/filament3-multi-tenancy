<?php
namespace App\Filament\Pages\Tenancy;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Pages\Tenancy\EditTenantProfile as TenantEdit;

class EditTenantProfile extends TenantEdit
{
    public static function getLabel(): string
    {
        return 'Tenant profile';
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name'),
                // ...
            ]);
    }
}

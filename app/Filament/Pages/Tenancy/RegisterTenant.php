<?php

namespace App\Filament\Pages\Tenancy;

use App\Models\Tenant;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Pages\Tenancy\RegisterTenant as TenantResgisteration;

class RegisterTenant extends TenantResgisteration
{
    public static function getLabel(): string
    {
        return 'Register Tenant';
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name'),
            ]);
    }

    protected function handleRegistration(array $data): Tenant
    {
        $team = Tenant::create($data);

        $team->users()->attach(auth()->user());

        return $team;
    }
}

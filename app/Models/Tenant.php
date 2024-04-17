<?php

namespace App\Models;

use Filament\Models\Contracts\HasCurrentTenantLabel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Tenant extends Model implements HasCurrentTenantLabel
{
    use HasFactory;

    protected $fillable = ['name'];

    public function getCurrentTenantLabel(): string
    {
        return 'Active Tenant';
    }
    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }
}

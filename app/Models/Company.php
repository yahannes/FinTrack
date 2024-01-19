<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Company extends Model
{
    protected  $fillable = [
        'user_id',
        'name',
        'short_name',
        'type',
    ];
    public function members(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }

    public function companyExtracts() : HasMany
    {
        return $this->hasMany(CompanyExtract::class);
    }

    public function companyRequisites() : HasOne
    {
        return $this->hasOne(CompanyRequisite::class);
    }
    public function companyWarehouses(): HasOne
    {
        return $this->hasOne(CompanyWarehouse::class);
    }
    public function companyPayments(): HasMany
    {
        return $this->hasMany(CompanyPayment::class);
    }

    public function stuffDocuments(): HasMany
    {
        return $this->hasMany(StuffDocument::class);
    }

    public function companyContacts() : HasMany
    {
        return $this->hasMany(CompanyContact::class);
    }

    public function companyStuffs(): HasMany
    {
        return $this->hasMany(CompanyStuff::class);
    }
    use HasFactory, SoftDeletes;
}

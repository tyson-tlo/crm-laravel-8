<?php

namespace App\Models;

use App\Traits\Models\ModelDatesTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProspectActivity extends Model
{
    use HasFactory, ModelDatesTrait;

    protected $guarded = [];

    public function scopeProspectId($query, $id)
    {
        return $query->where('prospect_id', $id);
    }

    public function documents()
    {
        return $this->hasMany(\App\Models\ProspectDocument::class, 'activity_id', 'id');
    }
}

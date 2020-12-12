<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProspectActivity extends Model
{
    use HasFactory;

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

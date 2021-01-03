<?php
namespace App\Traits\Models;

trait ModelDatesTrait
{
    public function getCreatedAtPrettyAttribute()
    {
        return date('F d, Y @ g:i A T', strtotime($this->created_at));
    }
}

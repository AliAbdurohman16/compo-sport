<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $fillable = ['path', 'facility_id', 'page_id'];

    public function facility()
    {
        return $this->belongsTo(Facility::class);
    }

    public function page()
    {
        return $this->belongsTo(Page::class);
    }
}

<?php

namespace App\Models;

use App\Enums\SupportStatus;
use Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Support extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'subject',
        'body',
        'status'
    ];
    
    // protected $casts = ['status' => SupportStatus::class];

    public function status(): Attribute
    {
        return Attribute::make();
        
    }
}

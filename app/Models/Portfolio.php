<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Portfolio extends Model
{
    use HasTranslations;

    protected $fillable = [
        'first_name',
        'last_name',
        'brith_year',
        'phone1',
        'phone2',
        'title',
        'email',
        'telegram',
        'website',
        'instagram',
        'github',
        'havola',
        'linkedin',
        'facebook',
    ];
    public $translatable = [
        'title'
    ];
}

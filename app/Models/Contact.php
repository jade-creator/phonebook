<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


/**
 * Primary key
 * @property int $id
 *
 * Attributes
 * @property string $name
 * @property string $contact_no
 *
 * Timestamps
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 *
 * @mixin \Eloquent
 */
class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'contact_no',
    ];
}

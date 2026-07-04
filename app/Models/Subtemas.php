<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subtemas extends Model
{
    use HasFactory;

    protected $table = 'subtemas';

    protected $primaryKey = 'noDeSubtema';

    public $incrementing = false;

    protected $keyType = 'string';

    protected $fillable = ['noDeSubtema', 'noDeUnidad', 'materia', 'nombreSubtema'];
}

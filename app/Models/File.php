<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $fillable = [
        'ref_table',
        'ref_id',
        'file_path',
        'file_name'
    ];
}


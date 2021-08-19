<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Obyekt
 * @package App\Models
 * @version August 19, 2021, 11:07 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $mahsulots
 * @property string $nom
 * @property string $klass
 */
class Obyekt extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'obyekts';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'nom',
        'klass'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nom' => 'string',
        'klass' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nom' => 'required|string|max:255|string|max:255',
        'klass' => 'required|string|max:255|string|max:255',
        'created_at' => 'nullable|nullable',
        'updated_at' => 'nullable|nullable',
        'deleted_at' => 'nullable|nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function mahsulots()
    {
        return $this->hasMany(\App\Models\Mahsulot::class, 'obyekt_id', 'id');
    }
}

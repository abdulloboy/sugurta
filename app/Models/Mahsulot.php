<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Mahsulot
 * @package App\Models
 * @version August 19, 2021, 12:25 pm UTC
 *
 * @property \App\Models\Obyekt $obyekt
 * @property \Illuminate\Database\Eloquent\Collection $risks
 * @property \Illuminate\Database\Eloquent\Collection $oqibats
 * @property integer $obyekt_id
 * @property string $Nom
 * @property string|\Carbon\Carbon $yaratilgan_sana
 * @property integer $risk
 * @property integer $oqibat
 */
class Mahsulot extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'mahsulots';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'obyekt_id',
        'Nom',
        'yaratilgan_sana',
        'risks',
        'oqibats'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'obyekt_id' => 'integer',
        'Nom' => 'string',
        'yaratilgan_sana' => 'datetime',
        /* 'risks' => 'array',
        'oqibats' => 'array' */
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'obyekt_id' => 'required',
        'Nom' => 'required|string|max:255|string|max:255',
        'yaratilgan_sana' => 'required',
        'created_at' => 'nullable|nullable',
        'updated_at' => 'nullable|nullable',
        'deleted_at' => 'nullable|nullable',
        /* 'risks' => 'required',
        'oqibats' => 'required' */
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function obyekt()
    {
        return $this->belongsTo(\App\Models\Obyekt::class, 'obyekt_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function risks()
    {
        return $this->belongsToMany(\App\Models\Risk::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function oqibats()
    {
        return $this->belongsToMany(\App\Models\Oqibat::class);
    }
}

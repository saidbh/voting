<?php

namespace App\Models;

use App\Models\establishments;
use App\Models\regions;
use App\Models\grades;
use App\Models\users_type;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contacts extends Model
{
    use HasFactory;
    
    protected $guard = 'web';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'contacts';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = true;

    /**
     * The name of the "created at" column.
     *
     * @var string
     */
    const CREATED_AT = 'created_at';

    /**
     * The name of the "updated at" column.
     *
     * @var string
     */
    const UPDATED_AT = 'updated_at';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'users_type_id',
        'users_id',
        'establishments_id',
        'grades_id',
        'regions_id',
        'first_name',
        'last_name',
        'email',
        'cin',
        'cnrps',
        'date_grade',
        'date_recrutement',
        'phone',
        'gender',
        'birthday',
        'address_line',
        'zip_code',
        'details',
    ];
    public function establishement()
    {
        return $this->belongsTo(establishments::class, 'establishments_id','id');
    }
    public function position()
    {
        return $this->belongsTo(users_type::class, 'users_type_id','id');
    }
    public function grades()
    {
        return $this->belongsTo(grades::class, 'grades_id','id');
    }
    public function regions()
    {
        return $this->belongsTo(regions::class, 'regions_id','id');
    }
}

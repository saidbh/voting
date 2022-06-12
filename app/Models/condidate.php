<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class condidate extends Model
{
    use HasFactory;

    protected $guard = 'web';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'candidate';

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
        'sessions_id', 
        'users_id', 
        'commissions_id', 
        'grades_id', 
        'disciplines_id',
        'establishments_id', 
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
        'status', 
        'details', 
        'created_at', 
        'updated_at'
    ];
    public function establishement()
    {
        return $this->belongsTo(establishments::class, 'establishments_id','id');
    }
    public function sessions()
    {
        return $this->belongsTo(sessions::class, 'sessions_id','id');
    }
    public function compositions()
    {
        return $this->belongsTo(compositions::class, 'id','condidate_id');
    }
    public function statusCandidat()
    {
        return $this->belongsTo(voteResult::class, 'id', 'candidate_id');
    }
}

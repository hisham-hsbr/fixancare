<?php

namespace App\Models\Fixancare;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class MobileService extends Model
{
    use HasFactory;

     protected $fillable = [
        'name',
        'status'
    ];
    protected $casts = [
        'date' => 'datetime'
    ];

    public function getCreatedAtAttribute()
    {
        $time_zone = Auth::user()->timeZone->time_zone;
        return Carbon::parse($this->attributes['created_at'])->setTimezone($time_zone);
    }

    public function getUpdatedAtAttribute()
    {
        $time_zone = Auth::user()->timeZone->time_zone;
        return Carbon::parse($this->attributes['updated_at'])->setTimezone($time_zone);
    }

    public function createdBy()
    {
        // return $this->belongsTo(User::class,'created_by','id');
        return $this->belongsTo('App\Models\User','created_by','id');
    }
    public function updatedBy()
    {
        // return $this->belongsTo(User::class,'updated_by','id');
        return $this->belongsTo('App\Models\User','created_by','id');

    }
    public function jobType()
    {
        return $this->belongsTo(JobType::class,'job_type_id','id');
    }
    public function jobStatus()
    {
        return $this->belongsTo(JobStatus::class,'job_status_id','id');
    }
    public function workStatus()
    {
        return $this->belongsTo(WorkStatus::class,'work_status_id','id');
    }
    public function mobileModel()
    {
        return $this->belongsTo(MobileModel::class,'mobile_model_id','id');
    }
    public function mobileComplaint()
    {
        return $this->belongsTo(MobileComplaint::class,'mobile_complaint_id','id');
    }
}

<?php

namespace App\Models;

use Carbon\Carbon;
use App\Models\TimeZone;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;

class Blood extends Model
{
    use HasFactory,LogsActivity;

     protected $fillable = [
        'name',
        'status'
    ];

    //-->start laravel-activitylog
    //only the `deleted` event will get logged automatically
    // protected static $recordEvents = ['deleted'];
    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
        ->logOnly(['name','description','status'])
        // Chain fluent methods for configuration options

        ->setDescriptionForEvent(fn(string $eventName) => "This Blood Group has been {$eventName}")
        ->useLogName('Blood Group')
        // ->dontLogIfAttributesChangedOnly(['email']) //By default the updated_at attribute is not ignored and will trigger an activity being logged
        ->logOnlyDirty();
        // ->dontSubmitEmptyLogs(); //Prevent save logs items that have no changed attribute
    }

    // <--End laravel-activitylog

    public function timeZone()
    {
        return $this->belongsTo(TimeZone::class,'time_zone_id','id');
    }

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
        return $this->belongsTo(User::class,'created_by','id');
    }
    public function updatedBy()
    {
        return $this->belongsTo(User::class,'updated_by','id');
    }
}

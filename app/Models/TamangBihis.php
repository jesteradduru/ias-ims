<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TamangBihis extends Model
{
    use HasFactory;

    protected $fillable = ['inspecting_office_id', 'date_time', 'unit_id', 'fullname', 'infractions_noted', 'status'];

    public function encoder() : BelongsTo {
        return $this->belongsTo(User::class, 'id');
    }

    public function unit() : BelongsTo {
        return $this->belongsTo(Unit::class);
    }

    public function inspecting_office() : BelongsTo {
        return $this->belongsTo(InspectingOffice::class);
    }

    public function infraction() : HasMany {
        return $this->hasMany(TamangBihisInfraction::class);
    }

}

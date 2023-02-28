<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AccidentDriverInfo extends Model
{
    protected $table = 'accident_driver_infos';
    protected $primarykey = 'id';
    protected $fillable = ['acc_id', 'otherDriverFullName', 'otherDriverVehReg', 'otherDriverAddress', 'otherDriverContact', 'wasForcedByPolicy', 'incidentDate', 'incidentTime', 'location', 'weather'];
}

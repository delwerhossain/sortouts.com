<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MotorQuotDrivingInfo extends Model
{
    protected $table = 'motor_quot_driving_infos';
    protected $primarykey = 'id';
    protected $fillable = ['motor_quote_id', 'licenseType', 'licensePeriod', 'licenceObtainDate', 'licenceNo', 'isMotorAccidented', 'driverDetails', 'type'];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VanQuotDrivingInfo extends Model
{
    protected $table = 'van_quot_driving_infos';
    protected $primarykey = 'id';
    protected $fillable = ['van_quote_id', 'licenseType', 'licensePeriod', 'licenceObtainDate', 'licenceNo', 'dvla', 'driveQualify', 'dateQualifyObtain', 'isBornInUK', 'residentPermitDate', 'otherVehicle', 'criminalConvictions', 'convictionDesc', 'isMotorAccidented', 'driverDetails', 'type'];
}

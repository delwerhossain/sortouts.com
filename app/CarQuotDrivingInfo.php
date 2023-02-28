<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CarQuotDrivingInfo extends Model
{
    protected $table = 'car_quot_driving_infos';
    protected $primarykey = 'id';
    protected $fillable = ['car_quote_id', 'licenseType', 'licensePeriod', 'licenceObtainDate', 'licenceNo', 'dvla', 'driveQualify', 'dateQualifyObtain', 'isBornInUK', 'residentPermitDate', 'otherVehicle', 'criminalConvictions', 'convictionDesc', 'isMotorAccidented', 'driverDetails', 'type'];
}

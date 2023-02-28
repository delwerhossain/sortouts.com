<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CarQuote extends Model
{
    protected $table = 'car_quotes';
    protected $primarykey = 'id';
    protected $fillable = ['chkIfOnline', 'contactReason', 'refferName', 'insuranceDecline', 'declinedInsure', 'title', 'firstName', 'lastName', 'Dob', 'houseNo', 'address', 'postCode', 'maritStatus', 'employeeStatus', 'ifSelfEmployedOccu', 'ifSelfEmployedBusiness', 'isHomeOwner', 'childU16', 'email', 'mobile', 'phone', 'contactVia', 'additionalDriver', 'additionalComment', 'type'];

    public function vehicleInfos()
    {
        return $this->hasMany(CarQuotVehicleInfo::class);
    }

    public function driveInfos()
    {
        return $this->hasMany(CarQuotDrivingInfo::class);
    }
}

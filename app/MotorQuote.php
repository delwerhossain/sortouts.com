<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MotorQuote extends Model
{
    protected $table = 'motor_quotes';
    protected $primarykey = 'id';
    protected $fillable = ['chkIfOnline', 'contactReason', 'refferName', 'insuranceDecline', 'declinedInsure', 'title', 'firstName', 'lastName', 'Dob', 'houseNo', 'address', 'postCode', 'maritStatus', 'employeeStatus', 'ifSelfEmployedOccu', 'ifSelfEmployedBusiness', 'isHomeOwner', 'childU16', 'email', 'mobile', 'phone', 'contactVia', 'additionalDriver', 'additionalComment', 'type'];

    public function vehicleInfos()
    {
        return $this->hasMany(MotorQuotVehicleInfo::class);
    }

    public function driveInfos()
    {
        return $this->hasMany(MotorQuotDrivingInfo::class);
    }
}

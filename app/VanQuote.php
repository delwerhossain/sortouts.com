<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\VanQuotVehicleInfo;
use App\VanQuotDrivingInfo;

class VanQuote extends Model
{
    protected $table = 'van_quotes';
    protected $primarykey = 'id';
    protected $fillable = ['chkIfOnline', 'contactReason', 'refferName', 'insuranceDecline', 'declinedInsure', 'title', 'firstName', 'lastName', 'Dob', 'houseNo', 'address', 'postCode', 'maritStatus', 'employeeStatus', 'ifSelfEmployedOccu', 'ifSelfEmployedBusiness', 'isHomeOwner', 'childU16', 'email', 'mobile', 'phone', 'contactVia', 'additionalDriver', 'additionalComment', 'type'];

    public function vehicleInfos()
    {
        return $this->hasMany(VanQuotVehicleInfo::class);
    }

    public function driveInfos()
    {
        return $this->hasMany(VanQuotDrivingInfo::class);
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VanQuotAdDriverDetails extends Model
{
    protected $table = 'van_quot_ad_driver_details';
    protected $primarykey = 'id';
    protected $fillable = ['van_quote_id', 'title', 'firstName', 'surname', 'relationshipWithPolicyHolder', 'DOB', 'maritalStatus', 'employmentStatus', 'employmentOccupation', 'employmentBusiness', 'licenceType', 'licencePeriod', 'less3YearDate', 'licenceNo', 'DVLA', 'bornInUK', 'dateOfResidency', 'otherVehicleUsage', 'motorAccident', 'motorConviction', 'type'];
}

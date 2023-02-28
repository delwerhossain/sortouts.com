<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CarQuotVehicleInfo extends Model
{
    protected $table = 'car_quot_vehicle_infos';
    protected $primarykey = 'id';
    protected $fillable = ['car_quote_id', 'vReg', 'carValue', 'isModified', 'modifyInfo', 'dateOfPurchase', 'useOfVehicle', 'keptLocation', 'keptLocationNight', 'isCarInSameAddress', 'carOtherAddress', 'regKeeper', 'legalOwner', 'insureDecline', 'annulMileage', 'coverType', 'noClaimDiscount', 'howClaimDiscount', 'wasNCDFrmUK', 'protectNcd', 'voluntaryEx', 'insurancePayPeriod', 'currOrPreCarInsure', 'policyStartDate'];
}

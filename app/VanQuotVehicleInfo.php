<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VanQuotVehicleInfo extends Model
{
    protected $table = 'van_quot_vehicle_infos';
    protected $primarykey = 'id';
    protected $fillable = ['van_quote_id', 'vReg', 'carValue', 'manufactur', 'vModel', 'regYear', 'immobiliser', 'seats', 'doorNo', 'engineSize', 'transmission', 'fuelType', 'bodyType', 'roofType', 'wheel', 'isModified', 'modifyInfo', 'impoundWithPolice', 'dateOfPurchase', 'useOfVehicle', 'keptLocation', 'keptLocationNight', 'isCarInSameAddress', 'carOtherAddress', 'regKeeper', 'legalOwner', 'insureDecline', 'annulMileage', 'coverType', 'noClaimDiscount', 'howClaimDiscount', 'wasNCDFrmUK', 'protectNcd', 'voluntaryEx', 'insurancePayPeriod', 'currOrPreCarInsure', 'policyStartDate'];
}

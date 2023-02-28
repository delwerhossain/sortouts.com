<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MotorQuotVehicleInfo extends Model
{
    protected $table = 'motor_quot_vehicle_infos';
    protected $primarykey = 'id';
    protected $fillable = ['motor_quote_id', 'tradeType', 'isTradeFrmHome', 'ifNotFrmHome', 'companyType', 'tradeName', 'haveRecoveryTruck', 'truckModel', 'isPolicyExist', 'prevPolicyInsureName', 'approxCarSell', 'vReg1', 'vReg2', 'vReg3', 'vReg4', 'carAtaTimeKeep', 'garageDetails', 'garageCapacity', 'individualCarMaxQty', 'isCoverReq', 'doSellVehOver3Ton', 'prefferedCover', 'isClaimBonusMotor', 'isClaimBonusCar', 'insurancePayPeriod', 'policyStartDate'];
}

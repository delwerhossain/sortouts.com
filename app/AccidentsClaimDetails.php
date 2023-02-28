<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AccidentsClaimDetails extends Model
{
    protected $table = 'accidents_claim_details';
    protected $primarykey = 'id';
    protected $fillable = ['driver_info_id', 'accidenType', 'accidentDate', 'damageInfo', 'claimCost', 'accidentFault', 'isInjured', 'type', 'adDriver'];
}

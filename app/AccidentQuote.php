<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AccidentQuote extends Model
{
    protected $table = 'accident_quotes';
    protected $primarykey = 'id';
    protected $fillable = ['chkIfOnline', 'contactReason', 'refferName', 'title', 'firstName', 'lastName', 'vReg', 'Dob', 'houseNo', 'address', 'postCode', 'mobile', 'currInsure', 'haveWitness', 'anyInjuries'];
}

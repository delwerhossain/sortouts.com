<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ConvictionPenaltyDetails extends Model
{
    protected $table = 'conviction_penalty_details';
    protected $primarykey = 'id';
    protected $fillable = ['driver_info_id', 'convictionCode', 'convictionDate', 'points', 'fine', 'ban', 'type', 'adDriver'];
}

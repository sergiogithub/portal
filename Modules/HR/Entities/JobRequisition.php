<?php

namespace Modules\HR\Entities;

use Illuminate\Database\Eloquent\Model;

class JobRequisition extends Model
{
    protected $fillable = ['domain_id', 'job_id'];

    protected $table = 'job_Requisition';

    public function job()
    {
        return $this->belongsTo(Job::class, 'job_id');
    }

    public function hrJobDomain()
    {
        return $this->belongsTo(HrJobDomain::class, 'domain_id');
    }
}

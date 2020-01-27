<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    //

    protected $fillable = ['user_id','surname','firstname','middlename','sex','dob','marital_status','occupation','employment_status','income_source','company_name','sector','company_address','home_town','local_govt','state','nationality','residential_address','residential_state','residential_country','zip_code','identification_means','identification_number','project_location','project_lga','project_state','titledoc_type','ref_no','land_size','beacon_number','design_type','topography','national_housing_contributor','nhf_number','nhf_duration','repayment_option','mortgage_bank'];

    public function user(){
    	return $this->belongsTo(User::class);
    }

    public function documents(){
    	return $this->hasMany(Document::class);
    }
}

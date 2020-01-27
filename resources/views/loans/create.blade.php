@extends('layouts.app')
@section('content')

        <div class="col-md-8">
            <div class="card-header text-center">{{ __('Loan Application') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('loans.store') }}">
                        @csrf
                <div class="accordion" id="accordionExample">
                  <div class="card">
                    <div class="card-header" id="headingOne">
                      <h2 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                          Loan Application Form - Section One
                        </button>
                      </h2>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                      <div class="card-body">
                        <div class="form-group row">
                            <input type="Number" id="user_id" name="user_id" value="{{ Auth::User()->id }}" hidden="hidden">
                             @if ($errors->has('user_id'))
                    <span class="text-danger">{{ $errors->first('user_id') }}</span>
                             @endif
                            <div class="col-md-4 card-body">
                                <input id="surname" type="text" class="form-control @error('surname') is-invalid @enderror" name="surname" value="{{ old('surname') }}" placeholder="Surname" required autocomplete="surname" autofocus>
                                @error('surname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-4">
                                <input id="firstname" type="text" class="form-control @error('firstname') is-invalid @enderror" name="firstname" value="{{ old('firstname') }}" placeholder="Firstname" required autocomplete="firstname" autofocus>
                                @error('firstname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-4">
                                <input id="middlename" type="text" class="form-control @error('middlename') is-invalid @enderror" name="middlename" value="{{ old('middlename') }}" placeholder="Middlename" required autocomplete="middlename" autofocus>
                                @error('middlename')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            
                            <div class="col-md-4">
                                <select name="sex" id="sex" class="form-control @error('sex') is-invalid @enderror" required autocomplete="sex" autofocus value="{{old('sex')}}">
                                    <option> select</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                                @error('sex')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-4">
                                <input id="dob" type="date" class="form-control @error('dob') is-invalid @enderror" name="dob" placeholder="Date of Birth" required autocomplete="dob">

                                @error('dob')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                             <div class="col-md-4">
                                <select name="marital_status" id="marital_status" class="form-control @error('marital_status') is-invalid @enderror" required autocomplete="marital_status" autofocus value="{{old('marital_status')}}">
                                    <option> Marital Status</option>
                                    <option value="Single">Single</option>
                                    <option value="Maried">Maried</option>
                                </select>
                                @error('marital_status')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-4">
                                <input id="occupation" type="text" class="form-control @error('occupation') is-invalid @enderror" name="occupation" placeholder="Occupation" required autocomplete="occupation">

                                @error('occupation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>            
                            <div class="col-md-4">
                                <select name="employment_status" id="employment_status" class="form-control @error('employment_status') is-invalid @enderror" required autocomplete="employment_status" autofocus value="{{old('employment_status')}}">
                                    <option> Employment Status</option>
                                    <option value="Employed">Employed</option>
                                    <option value="Self Employed">Self Employed</option>
                                </select>
                                @error('employment_status')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                
                              <div class="col-md-4">
                                <input id="income_source" type="text" class="form-control @error('income_source') is-invalid @enderror" name="income_source" placeholder="Source of Income" required autocomplete="income_source">

                                @error('income_source')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div> 
                        </div>

                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header" id="headingTwo">
                      <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                          Loan Application Form-Section Two
                        </button>
                      </h2>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                      <div class="card-body">
                                               <div class="form-group row">
                            <div class="col-md-4">
                                <input id="company_name" type="text" class="form-control @error('company_name') is-invalid @enderror" name="company_name" placeholder="Company Name" required autocomplete="company_name">

                                @error('company_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>            
                            <div class="col-md-4">
                                <select name="sector" id="sector" class="form-control @error('sector') is-invalid @enderror" required autocomplete="sector" autofocus value="{{old('sector')}}">
                                    <option>Company Sector</option>
                                    <option value="Private">Private Sector</option>
                                    <option value="Public">Public Sector</option>
                                </select>
                                @error('sector')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                
                              <div class="col-md-4">
                                <input id="company_address" type="text" class="form-control @error('company_address') is-invalid @enderror" name="company_address" placeholder="Company Adress" required autocomplete="company_address">

                                @error('company_address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div> 
                        </div>
                        <div class="form-group row">
                            <div class="col-md-4">
                                <input id="home_town" type="text" class="form-control @error('home_town') is-invalid @enderror" name="home_town" placeholder="Home Town" required autocomplete="home_town">

                                @error('home_town')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>            
                           <div class="col-md-4">
                                <input id="local_govt" type="text" class="form-control @error('local_govt') is-invalid @enderror" name="local_govt" placeholder="Local Government" required autocomplete="local_govt">

                                @error('local_govt')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div> 
                
                              <div class="col-md-4">
                                <input id="state" type="text" class="form-control @error('state') is-invalid @enderror" name="state" placeholder="State" required autocomplete="state">

                                @error('state')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div> 
                        </div>
                        <div class="form-group row">
                            <div class="col-md-4">
                                <input id="nationality" type="text" class="form-control @error('nationality') is-invalid @enderror" name="nationality" placeholder="Nationality" required autocomplete="nationality">

                                @error('nationality')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>            
                           <div class="col-md-4">
                                <input id="residential_address" type="text" class="form-control @error('residential_address') is-invalid @enderror" name="residential_address" placeholder="Residential Address" required autocomplete="residential_address">

                                @error('residential_address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div> 
                
                              <div class="col-md-4">
                                <input id="residential_state" type="text" class="form-control @error('residential_state') is-invalid @enderror" name="residential_state" placeholder="State of Residence" required autocomplete="state">

                                @error('residential_state')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div> 
                        </div>
                        <div class="form-group row">
                            <div class="col-md-4">
                                <input id="residential_country" type="text" class="form-control @error('residential_country') is-invalid @enderror" name="residential_country" placeholder="Country of Residence" required autocomplete="residential_country">

                                @error('residential_country')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>            
                           <div class="col-md-4">
                                <input id="zip_code" type="text" class="form-control @error('zip_code') is-invalid @enderror" name="zip_code" placeholder="Zip Code" required autocomplete="zip_code">

                                @error('zip_code')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div> 
                
                              <div class="col-md-4">
                                <input id="identification_means" type="text" class="form-control @error('identification_means') is-invalid @enderror" name="identification_means" placeholder="Means of Identification" required autocomplete="state">

                                @error('identification_means')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div> 
                        </div>
                         <div class="form-group row">
                            <div class="col-md-4">
                                <input id="identification_number" type="text" class="form-control @error('identification_number') is-invalid @enderror" name="identification_number" placeholder="Identification Number" required autocomplete="identification_number">

                                @error('identification_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>            
                           <div class="col-md-4">
                                <input id="project_location" type="text" class="form-control @error('project_location') is-invalid @enderror" name="project_location" placeholder="Project Location" required autocomplete="zip_code">

                                @error('project_location')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div> 
                
                              <div class="col-md-4">
                                <input id="project_lga" type="text" class="form-control @error('project_lga') is-invalid @enderror" name="project_lga" placeholder="Local Govt of Project" required autocomplete="state">

                                @error('project_lga')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div> 
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header" id="headingThree">
                      <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                          Loan Application - Section Three
                        </button>
                      </h2>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                      <div class="card-body">
                       
                        <div class="form-group row">
                            <div class="col-md-4">
                                <input id="project_state" type="text" class="form-control @error('project_state') is-invalid @enderror" name="project_state" placeholder="State of Project" required autocomplete="project_state">

                                @error('project_state')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>            
                           <div class="col-md-4">
                                <input id="titledoc_type" type="text" class="form-control @error('titledoc_type') is-invalid @enderror" name="titledoc_type" placeholder="Title Document Type" required autocomplete="titledoc_type">

                                @error('titledoc_type')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div> 
                
                              <div class="col-md-4">
                                <input id="ref_no" type="text" class="form-control @error('ref_no') is-invalid @enderror" name="ref_no" placeholder="Reference Number" required autocomplete="ref_no">

                                @error('ref_no')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div> 
                        </div>
                        <div class="form-group row">
                            <div class="col-md-4">
                                <input id="land_size" type="text" class="form-control @error('land_size') is-invalid @enderror" name="land_size" placeholder="Land Size" required autocomplete="land_size">

                                @error('land_size')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>            
                           <div class="col-md-4">
                                <input id="beacon_number" type="text" class="form-control @error('beacon_number') is-invalid @enderror" name="beacon_number" placeholder="Beacon Number" required autocomplete="beacon_number">

                                @error('beacon_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div> 
                
                              <div class="col-md-4">
                                <input id="design_type" type="text" class="form-control @error('design_type') is-invalid @enderror" name="design_type" placeholder="Design Type" required autocomplete="design_type">

                                @error('design_type')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div> 
                        </div>
                        <div class="form-group row">
                            <div class="col-md-4">
                                <input id="topography" type="text" class="form-control @error('topography') is-invalid @enderror" name="topography" placeholder="Topography" required autocomplete="topography">

                                @error('topography')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>            
                            <div class="col-md-4">
                                <select name="national_housing_contributor" id="national_housing_contributor" class="form-control @error('national_housing_contributor') is-invalid @enderror" required autocomplete="national_housing_contributor" autofocus value="{{old('national_housing_contributor')}}">
                                    <option>Are you National Housing fund contributor</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                                @error('national_housing_contributor')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                
                              <div class="col-md-4">
                                <input id="nhf_number" type="text" class="form-control @error('nhf_number') is-invalid @enderror" name="nhf_number" placeholder="NHF NO , If yes Above"  autocomplete="nhf_number">

                                @error('nhf_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div> 
                        </div>
                        <div class="form-group row">
                            <div class="col-md-4">
                                <input id="nhf_duration" type="text" class="form-control @error('nhf_duration') is-invalid @enderror" name="nhf_duration" placeholder="NHF Duration, If yes Above" autocomplete="nhf_duration">

                                @error('nhf_duration')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>            
                            <div class="col-md-4">
                                <select name="repayment_option" id="repayment_option" class="form-control @error('repayment_option') is-invalid @enderror" required autocomplete="repayment_option" autofocus value="{{old('repayment_option')}}">
                                    <option>Repayment Option</option>
                                    <option value="Mortgage">Mortgage</option>
                                    <option value="Personal Savings">Personal Savings</option>
                                    <option value="Salary">Salary</option>
                                </select>
                                @error('repayment_option')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                
                             <div class="col-md-4">
                                <select name="mortgage_bank" id="mortgage_bank" class="form-control @error('mortgage_bank') is-invalid @enderror" required autocomplete="mortgage_bank" autofocus value="{{old('mortgage_bank')}}">
                                    <option>Choose Mortgage Bank</option>
                                    <option value="FEDERAL MORTGAGE BANK OF NIGERIA">FEDERAL MORTGAGE BANK OF NIGERIA</option>
                                    <option value="PLATINUM SAVINGS & LOANS LTD">PLATINUM SAVINGS & LOANS LTD</option>
                                    <option value="UNION HOMES SAVINGS">UNION HOMES SAVINGS</option>
                                </select>
                                @error('mortgage_bank')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                      </div>
                    </div>
                    <input type="Number" name="application_status" hidden="hidden">
                    <br>
                     <div class="form-group row mb-0">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-success btn-block">
                                    {{ __('Apply') }}
                                </button>
                            </div>
                        </div>
              </div>
            </div>
        </form>
    </div>
</div>
        </div>
    </div>
</div>

<!-- <div class="container">
    <div class="row justify-content-center"> -->
        <!-- <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">{{ __('Loan Application') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('loans.store') }}">
                        @csrf
              
                        <div class="form-group row">
                            <div class="col-md-4">
                                <input id="surname" type="text" class="form-control @error('surname') is-invalid @enderror" name="surname" value="{{ old('surname') }}" placeholder="Surname"autocomplete="surname" autofocus>
                                @error('surname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-4">
                                <input id="firstname" type="text" class="form-control @error('firstname') is-invalid @enderror" name="firstname" value="{{ old('firstname') }}" placeholder="Firstname" required autocomplete="firstname" autofocus>
                                @error('firstname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-4">
                                <input id="middlename" type="text" class="form-control @error('middlename') is-invalid @enderror" name="middlename" value="{{ old('middlename') }}" placeholder="Middlename" required autocomplete="middlename" autofocus>
                                @error('middlename')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            
                            <div class="col-md-4">
                            	<select name="sex" id="sex" class="form-control @error('sex') is-invalid @enderror" required autocomplete="sex" autofocus value="{{old('sex')}}">
                            		<option> select</option>
                            		<option value="Male">Male</option>
                            		<option value="Female">Female</option>
                            	</select>
                                @error('sex')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-4">
                                <input id="dob" type="date" class="form-control @error('dob') is-invalid @enderror" name="dob" placeholder="Date of Birth" required autocomplete="dob">

                                @error('dob')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                             <div class="col-md-4">
                            	<select name="marital_status" id="marital_status" class="form-control @error('marital_status') is-invalid @enderror" required autocomplete="marital_status" autofocus value="{{old('marital_status')}}">
                            		<option> Marital Status</option>
                            		<option value="Single">Single</option>
                            		<option value="Maried">Maried</option>
                            	</select>
                                @error('marital_status')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-4">
                                <input id="occupation" type="text" class="form-control @error('occupation') is-invalid @enderror" name="occupation" placeholder="Occupation" required autocomplete="occupation">

                                @error('occupation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>            
                            <div class="col-md-4">
                            	<select name="employment_status" id="employment_status" class="form-control @error('employment_status') is-invalid @enderror" required autocomplete="employment_status" autofocus value="{{old('employment_status')}}">
                            		<option> Employment Status</option>
                            		<option value="Employed">Employed</option>
                            		<option value="Self Employed">Self Employed</option>
                            	</select>
                                @error('employment_status')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                
                              <div class="col-md-4">
                                <input id="income_source" type="text" class="form-control @error('income_source') is-invalid @enderror" name="income_source" placeholder="Source of Income" required autocomplete="income_source">

                                @error('income_source')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div> 
                        </div>
                        <div class="form-group row">
                            <div class="col-md-4">
                                <input id="company_name" type="text" class="form-control @error('company_name') is-invalid @enderror" name="company_name" placeholder="Company Name" required autocomplete="company_name">

                                @error('company_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>            
                            <div class="col-md-4">
                            	<select name="sector" id="sector" class="form-control @error('sector') is-invalid @enderror" required autocomplete="sector" autofocus value="{{old('sector')}}">
                            		<option>Company Sector</option>
                            		<option value="Private">Private Sector</option>
                            		<option value="Public">Public Sector</option>
                            	</select>
                                @error('sector')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                
                              <div class="col-md-4">
                                <input id="company_address" type="text" class="form-control @error('company_address') is-invalid @enderror" name="company_address" placeholder="Company Adress" required autocomplete="company_address">

                                @error('company_address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div> 
                        </div>
                        <div class="form-group row">
                            <div class="col-md-4">
                                <input id="home_town" type="text" class="form-control @error('home_town') is-invalid @enderror" name="home_town" placeholder="Home Town" required autocomplete="home_town">

                                @error('home_town')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>            
                           <div class="col-md-4">
                                <input id="local_govt" type="text" class="form-control @error('local_govt') is-invalid @enderror" name="local_govt" placeholder="Local Government" required autocomplete="local_govt">

                                @error('local_govt')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div> 
                
                              <div class="col-md-4">
                                <input id="state" type="text" class="form-control @error('state') is-invalid @enderror" name="state" placeholder="State" required autocomplete="state">

                                @error('state')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div> 
                        </div>
                        <div class="form-group row">
                            <div class="col-md-4">
                                <input id="nationality" type="text" class="form-control @error('nationality') is-invalid @enderror" name="nationality" placeholder="Nationality" required autocomplete="nationality">

                                @error('nationality')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>            
                           <div class="col-md-4">
                                <input id="residential_address" type="text" class="form-control @error('residential_address') is-invalid @enderror" name="residential_address" placeholder="Residential Address" required autocomplete="residential_address">

                                @error('residential_address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div> 
                
                              <div class="col-md-4">
                                <input id="residential_state" type="text" class="form-control @error('residential_state') is-invalid @enderror" name="residential_state" placeholder="State of Residence" required autocomplete="state">

                                @error('residential_state')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div> 
                        </div>
                        <div class="form-group row">
                            <div class="col-md-4">
                                <input id="residential_country" type="text" class="form-control @error('residential_country') is-invalid @enderror" name="residential_country" placeholder="Country of Residence" required autocomplete="residential_country">

                                @error('residential_country')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>            
                           <div class="col-md-4">
                                <input id="zip_code" type="text" class="form-control @error('zip_code') is-invalid @enderror" name="zip_code" placeholder="Zip Code" required autocomplete="zip_code">

                                @error('zip_code')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div> 
                
                              <div class="col-md-4">
                                <input id="identification_means" type="text" class="form-control @error('identification_means') is-invalid @enderror" name="identification_means" placeholder="Means of Identification" required autocomplete="state">

                                @error('identification_means')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div> 
                        </div>
                   
                    
                        <div class="form-group row">
                            <div class="col-md-4">
                                <input id="identification_number" type="text" class="form-control @error('identification_number') is-invalid @enderror" name="identification_number" placeholder="Identification Number" required autocomplete="identification_number">

                                @error('identification_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>            
                           <div class="col-md-4">
                                <input id="project_location" type="text" class="form-control @error('project_location') is-invalid @enderror" name="project_location" placeholder="Project Location" required autocomplete="zip_code">

                                @error('project_location')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div> 
                
                              <div class="col-md-4">
                                <input id="project_lga" type="text" class="form-control @error('project_lga') is-invalid @enderror" name="project_lga" placeholder="Local Govt of Project" required autocomplete="state">

                                @error('project_lga')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div> 
                        </div>
                        <div class="form-group row">
                            <div class="col-md-4">
                                <input id="project_state" type="text" class="form-control @error('project_state') is-invalid @enderror" name="project_state" placeholder="State of Project" required autocomplete="project_state">

                                @error('project_state')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>            
                           <div class="col-md-4">
                                <input id="titledoc_type" type="text" class="form-control @error('titledoc_type') is-invalid @enderror" name="titledoc_type" placeholder="Title Document Type" required autocomplete="titledoc_type">

                                @error('titledoc_type')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div> 
                
                              <div class="col-md-4">
                                <input id="ref_no" type="text" class="form-control @error('ref_no') is-invalid @enderror" name="ref_no" placeholder="Reference Number" required autocomplete="ref_no">

                                @error('ref_no')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div> 
                        </div>
                        <div class="form-group row">
                            <div class="col-md-4">
                                <input id="land_size" type="text" class="form-control @error('land_size') is-invalid @enderror" name="land_size" placeholder="Land Size" required autocomplete="land_size">

                                @error('land_size')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>            
                           <div class="col-md-4">
                                <input id="beacon_number" type="text" class="form-control @error('beacon_number') is-invalid @enderror" name="beacon_number" placeholder="Beacon Number" required autocomplete="beacon_number">

                                @error('beacon_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div> 
                
                              <div class="col-md-4">
                                <input id="design_type" type="text" class="form-control @error('design_type') is-invalid @enderror" name="design_type" placeholder="Design Type" required autocomplete="design_type">

                                @error('design_type')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div> 
                        </div>
                        <div class="form-group row">
                            <div class="col-md-4">
                                <input id="topography" type="text" class="form-control @error('topography') is-invalid @enderror" name="topography" placeholder="Topography" required autocomplete="topography">

                                @error('topography')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>            
                            <div class="col-md-4">
                            	<select name="national_housing_contributor" id="national_housing_contributor" class="form-control @error('national_housing_contributor') is-invalid @enderror" required autocomplete="national_housing_contributor" autofocus value="{{old('national_housing_contributor')}}">
                            		<option>Are you National Housing fund contributor</option>
                            		<option value="Yes">Yes</option>
                            		<option value="No">No</option>
                            	</select>
                                @error('national_housing_contributor')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                
                              <div class="col-md-4">
                                <input id="nhf_number" type="text" class="form-control @error('nhf_number') is-invalid @enderror" name="nhf_number" placeholder="NHF NO , If yes Above"  autocomplete="nhf_number">

                                @error('nhf_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div> 
                        </div>
                        <div class="form-group row">
                            <div class="col-md-4">
                                <input id="nhf_duration" type="text" class="form-control @error('nhf_duration') is-invalid @enderror" name="nhf_duration" placeholder="NHF Duration, If yes Above" autocomplete="nhf_duration">

                                @error('nhf_duration')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>            
                            <div class="col-md-4">
                            	<select name="repayment_option" id="repayment_option" class="form-control @error('repayment_option') is-invalid @enderror" required autocomplete="repayment_option" autofocus value="{{old('repayment_option')}}">
                            		<option>Repayment Option</option>
                            		<option value="Mortgage">Mortgage</option>
                            		<option value="Personal Savings">Personal Savings</option>
                            		<option value="Salary">Salary</option>
                            	</select>
                                @error('repayment_option')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                
                             <div class="col-md-4">
                            	<select name="mortgage_bank" id="mortgage_bank" class="form-control @error('mortgage_bank') is-invalid @enderror" required autocomplete="mortgage_bank" autofocus value="{{old('mortgage_bank')}}">
                            		<option>Choose Mortgage Bank</option>
                            		<option value="FEDERAL MORTGAGE BANK OF NIGERIA">FEDERAL MORTGAGE BANK OF NIGERIA</option>
                            		<option value="PLATINUM SAVINGS & LOANS LTD">PLATINUM SAVINGS & LOANS LTD</option>
                            		<option value="UNION HOMES SAVINGS">UNION HOMES SAVINGS</option>
                            	</select>
                                @error('mortgage_bank')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    
                     <input type="Number" name="application_status" hidden="hidden">
                        <div class="form-group row mb-0">
                            <div class="col-md-8 col-md-offset-2">
                                <button type="submit" class="btn btn-success btn-block">
                                    {{ __('Apply') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div><br> -->
@endsection
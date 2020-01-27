<?php

namespace App\Http\Controllers;

use App\Loan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class LoanController extends Controller
{
     use AuthenticatesUsers;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
        $this->middleware(['auth']);
    }

    public function index()
    {
        $user_id = auth()->user()->id;
        $app = Loan::where('user_id',$user_id)->paginate(5);

        return view('loans.index')->with(['loan_app'=>$app]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('loans.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // dd($request->all());
        //
        // $request->validate([
        //     'user_id' => 'required',
        //     'application_status' => 'required',
        //     'surname' => 'string'|'max:70',
        //     'firstname'=>'required'|'max:70',
        //     'middlename'=>'nullable'|'max:70',
        //     'sex'=>'required'|'max:6',
        //     'dob'=>'date'|'required',
        //     'marital_status'=>'string'|'required',
        //     'occupation'=>'string'|'required',
        //     'employment_status'=>'string'|'required',
        //     'income_source'=>'string'|'required',
        //     'company_name'=>'string'|'required',
        //     'sector'=>'string'|'required',
        //     'company_address'=>'string'|'required',
        //     'home_town'=>'string'|'required',
        //     'local_govt'=>'string'|'required',
        //     'state'=>'string'|'required',
        //     'nationality'=>'string'|'required',
        //     'residential_address'=>'string'|'required',
        //     'residential_state'=>'string'|'required',
        //     'residential_country'=>'string'|'required',
        //     'zip_code'=>'string'|'required',
        //     'identification_means'=>'string'|'required',
        //     'identification_number'=>'string'|'required',
        //     'project_location'=>'string'|'required',
        //     'project_lga'=>'string'|'required',
        //     'project_state'=>'string'|'required',
        //     'titledoc_type'=>'string'|'required',
        //     'ref_no'=>'string'|'required',
        //     'land_size'=>'string'|'required',
        //     'beacon_number'=>'string'|'required',
        //     'design_type'=>'string'|'required',
        //     'topography'=>'string'|'required',
        //     'national_housing_contributor'=>'string'|'required',
        //     'nhf_number'=>'nullable'|'string',
        //     'nhf_duration'=>'nullable'|'string',
        //     'repayment_option'=>'string'|'required',
        //     'mortgage_bank'=>'string'|'required',
        // ]);
        $input = $request->all();
        $input['application_status'] = '0';
        Loan::create($request->all());
        return redirect()->route('loans.index')->with('success','submitted, we have sent link to your email');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Loan  $loan
     * @return \Illuminate\Http\Response
     */
    public function show(Loan $loan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Loan  $loan
     * @return \Illuminate\Http\Response
     */
    public function edit(Loan $loan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Loan  $loan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Loan $loan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Loan  $loan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Loan $loan)
    {
        //
    }
}

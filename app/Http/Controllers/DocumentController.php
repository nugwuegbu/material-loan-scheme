<?php

namespace App\Http\Controllers;
use App\Loan;
use App\Document;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class DocumentController extends Controller
{
    use AuthenticatesUsers;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $user_id = auth()->user()->id;
        $data = Document::where('user_id',$user_id)->get();
        return view('documents.index')->with(['docs'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $user_id = auth()->user()->id;
        $appl = Loan::where('user_id',$user_id)->get();
        return view('documents.create')->with(['appl'=>$appl]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // str_replace('','_',$request->land_document);
        // dd($request->all());
        $request->validate([
            'land_document'=>'required|mimes:pdf,xlsx,doc,docx,xls,csv,png,jpeg,jpg,txt,odt,ods',
            'title'=>'required',
        ]);
        $filename = time().'.'.$request->land_document->extension();
        $request->land_document->move(public_path('uploads'),$filename);
        
        Document::create([
            'loan_id'=>$request->loan_id,
            'user_id'=>$request->user_id,
            'title'=> $request->title,
            'path'=>$filename,
        ]);
        return redirect()->route('documents.index')->with('success','File upload successful');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function show(Document $document)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function edit(Document $document)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Document $document)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function destroy(Document $document)
    {
        //
    }
}

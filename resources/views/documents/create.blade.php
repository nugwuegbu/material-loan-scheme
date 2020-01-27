@extends('layouts.app')
@section('content')

        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">{{ __('Documents Uploads') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('documents.store') }}" enctype="multipart/form-data">
                        @csrf
                        <input type="number" name="user_id" hidden="hidden" value="{{ Auth::User()->id }}">
                        <div class="form-group row">
                            <div class="col-md-12">
                            <select name="loan_id" class="form-control text-center">
                                   <option>--Application--</option>
                                   @foreach($appl as $data)
                                   <option value="{{ $data['id'] }}">{{ $data['design_type'] }}</option>
                                   @endforeach
                               </select>
                        </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-8">
                                <!-- {{ __('Document Type') }} -->
                               <select name="title" class="form-control text-center">
                                   <option>--Document Type--</option>
                                   <option value="Building Plan">Building Plan</option>
                                   <option value="Land Document">Land Document</option>
                               </select>
                            </div>
                            <div class="col-md-4">
                                <input type="file" name="land_document" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-8 text-center col-md-offset-4">
                                <button type="submit" class="btn btn-success">
                                    {{ __('Upload') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div><br>
@endsection
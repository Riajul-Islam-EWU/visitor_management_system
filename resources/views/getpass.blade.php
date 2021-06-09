@extends('layouts.app')

@section('title')
Get Pass    
@endsection

@section('nav')
    @include('layouts.nav')
@endsection

@section('content')
    <div class="m-0 p-0">
        <div class="container-fluid">
            <div class="row justify-content-center mt-5">
                <div class="col-6 p-0">
                    <div class="card text-center">
                        <div class="card-header">
                            Welcome to Softkit
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Please collect your one time pass</h5>
                            <p class="card-text">Note: The pass will be expired after the selected visiting time.</p>
                            <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                Get Pass
                            </button>
                            <x-Modal/>
                            {{-- @include('layouts.modal',['modal_title' => 'Fill up the form to get pass']) --}}
                        </div>
                        <div class="card-footer text-muted">
                            If any inconvenience happens, please contact the authority                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



@section('foot')
    @include('layouts.footer')
@endsection

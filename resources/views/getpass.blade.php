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
                            <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal"
                                data-bs-target="#modal_id">
                                Get Pass
                            </button>
                            <x-Modal />
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

@section('script')
    <script>
        var modal_id = $('#modal_id');
        var SubmitGetpass = $('.SubmitGetpass');
        var adminUrl = '{{ url('') }}';

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            }
        });

        function getInputs() {
            var id = $('input[name="id"]').val()
            var name = $('input[name="name"]').val()
            var email = $('input[name="email"]').val()
            var phone = $('input[name="phone"]').val()
            return {
                id: id,
                name: name,
                email: email,
                phone: phone
            }
        }

        function store() {
            if (!confirm('Are you sure?')) return;
            $.ajax({
                method: 'POST',
                url: adminUrl + '/getpass/store',
                data: getInputs(),
                dataType: 'JSON',
                success: function() {
                    console.log('inserted')
                    modal_id.modal('hide')
                }
            })
        }

    </script>
@endsection

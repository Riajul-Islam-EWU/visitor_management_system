@section('foot')
    <div class="mt-auto">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <div class="container mt-3  pb-3 border-bottom border-danger">
                <div class="row w-100">
                    <div class="col-5 d-inline-flex">
                        <a class="navbar-brand " href="{{ url('/') }}">
                            <img src="/images/Softkit_logo.png" width="60" height="60" alt="">
                        </a>
                        <span class="text-white pt-4">
                            <h5>{{ 'Softkit' }}</h5>
                        </span>
                    </div>
                    <div class="col-md-4 ps-3">
                        {{-- <a class="text-white" href="#">&nbsp;<span><i class="fas fa-info"></i></span>&nbsp;&nbsp;{{ 'About Us' }}</a><br>
                        <a class="text-white" href="#"><span><i class="fas fa-envelope-open-text"></i></span>
                            {{ 'Contact Us' }}</a><br>
                        <a class="text-white" href="#"><span><i class="fas fa-headset"></i></span>
                            {{ 'Support' }}</a><br> --}}
                    </div>
                    <div class="col-md-2 offset-md-1">
                        {{-- <a class="text-white" href="#">{{ 'About Us' }}</a><br>
                        <a class="text-white" href="#">{{ 'Contact Us' }}</a><br>
                        <a class="text-white" href="#">{{ 'Support' }}</a><br> --}}
                        <a class="text-white" href="#">&nbsp;<span><i class="fas fa-info"></i></span>&nbsp;&nbsp;{{ 'About Us' }}</a><br>
                        <a class="text-white" href="#"><span><i class="fas fa-envelope-open-text"></i></span>
                            {{ 'Contact Us' }}</a><br>
                        <a class="text-white" href="#"><span><i class="fas fa-headset"></i></span>
                            {{ 'Support' }}</a><br>
                    </div>
                </div>
            </div>
        </nav>
        <div class="container-fluid bg-dark text-center">
            <div class="row py-2">
                <div class="col">
                    <span class="text-white"><i class="far fa-copyright text-white"></i><a
                            href="{{ 'mailto:softkit.info@gmail.com' }}" class="text-white">Softkit</a> by <a
                            href="https://www.facebook.com/ritewu2014/"
                            class="text-white">{{ 'Riajul Islam' }}</a></span>
                </div>
            </div>
        </div>
    </div>

@endsection

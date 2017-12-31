@extends ('layouts.master')

@section ('content')
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-3">{{ App\Setting::getValueByKey('welcomeTitle') }}</h1>
            <p class="lead">{{ App\Setting::getValueByKey('welcomeDescription') }}</p>
        </div>
    </div>
@endsection
@extends ('layouts.master')

@section ('content')
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <h2>Internal area</h2>
            <form action="/login" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username" name="username" autofocus>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Login</button>
                </div>
            </form>
        </div>
    </div>
@endsection ('content')
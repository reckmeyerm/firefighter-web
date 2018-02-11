@extends ('layouts.master')

@section ('content')
    <div class="row dashboard">
        <div class="col-md-3">
            <a href="/categories">
                <div class="card">
                    <div class="card-block">
                        <h3 class="card-title">Categories</h3>
                        <i class="card-text fa fa-folder-open-o"></i>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-3">
            <a href="/articles">
                <div class="card">
                    <div class="card-block">
                        <h3 class="card-title">Articles</h3>
                        <i class="card-text fa fa-files-o"></i>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-3">
            <a href="#">
                <div class="card">
                    <div class="card-block">
                        <h3 class="card-title">News</h3>
                        <i class="card-text fa fa-newspaper-o"></i>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-3">
            <a href="#">
                <div class="card">
                    <div class="card-block">
                        <h3 class="card-title">Calendar</h3>
                        <i class="card-text fa fa-calendar"></i>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <div class="row dashboard">
        <div class="col-md-3">
            <a href="#">
                <div class="card">
                    <div class="card-block">
                        <h3 class="card-title">Vehicles</h3>
                        <i class="card-text fa fa-truck"></i>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-3">
            <a href="#">
                <div class="card">
                    <div class="card-block">
                        <h3 class="card-title">Operation</h3>
                        <i class="fa fa-fire-extinguisher"></i>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-3">
            <a href="#">
                <div class="card">
                    <div class="card-block">
                        <h3 class="card-title">Users</h3>
                        <i class="card-text fa fa-users"></i>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-3">
            <a href="/settings">
                <div class="card">
                    <div class="card-block">
                        <h3 class="card-title">Settings</h3>
                        <i class="fa fa-cogs"></i>
                    </div>
                </div>
            </a>
        </div>
    </div>
@endsection
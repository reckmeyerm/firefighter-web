@extends ('layouts.master')

@section ('content')
    <div class="row">
        <div class="col-md-9">
            <h1>Settings</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-9">
                @if (count($settings))
                    <table class="table table-striped settings">
                    @foreach ($settings as $setting)
                        <tr>
                            <td class="settingKey">{{ $setting->key }}</td>
                            <td>{{ $setting->value }}</td>
                            <td class="text-right"><a href="/settings/{{ $setting->id }}" class="nohover"><i class="fa fa-pencil-square-o"></i></a></td>
                        </tr>
                    @endforeach
                    </table>
                    <div class="pagination">{{ $settings->links() }}</div>
                @else
                    <h2 class="text-center">No settings available!</h2>
                @endif
            </table>
        </div>
        <div class="col-md-3">
            <a role="button" class="btn btn-secondary btn-block" href="/dashboard">Back to Dashboard</a>
        </div>
    </div>
@endsection
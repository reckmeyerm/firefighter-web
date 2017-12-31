@extends ('layouts.master')

@section ('content')
    <div class="row">
        <div class="col-md-12">
            <h1>Settings</h1>
                @if (count($settings))
                    <table class="table table-striped settings">
                    @foreach ($settings as $setting)
                        <tr>
                            <td class="settingKey">{{ $setting->key }}</td>
                            <td>{{ $setting->value }}</td>
                            <td class="text-right"><i class="fa fa-pencil-square-o"></i></td>
                        </tr>
                    @endforeach
                    </table>
                    <span class="text-center">{{ $settings->links('system.pagination') }}</span>
                @else
                    <h2 class="text-center">No settings available!</h2>
                @endif
            </table>
        </div>
    </div>
@endsection
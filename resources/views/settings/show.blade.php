@extends ('layouts.master')

@section ('content')
    <div class="row">
        <div class="col-md-9">
            <h1>Setting: {{ $setting->key }}</h1> 
        </div>
    </div>
    <div class="row">
        <div class="col-md-9">
            <form action="/settings/{{ $setting->id }}" method="POST">
                <input type="hidden" name="_method" value="put">
                {{ csrf_field() }}
                @if ($setting->type == 'text')
                    <div class="form-group">
                        <label for="value">Value</label>
                        <input type="text" class="form-control" id="value" name="value" value="{{ $setting->value }}">
                    </div>
                @elseif ($setting->type == 'textarea')
                    <div class="form-group">
                        <label for="value">Value</label>
                        <textarea class="form-control noresize" id="value" name="value" rows="10">{{ $setting->value }}</textarea>
                    </div>
                @endif 
                
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Save</button>
                </div>
            </form>
        </div>
        <div class="col-md-3">
            <a role="button" class="btn btn-secondary btn-block" href="{{ url()->previous() }}">Back</a>
        </div>
    </div>
@endsection
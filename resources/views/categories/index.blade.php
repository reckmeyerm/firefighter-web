@extends ('layouts.master')

@section ('content')
    <div class="row">
        <div class="col-md-9">
            <h1>Categories</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-9">
                @if (count($categories))
                    <table class="table table-striped settings">
                    <thead>
                        <th>Name</th>

                        <th>Parent Category</th>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                            <tr>
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->category ? $category->category->name : '' }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                    </table>
                    <div class="pagination">{{ $categories->links() }}</div>
                @else
                    <h2 class="text-center">No categories available!</h2>
                @endif
            </table>
        </div>
        <div class="col-md-3">
            <a role="button" class="btn btn-secondary btn-block" href="/dashboard">Back to Dashboard</a>
        </div>
    </div>
@endsection
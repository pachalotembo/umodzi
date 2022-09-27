
@section('content')
<div class="container">

    <div class="row">
        <div class="col-md-4 offset-md-4" style="margin-left: 90%;">
            {{-- <button type="submit" class="btn btn-success">
                {{ __('Submit Innovation') }}
            </button> --}}
            <a href="{{ url('innosubmit') }}">Submit Innovation</a>
        </div>
    </div>

    <div class="row justify-content-center">

        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You have successfuly logged in as an Individual!') }}
                </div>
                
            </div>
        </div>
    </div>
</div>

@endsection

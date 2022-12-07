@extends("layouts.dashboard")

@section("content")
    <div class="container">

    <h1>Update Manager Form</h1>

        <form method="post" action="{{route("admin.branchUpdate",$branch->id)}}" enctype="multipart/form-data">
            @csrf

            <div class="row mb-3">
                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                <div class="col-md-6">
                    <input id="name" type="text" value="{{$branch->name}}" class="form-control @error('name') is-invalid @enderror" name="name"  required autocomplete="name" autofocus>

                    @error('name')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>



            <div class="row mb-3">
                <label for="address" class="col-md-4 col-form-label text-md-end">{{ __('Address') }}</label>

                <div class="col-md-6">
                    <input id="address" type="text" value="{{$branch->address}}" class="form-control @error('address') is-invalid @enderror" name="address" required >

                    @error('address')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>


            <div class="row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Update Captain') }}
                    </button>
                </div>
            </div>

        </form>
        @if(session()->has("message"))
            <h3 class="text-success">{{session("message")}}</h3>
        @endif

        @if(session()->has("error"))
            <h3 class="text-danger">{{session("error")}}</h3>
        @endif

    </div>


@endsection

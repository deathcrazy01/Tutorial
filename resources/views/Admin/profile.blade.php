@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                
                    <h3><strong>{{ __('Admin Profile') }}</h2></strong>
                    <a href="{{ route('admin.editprofile') }}" class="btn btn-primary">Edit Profile</a>

                </div>

                <div class="card-body">
                    Name  :
                    <br>
                    <br>
                    <input type="text" class='form-control' value='{{Auth::guard('admin')->user()->name}}' disabled >
                    <br>
                    Email :
                    <br><br>
                    <input type="text" class='form-control' value='{{Auth::guard('admin')->user()->email}}' disabled >

                    

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

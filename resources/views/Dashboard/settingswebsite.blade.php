@extends('Dashboard.layout.layout')
@section('containt')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 form-style">
            <h4 class="text-center">Main settings</h4>
         <form  action="/add" method="POST" enctype="multipart/form-data">
        @csrf
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
         @endif
        <div class="form-group col-md-6" style="text-align: center;">
            <label></label>

            <img src="{{asset($setting->Logo)}}" alt="" style="height: 100px">

        </div>
        <div class="form-group">

        </div>

            <div class="form-group">
                <label for="account-fn">Logo </label>

                <input class="form-control" type="file" name="logo"   >
            </div>




            <div class="form-group">
                <label >Email</label>
                @if ($setting->email !='')
                <input class="form-control" type="email" name="email" value="{{$setting->email}}" >
                @endif
            </div>


            <div class="form-group">

                <label >Phone Number</label>
                @if ($setting->phone !='')
                <input class="form-control" type="text" name="phone" value="{{$setting->phone}}" >
                @endif

            </div>



            <div class="form-group">
                <label ">Address</label>
                @if ($setting->Address !='')
                <input class="form-control" type="text" name="address" value="{{$setting->Address}}" >
                @endif
            </div>


            <div class="form-group">
                <label >instagram url</label>
                @if ($setting->insta !='')
                <input class="form-control" type="url" name="instagram" value="{{$setting->insta}}" >
                @endif
            </div>



            <div class="form-group">
                <label >twitter url</label>
                @if ($setting->twitt !='')
                <input class="form-control" type="url"  name="twitter" value="{{$setting->twitt}}" >
                @endif

            </div>


            <div class="form-group">
                <label for="account-email">Linkedin url</label>
                @if ($setting->linked !='')
                <input class="form-control" type="url" name="linkedin" value="{{$setting->linked}}" >
                @endif
            </div>



            <hr class="mt-2 mb-3">
            <div class="form-group ">
                <button type="submit" class="btn btn-primary" style="margin-top: 10px;">Submit</button>


             </div>

    </form>
</div>
</div>
</div>
@endsection

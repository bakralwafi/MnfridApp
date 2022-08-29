@extends('Dashboard.layout.layout')
@section('containt')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 form-style">




                    <h4 class="text-center">Add SubPortoflio </h4>
    <form  action="/create_subpor" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group " ">
            <label></label>
            <img src="" alt="" style="height: 100px">
        </div>



            <div class="form-group">
                <label >Type of portflios</label>
                <select name="category_filter" id="category_filter" class="form-select mb-2">

                    @foreach ($item as $p)
                        <option value="{{ $p->id }}">{{ $p->type_services }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label >Type of Subportflios</label>
                <input class="form-control" type="text" name="type_services" value="" >
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

@extends('Dashboard.layout.layout')
@section('containt')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 form-style">




                    <h4 class="text-center">Add items </h4>
    <form  action="/create_items" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group " ">
            <label></label>
            <img src="" alt="" style="height: 100px">
        </div>




            <div class="form-group">
                <label >Type of Subportflios</label>

                <select name="type_services" id="category_filter" class="form-select mb-2">

                    @foreach ($tit as $t)
                        <option value="{{ $t->id }}">{{ $t->type_services }}</option>
                    @endforeach
                </select>
            </div>
        <div class="form-group " >
            <label for="">Image</label>
            <div class="custom-file">

                 <input type="file" class="custom-file-input" name="image" id="customFile">
                    <label class="custom-file-label" for="customFile">Choose image</label>
            </div>
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

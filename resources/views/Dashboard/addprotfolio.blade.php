@extends('Dashboard.layout.layout')
@section('containt')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 form-style">




                    <h4 class="text-center">Add protfolio </h4>
    <form  action="/create_protfolio" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group " ">
            <label></label>
            <img src="" alt="" style="height: 100px">
        </div>

        <div class="form-group " >
            <label for="">Image</label>
            <div class="custom-file">

                 <input type="file" class="custom-file-input" name="image" id="customFile">
                    <label class="custom-file-label" for="customFile">Choose image</label>
            </div>
        </div>



            <div class="form-group">
                <label >Catagory</label>
                <input class="form-control" type="text" name="type_services" value="" >
            </div>


            <div class="form-group">
                <label >titel</label>
                <input class="form-control" type="text" name="titel" value="" >
            </div>



            <div class="form-group">
                <label ">descraption</label>
                <input class="form-control" type="text" name="descraption" value="" >
            </div>
            <div class="form-group">
                <label >Catagory in (Arabic)</label>
                <input class="form-control" type="text" name="type_servicesar" value="" >
            </div>


            <div class="form-group">
                <label >titel  in (Arabic)</label>
                <input class="form-control" type="text" name="titelar" value="" >
            </div>



            <div class="form-group">
                <label ">descraption  in (Arabic)</label>
                <input class="form-control" type="text" name="descraptionar" value="" >
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

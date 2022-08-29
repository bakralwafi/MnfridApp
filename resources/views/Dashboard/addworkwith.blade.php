@extends('Dashboard.layout.layout')
@section('containt')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 form-style">




                    <h4 class="text-center">Add Brand </h4>



                    <form class=""  action="/create_workwith" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group " >
                            <label for="title_en">brand Name </label>
                            <input type="text" class="form-control" name="name" placeholder="brand Name ">
                        </div>


                        <div class="form-group " >
                            <label for="">brand logo </label>
                            <div class="custom-file">

                                 <input type="file" class="custom-file-input" name="icon" id="customFile">
                                    <label class="custom-file-label" for="customFile">Choose icon</label>
                            </div>
                        </div>
                        <div class="form-group ">
                           <button type="submit" class="btn btn-primary" style="margin-top: 10px;">Submit</button>


                        </div>


                    </form>


        </div>
    </div>
</div>

  @endsection

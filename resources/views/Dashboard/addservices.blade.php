@extends('Dashboard.layout.layout')
@section('containt')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 form-style">





                    <h4 class="text-center">Add Services</h4>



                    <form  action="/create_service" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group " >
                            <label for="title_en">service Name(English)</label>
                            <input type="text" class="form-control" name="name" placeholder="Service Name in EN">
                          </div>



                          <div class="form-group">
                            <label for="Description">Description (English)</label>
                            <textarea class="form-control" name="desc" rows="3"></textarea>
                          </div>
                          <div class="form-group " >
                            <label for="title_en">service Name(Arabic)</label>
                            <input type="text" class="form-control" name="namear" placeholder="Service Name in AR">
                          </div>



                          <div class="form-group">
                            <label for="Description">Description (Arabic)</label>
                            <textarea class="form-control" name="descar" rows="3"></textarea>
                          </div>
                          <div class="custom-file ">
                          <input type="file" class="custom-file-input" name="icon" id="customFile">
                          <label class="custom-file-label" for="customFile">Choose icon</label>
                        </div>
                        <div class="form-group ">
                           <button type="submit" class="btn btn-primary" style="margin-top: 10px;">Submit</button>


                          </div>


                    </form>



        </div>
    </div>
</div>

  @endsection

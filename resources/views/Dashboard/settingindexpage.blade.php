@extends('Dashboard.layout.layout')
@section('containt')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 form-style">
            <h4 class="text-center">Index Page settings</h4>
         <form  action="/updateindexpage" method="POST" enctype="multipart/form-data">
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

            <div class="form-group">
                <label ">title of about section</label>
                <input class="form-control" type="text" name="titel"value="{{$indexpage->titel}}"  >
            </div>


            <div class="form-group">
                <label ">About section</label>
                <textarea class="form-control" type="text" row="5" name="aboutsection"> {{$indexpage->aboutsection}}</textarea>
            </div>



            <div class="form-group">
                <label ">Message for about section</label>
                <input class="form-control" type="text" name="message" value="{{$indexpage->message}}" >

            </div>
            <div class="form-group">
                <label ">Titel of portfolio section</label>
                <input class="form-control" type="text" name="T_portfolio" value="{{$indexpage->T_portfolio}}" >
            </div>
            <div class="form-group">
                <label ">Titel of worked with section</label>
                <input class="form-control" type="text" name="T_worked"  value="{{$indexpage->T_worked}}">
            </div>
            <div class="form-group">
                <label ">Titel of services section</label>
                <input class="form-control" type="text" name="T_service"  value="{{$indexpage->T_service}}">
            </div>

            <div class="form-group">
                <label ">title of about section in(Arabic)</label>
                <input class="form-control" type="text" name="titelar"value="{{$indexpage->titelar}}"  >
            </div>


            <div class="form-group">
                <label ">About section in(Arabic)</label>
                <textarea class="form-control" type="text" row="5" name="aboutsectionar"> {{$indexpage->aboutsectionar}}</textarea>
            </div>



            <div class="form-group">
                <label ">Message for about section in(Arabic)</label>
                <input class="form-control" type="text" name="messagear" value="{{$indexpage->messagear}}" >

            </div>
            <div class="form-group">
                <label ">Titel of portfolio section in(Arabic)</label>
                <input class="form-control" type="text" name="T_portfolioar" value="{{$indexpage->T_portfolioar}}" >
            </div>
            <div class="form-group">
                <label ">Titel of worked with section in(Arabic)</label>
                <input class="form-control" type="text" name="T_workedar"  value="{{$indexpage->T_workedar}}">
            </div>
            <div class="form-group">
                <label ">Titel of services section in(Arabic)</label>
                <input class="form-control" type="text" name="T_servicear"  value="{{$indexpage->T_servicear}}">
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

@extends('layouts.main');
@section("title", $title)

@section("content")
<div class="container">
    <h1>{{$title}}</h1>

    <div class="row align-items-stretch">
    @foreach($phones as $phone)
        
        <div class="col-md-6 col-lg-3 py-3" >
        
        <div class="card h-100">
        <img src="{{asset("storage/$phone[id].jpg")}}" class="card-img-top" alt="{{$phone["manufacturer"]}}">
        </div>

        <div class="card-body">
            <h5 class="card-title">{{$phone['manufacturer']}} {{$phone['model']}}</h5>
            <p class="card-text">{{$phone['description']}}</p>
        </div>

        <div class="card-footer">
            <div class="row">
                <div class="col-md-8 d-grid">
                    <a href="{{route("phones.show", ["id"] => $phone["id"]])}}" class="btn bt
                </div>
                
                <div class="col-md-4">
                     <span>{{number_format($phone["price"], 0, ",", " ")}} Ft</span>
                </div>
            </div>
        </div>

        </div>
    @endforeach
    </div>
</div>
@endsection
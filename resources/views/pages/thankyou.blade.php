@extends('layouts.app')

@section('content')
<div class="col-md-12" style="padding-top:50px;">
    <div class="panel panel-default panel-profile m-b-md">
        <div class="panel-body text-center" style="padding: 10px 0 5px 0;">
            <h5 class="panel-title">
                <span class="text-inherit">
                    <strong>Thank you for your honesty :)</strong>
                </span>
            </h5>
            <br>
                    <a class='myLink' href="{{route('register')}}"><span style="font-weight: bold;"><span class="icon icon-check"></span> Register in Sarahah now!</span></a>
                    <br />
                <div id="adunit1" style="width:300px;margin:auto;padding: 5px 5px 5px 5px"></div>
            </div>
    </div>
</div>
@endsection
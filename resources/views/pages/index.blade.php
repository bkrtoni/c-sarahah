@extends('layouts.app')

@section('content')
    <div class="row">
    <div class="col-md-12">
        Get honest feedback from your coworkers and friends<br /><br />
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <h4>At work</h4>
        <ul>
            <li>Enhance your areas of strength</li>
            <li>Strengthen Areas for Improvement</li>
        </ul>
    </div>

    <div class="col-md-6">
        <h4>With Your Friends</h4>
        <ul>
            <li>Improve your friendship by discovering your strengths and areas for improvement</li>
            <li>Let your friends be honest with you</li>
        </ul>
    </div>
</div>

<br />
<div class="row">
    <div class="col-md-12">
        &nbsp;
        	@if(Auth::check())
            <a class='myLink' href="../messages"><span style="font-weight: bold"><span class="icon icon-chat"></span> Messages</span></a>
            @else
			<a class='myLink' style="font-weight:bold" href="../register">Register</a> | <a class='myLink' style="font-weight: bold" href="../login">Login</a>    </div>
            @endif
    </div>
</div>

@endsection

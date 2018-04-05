@extends('layouts.app')

@section('content')
<div class="col-md-12" style="padding-top:50px;">

    <div class="panel panel-default panel-profile m-b-md">
        <div class="panel-body text-center">

            <img class="img-circle" style="cursor: pointer;width:120px;margin-top: -70px;margin-bottom: 5px;" src="../storage/photo/{{$user->photo}}" />
            <br><br>
            <h4 class="panel-title">
                <span class="text-inherit"><strong>{{$user->name}}</strong></span>
                <br />
                
            </h4>
            <br>

            <div id="Container" class="text-center">


                    <form class="form-horizontal" action='{{url("make/$user->id")}}' method='post'>
                       	{{csrf_field()}}
                        <div class="row">
                            <div class="col-md-12">
                                <div class="textarea-container">
                                    <textarea name='msg' placeholder="Leave a constructive message :)" rows="5" maxlength="700" class="form-control remove-border" style="background:none;border:none;box-shadow:none;"></textarea>
                                </div>
                            </div>
                            
                            <div class="col-md-12">
                                <button id="Send" class="btn btn-primary-outline mybtn" type="submit" style="margin-top:5px"><span class="glyphicon glyphicon-pencil"></span> Send</button>
                            </div>
                            <div id="adunit3" style="margin:auto; margin-top: 10px; text-align:center">
                            </div>
                        </div>
                    </form>            </div>
        </div>
    </div>
</div>
@endsection
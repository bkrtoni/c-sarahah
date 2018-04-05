@extends('layouts.app')

@section('content')
    @include('inc.setting')

    <div class="col-sm-9">
        <div class="panel panel-default panel-settings">
            <form method="post" class="form-horizontal" action="{{url('setting/info')}}">
                <h4>&nbsp;&nbsp;&nbsp;<strong>Edit personal information</strong></h4>
                <hr />
                {{csrf_field()}}
                <div class="form-group">
                    <label class="col-md-2 control-label" for="name">Name</label>
                    <div class="col-md-8">
                        <input class="form-control" type="text" name="name" value="{{$user->name}}" />
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label" for='username'>Usersname</label>
                    <div class="col-md-8">
                        <input class="form-control" type="text" name="username" value="{{$user->username}}" />
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-offset-2 col-md-8">
                        <button type="submit" class="btn mybtn">Save</button>
                    </div>
                </div>
            </form>
        </div>
        <br />
    </div>

@endsection
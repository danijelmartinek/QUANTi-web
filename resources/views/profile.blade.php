@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-body">
                <img src="<?php echo e(Voyager::image( Auth::user()->avatar )); ?>" style="width:150px; height:150px; float: left; border-radius: 50%; margin-right: 25px;">
                    <h3>{{ $user->name }}'s Profile</h3>
                    <form enctype="multipart/form-data" action="/profile" method="POST">
                        <label>Update Profile Image</label>
                        <input type="file" name="avatar">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="submit" class="pull-right btn btn-default btn-sm btn-p" value="Submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

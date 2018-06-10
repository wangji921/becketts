@extends('layouts.app')

@section('title', $user->name . '\'s profile')

@section('content')

<div class="row">

    <div class="col-lg-3 col-md-3 hidden-sm hidden-xs user-info">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="media">
                    <div align="center">
                        @if($user->avatar)
                            <img class="thumbnail img-responsive" src="{{ config('app.url') . $user->avatar }}" width="300px" height="300px">
                        @else
                            <img class="thumbnail img-responsive" src="https://cdn4.iconfinder.com/data/icons/iconado-1/100/user-512.png" alt="" width="100px" height="100px">
                        @endif

                    </div>
                    <div class="media-body">
                        <hr>
                        <h4><strong>Personal Details</strong></h4>
                        <p>Last Updated on</p>
                        <p>{{ $user->updated_at }}
                        <br>({{ $user->updated_at->diffForHumans() }})</p>
                        <li>First Name: {{ $user->firstname }}</li>
                        <li>Family Name: {{ $user->familyname }}</li>
                        <li>Preferred Name: {{ $user->familyname }}</li>
                        <li>Father's Name: {{ $user->fatherfull }}</li>
                        <li>Mother's Name: {{ $user->motherfull }}</li>
                        <hr>
                        <li>Gender: {{ $user->gender }}</li>
                        <li>Date of Birth: {{ $user->birthday }}</li>
                        <li>Wedding Date: {{ $user->weddingday }}</li>
                        <hr>
                        <li>Street: {{ $user->street }}</li>
                        <li>Suburb: {{ $user->suburb }}</li>
                        <li>City: {{ $user->birthcity }}</li>
                        <li>State: {{ $user->state }}</li>
                        <li>Post Code: {{ $user->zip }}</li>
                        <li>Country: {{ $user->birthcountry }}</li>
                        <h4><strong>Description</strong></h4>
                        <p>{{ $user->introduction }}</p>
                        <hr>
                        <h4><strong>Registered on</strong></h4>
                        <p>{{ $user->created_at }} ({{ $user->created_at->diffForHumans() }})</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <span>
                    <h1 class="panel-title pull-left" style="font-size:30px;">{{ $user->name }} <small>{{ $user->email }}</small></h1>
                </span>
            </div>
        </div>
        <hr>

        {{-- 用户发布的内容 --}}
        <div class="panel panel-default">
            <div class="panel-body">
                no data ~_~
            </div>
        </div>

    </div>
</div>
@stop
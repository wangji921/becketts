@extends('layouts.app')
@section('title', 'Edit your profile')
@section('content')

<div class="container">
    <div class="panel panel-default col-md-10 col-md-offset-1">
        <div class="panel-heading">
            <h2>
                <i class="glyphicon glyphicon-edit"></i> Edit your profile
            </h2>
        </div>

        @include('common.error')

        <div class="panel-body">
            <p>Last Update on {{ $user->updated_at }} ({{ $user->updated_at->diffForHumans() }})</p>
            <form action="{{ route('users.update', $user->id) }}" method="POST" accept-charset="UTF-8" enctype="multipart/form-data">
                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group">
                    <label for="name-field" class="col-sm-2 control-label">Name</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" name="name" id="name-field" value="{{ old('name', $user->name) }}" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="firstname-field" class="col-sm-2 control-label">First Name</label>
                    <div class="col-sm-10">
                    <input class="form-control" type="text" name="firstname" id="firstname-field" value="{{ old('firstname', $user->firstname) }}" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="familyname-field">Family Name</label>
                    <input class="form-control" type="text" name="familyname" id="familyname-field" value="{{ old('familyname', $user->familyname) }}" />
                </div>
                <div class="form-group">
                    <label for="middlename-field">Preferred Name</label>
                    <input class="form-control" type="text" name="middlename" id="middlename-field" value="{{ old('middlename', $user->middlename) }}" />
                </div>
                <div class="form-group">
                    <label for="gender-field">Gender</label>
                    <input class="form-control" type="text" name="gender" id="gender-field" value="{{ old('gender', $user->gender) }}" />
                </div>
                <div class="form-group">
                    <label for="fatherfull-field">Father's Full Name</label>
                    <input class="form-control" type="text" name="fatherfull" id="fatherfull-field" value="{{ old('fatherfull', $user->fatherfull) }}" />
                </div>
                <div class="form-group">
                    <label for="motherfull-field">Mother's Full Name</label>
                    <input class="form-control" type="text" name="motherfull" id="motherfull-field" value="{{ old('motherfull', $user->motherfull) }}" />
                </div>
                <div class="form-group">
                    <label for="birthday-field">Date of Birth</label>
                    <input class="form-control" type="date" name="birthday" id="birthday-field" value="{{ old('birthday', $user->birthday) }}" />
                </div>
                <div class="form-group">
                    <label for="weddingday-field">Marital Status</label>
                    <input class="form-control" type="text" name="weddingday" id="weddingday-field" value="{{ old('weddingday', $user->weddingday) }}" />
                </div>
                <div class="form-group">
                    <label for="street-field">Address</label>
                    <input class="form-control" type="text" name="street" id="street-field" value="{{ old('street', $user->street) }}" />
                </div>
                <div class="form-group">
                    <label for="suburb-field">Suburb/Town</label>
                    <input class="form-control" type="text" name="suburb" id="suburb-field" value="{{ old('suburb', $user->suburb) }}" />
                </div>
                <div class="form-group">
                    <label for="city-field">City</label>
                    <input class="form-control" type="text" name="city" id="city-field" value="{{ old('city', $user->city) }}" />
                </div>
                <div class="form-group">
                    <label for="state-field">State</label>
                    <input class="form-control" type="text" name="state" id="state-field" value="{{ old('state', $user->state) }}" />
                </div>
                <div class="form-group">
                    <label for="zip-field">Post Code</label>
                    <input class="form-control" type="text" name="zip" id="zip-field" value="{{ old('zip', $user->zip) }}" />
                </div>
                <div class="form-group">
                    <label for="country-field">Country</label>
                    <input class="form-control" type="text" name="country" id="country-field" value="{{ old('country', $user->country) }}" />
                </div>
                <div class="form-group">
                    <label for="phone-field">Phone</label>
                    <input class="form-control" type="text" name="phone" id="phone-field" value="{{ old('phone', $user->phone) }}" />
                </div>
                <div class="form-group">
                    <label for="email-field">Email</label>
                    <input class="form-control" type="text" name="email" id="email-field" value="{{ old('email', $user->email) }}" />
                </div>
                <div class="form-group">
                    <label for="introduction-field">About yourself</label>
                    <textarea name="introduction" id="introduction-field" class="form-control" rows="3">{{ old('introduction', $user->introduction) }}</textarea>
                </div>
                <div class="form-group">
                    <label for="" class="avatar-label">Profile photo</label>
                    <input type="file" name="avatar">

                    @if($user->avatar)
                        <br>
                        <img class="thumbnail img-responsive" src="{{ $user->avatar }}" width="200" />
                    @endif
                </div>
                <div class="well well-sm">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
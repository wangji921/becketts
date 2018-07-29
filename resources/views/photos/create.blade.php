@extends('layouts.app')

@section('content')

<div class="container">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">

            <div class="panel-heading">
                <h1>
                    <i class="glyphicon glyphicon-edit"></i> Photo
                        Upload
                </h1>
            </div>

            @include('common.error')

            <div class="panel-body">

                <form method="post" action="{{ url('/photos/upload_image') }}"
                    enctype="multipart/form-data" class="dropzone" id="my-dropzone">
                {{ csrf_field() }}
                <div class="dz-message">
                    <div class="col-xs-8">
                        <div class="message">
                            <p>Drop files here or Click to Upload</p>
                        </div>
                    </div>
                </div>
                <div class="fallback">
                    <input type="file" name="file" multiple>
                </div>
              </form>

                @if($photo->id)
                    <form action="{{ route('photos.update', $photo->id) }}" method="POST" accept-charset="UTF-8">
                        <input type="hidden" name="_method" value="PUT">
                @else
                    <form action="{{ route('photos.store') }}" method="POST" accept-charset="UTF-8">
                @endif

                    <input type="hidden" name="_token" value="{{ csrf_token() }}">


                <div class="form-group">
                    <label>Step 1: Where would you like to put the photos?</label>
                    <input type="file" name="photo">
                </div>
                <div class="form-group">
                	<input class="form-control" type="text" name="title" id="title-field" value="{{ old('title', $photo->title ) }}" placeholder="Title" required />
                </div>
                <div class="form-group">
                    <label for="year-field">Year</label>
                    <input class="form-control" type="number" min="1800" max="2099" name="year" id="year-field" value="{{ old('year', $photo->year ) }}" />
                </div>
                <div class="form-group">
                    <label for="month-field">Month</label>
                    <input class="form-control" type="text" name="month" id="month-field" value="{{ old('month', $photo->month ) }}" />
                </div>
                <div class="form-group">
                    <select class="form-control" name="category_id" required>
                        <option value="" hidden disabled selected>Please select a category (optional)</option>
                        @foreach ($categories as $value)
                            <option value="{{ $value->id }}">{{ $value->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                	<label for="description-field">Description</label>
                	<textarea name="description" id="description-field" class="form-control" rows="3">{{ old('description', $photo->description ) }}</textarea>
                </div>

                    <div class="well well-sm">
                        <button type="submit" class="btn btn-primary">Save</button>
                        <a class="btn btn-link pull-right" href="{{ route('photos.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<link rel="stylesheet" href="{{ asset('css/dropzone.css' )}}">
<script src="{{ asset('js/dropzone.js') }}"></script>

@endsection
@extends('layouts.app')

@section('title', 'Photos list')

@section('content')

<div class="row">
    <div class="col-lg-9 col-md-9 photo-list">
        <div class="panel panel-default">

            <div class="panel-heading">
                <ul class="nav nav-pills">
                    <li role="presentation" class="active"><a href="#">Last reply</a></li>
                    <li role="presentation"><a href="#">Latest</a></li>
                </ul>
            </div>

            <div class="panel-body">
                {{-- photos list --}}
                @include('photos._photo_list', ['photos' => $photos])
                {{-- 分页 --}}
                {!! $photos->appends(Request::except('page'))->render() !!}
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-3 sidebar">
        @include('photos._sidebar')
    </div>
</div>

@endsection
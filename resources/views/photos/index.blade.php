@extends('layouts.app')

@section('title', isset($category) ? $category->name : 'Photos list')

@section('content')

<div class="row">
    <div class="col-lg-9 col-md-9 photo-list">

        @if (isset($category))
            <div class="alert alert-info" role="alert">
                {{ $category->name }} ：{{ $category->description }}
            </div>
        @endif

        <div class="panel panel-default">
            <div class="panel-heading">
                <ul class="nav nav-pills">
                    <li class="{{ request()->query('order') === 'recent' ? '' : 'active' }}" role="presentation"><a href="{{ Request::url() }}?order=default">Last reply</a></li>
                    <li class="{{ request()->query('order') === 'recent' ? 'active' : '' }}" role="presentation"><a href="{{ Request::url() }}?order=recent">Latest</a></li>
                </ul>
            </div>

            <div class="panel-body">
                {{-- photos list --}}
                @include('photos._photo_list', ['photos' => $photos])
                {{-- pageinate --}}
                {!! $photos->appends(Request::except('page'))->render() !!}
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-3 sidebar">
        @include('photos._sidebar')
    </div>
</div>

@endsection
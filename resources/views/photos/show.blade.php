@extends('layouts.app')

@section('content')

<div class="container">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1>Photo / Show #{{ $photo->id }}</h1>
            </div>

            <div class="panel-body">
                <div class="well well-sm">
                    <div class="row">
                        <div class="col-md-6">
                            <a class="btn btn-link" href="{{ route('photos.index') }}"><i class="glyphicon glyphicon-backward"></i> Back</a>
                        </div>
                        <div class="col-md-6">
                             <a class="btn btn-sm btn-warning pull-right" href="{{ route('photos.edit', $photo->id) }}">
                                <i class="glyphicon glyphicon-edit"></i> Edit
                            </a>
                        </div>
                    </div>
                </div>

                <label>Title</label>
<p>
	{{ $photo->title }}
</p> <label>Year</label>
<p>
	{{ $photo->year }}
</p> <label>Month</label>
<p>
	{{ $photo->month }}
</p> <label>User_id</label>
<p>
	{{ $photo->user_id }}
</p> <label>Category_id</label>
<p>
	{{ $photo->category_id }}
</p> <label>Description</label>
<p>
	{{ $photo->description }}
</p> <label>Reply_count</label>
<p>
	{{ $photo->reply_count }}
</p> <label>Last_reply_user_id</label>
<p>
	{{ $photo->last_reply_user_id }}
</p> <label>Order</label>
<p>
	{{ $photo->order }}
</p>
            </div>
        </div>
    </div>
</div>

@endsection

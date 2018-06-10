@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1>
                    <i class="glyphicon glyphicon-align-justify"></i> Photo
                    <a class="btn btn-success pull-right" href="{{ route('photos.create') }}"><i class="glyphicon glyphicon-plus"></i> Create</a>
                </h1>
            </div>

            <div class="panel-body">
                @if($photos->count())
                    <table class="table table-condensed table-striped">
                        <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th>Title</th> <th>Year</th> <th>Month</th> <th>User_id</th> <th>Category_id</th> <th>Description</th> <th>Reply_count</th> <th>Last_reply_user_id</th> <th>Order</th>
                                <th class="text-right">OPTIONS</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($photos as $photo)
                                <tr>
                                    <td class="text-center"><strong>{{$photo->id}}</strong></td>

                                    <td>{{$photo->title}}</td> <td>{{$photo->year}}</td> <td>{{$photo->month}}</td> <td>{{$photo->user_id}}</td> <td>{{$photo->category_id}}</td> <td>{{$photo->description}}</td> <td>{{$photo->reply_count}}</td> <td>{{$photo->last_reply_user_id}}</td> <td>{{$photo->order}}</td>
                                    
                                    <td class="text-right">
                                        <a class="btn btn-xs btn-primary" href="{{ route('photos.show', $photo->id) }}">
                                            <i class="glyphicon glyphicon-eye-open"></i> 
                                        </a>
                                        
                                        <a class="btn btn-xs btn-warning" href="{{ route('photos.edit', $photo->id) }}">
                                            <i class="glyphicon glyphicon-edit"></i> 
                                        </a>

                                        <form action="{{ route('photos.destroy', $photo->id) }}" method="POST" style="display: inline;" onsubmit="return confirm('Delete? Are you sure?');">
                                            {{csrf_field()}}
                                            <input type="hidden" name="_method" value="DELETE">

                                            <button type="submit" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {!! $photos->render() !!}
                @else
                    <h3 class="text-center alert alert-info">Empty!</h3>
                @endif
            </div>
        </div>
    </div>
</div>

@endsection
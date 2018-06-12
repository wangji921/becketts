@if (count($photos))

    <ul class="media-list">
        @foreach ($photos as $photo)
            <li class="media">
                <div class="media-left">
                    <a href="{{ route('users.show', [$photo->user_id]) }}">
                        <img class="media-object img-thumbnail" style="width: 52px; height: 52px;" src="{{ $photo->user->avatar }}" title="{{ $photo->user->name }}">
                    </a>
                </div>

                <div class="media-body">

                    <div class="media-heading">
                        <a href="{{ route('photos.show', [$photo->id]) }}" title="{{ $photo->title }}">
                            {{ $photo->title }}
                        </a>
                        <a class="pull-right" href="{{ route('photos.show', [$photo->id]) }}" >
                            <span class="badge"> {{ $photo->reply_count }} </span>
                        </a>
                    </div>

                    <div class="media-body meta">

                        <a href="{{ route('categories.show', $photo->category->id) }}" title="{{ $photo->category->name }}">
                            <span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span>
                             {{ $photo->category->name }}
                        </a>

                        <span> • </span>
                        <a href="{{ route('users.show', [$photo->user_id]) }}" title="{{ $photo->user->name }}">
                            <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                            {{ $photo->user->name }}
                        </a>
                        <span> • </span>
                        <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                        <span class="timeago" title="最后活跃于">{{ $photo->updated_at->diffForHumans() }}</span>
                    </div>

                </div>
            </li>

            @if ( ! $loop->last)
                <hr>
            @endif

        @endforeach
    </ul>

@else
   <div class="empty-block">暂无数据 ~_~ </div>
@endif
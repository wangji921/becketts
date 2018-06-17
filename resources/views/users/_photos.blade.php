@if (count($photos))

<ul class="list-group">
    @foreach ($photos as $photo)
        <li class="list-group-item">
            <a href="{{ route('photos.show', $photo->id) }}">
                {{ $photo->title }}
            </a>
            <span class="meta pull-right">
                {{ $photo->reply_count }} {{ $photo->reply_count > 1 ? 'replies' : 'reply' }}
                <span> ⋅ </span>
                {{ $photo->created_at->diffForHumans() }}
            </span>
        </li>
    @endforeach
</ul>

@else
    <div class="empty-block">no data ~_~ </div>
@endif

{{-- pageinate --}}
{!! $photos->render() !!}
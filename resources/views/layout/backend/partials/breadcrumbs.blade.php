@if (count($breadcrumbs))
    <div class="breadcrumb-line">
        <ul class="breadcrumb">
            @foreach ($breadcrumbs as $breadcrumb)
                @if ($breadcrumb->url && !$loop->last)
                    <li><a href="{{ $breadcrumb->url }}"><i
                                    class="icon-home2 position-left"></i> {{ $breadcrumb->title }}</a></li>
                @else
                    <li class="active">{{ $breadcrumb->title }}</li>
                @endif
            @endforeach
        </ul>
    </div>
@endif
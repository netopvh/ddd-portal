@if ($breadcrumbs)
    <ol class="breadcrumb float-right nav_breadcrumb_top_align">
        @foreach ($breadcrumbs as $breadcrumb)
            @if (!$breadcrumb->last)
                <li class="breadcrumb-item">
                    <a href="{{ $breadcrumb->url }}">
                        <i class="fa fa-home" data-pack="default" data-tags=""></i>
                        {{ $breadcrumb->title }}
                    </a>
                </li>
            @else
                <li class="breadcrumb-item active">{{ $breadcrumb->title }}</li>
            @endif
        @endforeach
    </ol>
@endif
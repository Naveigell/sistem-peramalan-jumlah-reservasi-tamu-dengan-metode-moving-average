<div class="alert alert-danger @if(@$dismissable) alert-dismissible @endif show fade">
    <div class="alert-body">
        @if(@$dismissable)
            <button class="close" data-dismiss="alert">
                <span>×</span>
            </button>
        @endif
        @if(@$isHtml)
            {!! $message ?? '' !!}
        @else
            {{ $message ?? '' }}
        @endif
    </div>
</div>

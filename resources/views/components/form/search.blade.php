<div class="container {{ @$padding ?? 'p-4' }}">
    <h6>{{ @$title ?? 'Search & Filter' }}</h6>
    <form action="{{ @$action }}" method="get">
        <div class="form-row mb-2">
            @if(@$search)
                <div class="col-4">
                    <input type="text" class="form-control" name="search" value="{{ request()->query('search') }}" placeholder="{{ @$searchPlaceholder ?? 'Search ...' }}">
                </div>
            @endif
            @if(@$filter)
                <div class="col-8">
                    {{ @$filterSlot ?? '' }}
                </div>
            @endif
        </div>
        <button class="btn btn-primary" type="submit">Search</button>

        @if(@$print)
            &nbsp;<a href="{{ @$printUrl ?? request()->fullUrl() }}" target="_blank" class="btn btn-warning"><i class="fa fa-print"></i> Print</a>
        @endif
    </form>
</div>

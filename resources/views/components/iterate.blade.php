@php
    $iteration = $loop->iteration + ($pagination->perPage() * ($pagination->currentPage() - 1));
@endphp

@if(!@$isPlainText)
    <span>{{ $iteration }}</span>
@else
    {{ $iteration }}
@endif

<div class="list-group list-group-root well">
    @foreach($auditLog->new_values as $key => $item)
        @if (is_array($item))
            <p class="list-group-item">
                <strong>{{ ucfirst($key) }}:</strong>
            </p>
            @include('audit-log.partials.list-items', ['items' => $item])
        @else
            @if ($item && $item != '[]' && $item != '*')
                <p class="list-group-item">
                    <strong>{{ ucfirst($key) }}:</strong>
                    {{ $item }}
                </p>
            @endif
        @endif
    @endforeach
</div>
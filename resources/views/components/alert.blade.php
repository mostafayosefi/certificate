@foreach ($message->all() as $error)
    <div class="alert alert-{{ $type }}" role="alert">
        {{ $error }}
    </div>
@endforeach

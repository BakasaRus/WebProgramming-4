@if($errors->any())
    <div class="alert alert-danger" role="alert">
       {{ $slot }}
        <ul class="mb-0">
            @foreach ($errors->all() as $message)
                <li>{{ $message }}</li>
            @endforeach
        </ul>
    </div>
@endif
sdfsadfas

<a href="{{ route("product.show",23) }}"></a>
<ul>
    @foreach ($users as $user)
        <li>{{ $user->name }} -> {{ $user->id }}</li>
    @endforeach
</ul>

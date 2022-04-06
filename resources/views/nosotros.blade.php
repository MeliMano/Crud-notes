@extends('plantilla')


@section('seccion')

<h1>Este es mi equipo de trabajo</h1>

@foreach($equipo as $item)
    <a href="{{ route('nosotros',$item) }}" class="h4 text-denger">{{$item}}</a><br>
@endforeach

@if(!empty($nombre))

@switch($nombre)

    @case($nombre=='Melisa')
    <h2 class="mt-5">El nombre es {{ $nombre }}:</h2>
    <p>{{ $nombre }}Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni, reprehenderit consequuntur, doloribus illo consequatur inventore rerum earum ullam natus dignissimos quas architecto repellat optio possimus! Dolor in repellendus distinctio hic!</p>
    @break

    @case($nombre=='Diego')
    <h2 class="mt-5">El nombre es {{ $nombre }}:</h2>
    <p>{{ $nombre }}Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni, reprehenderit consequuntur, doloribus illo consequatur inventore rerum earum ullam natus dignissimos quas architecto repellat optio possimus! Dolor in repellendus distinctio hic!</p>
    @break

    @case($nombre=='Amelia')
    <h2 class="mt-5">El nombre es {{ $nombre }}:</h2>
    <p>{{ $nombre }}Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni, reprehenderit consequuntur, doloribus illo consequatur inventore rerum earum ullam natus dignissimos quas architecto repellat optio possimus! Dolor in repellendus distinctio hic!</p>
    @break

@endswitch

@endif

@endsection
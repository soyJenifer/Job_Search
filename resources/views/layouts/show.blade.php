@extends('layouts.app')

@section('content')
<table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Trabajo</th>
        <th scope="col">Descripcion</th>
        <th scope="col">Empresa</th>
        <th scope="col">Estado</th>
        <th scope="col">Fecha</th>
      </tr>
    </thead>
    <tbody>
      @foreach($offers as $offer)
        <tr>
          <td>{{ $offer->id }}</td>
          <td>{{ $offer->offer }}</td>
          <td>{{ $offer->description }}</td>
          <td>{{ $offer->company }}</td>
          <td>
          @if ($offer->status===1)
            Activa 🔛
          @else
            Inactiva ⛔
          @endif
          </td>
          <td>{{ $offer->created_at }}</td>
        </tr>
      @endforeach
    </tbody>
  </table>
@endsection
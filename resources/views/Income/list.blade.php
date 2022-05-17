@extends('layout')
@section('content')

<table class="table">
  <thead class="thead-dark">
    <tr>
      
      <th scope="col">Income list</th>
      <th scope="col">Amount</th>
      <th scope="col">Month</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <div class="row my-5">
      <div class="col-md-0 offset-md text-right">
         <a href="{{ route('create')}}">
           <button class="btn btn-primary">Add Income</button>
         </a>
    </div>
    
      {{-- @foreach ($Income as $income) --}}
          
      
      {{-- <td></td>
      <td></td>
      <td></td>
      <td> --}}
        {{-- <div class="row my-5">
          <div class="col-md-8 offset-md text-right">
             <a href="{{ route('Income.edit', ['id' => $Income->id])}}">
               <button class="btn btn-primary">Edit</button>
             </a>
        <form action="{{ route('Income.edit', ['id' => $Income->id])}}" method="POST">
          @csrf
          <button class="btn btn-danger">Delete</button>
        </form> --}}
      {{-- </td>
    </tr> --}}
      {{-- <td>{{ $Income->list }}</td>
      <td>{{ $Income->Amount }}</td>
      <td>{{ $Income->Month }}</td> --}}
    {{-- @endforeach --}}
  {{-- </tbody>
</table> --}}
{{-- {{ $products->links() }} --}}


  @endsection
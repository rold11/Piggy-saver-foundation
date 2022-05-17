@extends('layout')

@section('content')

<div class="row my-5">
    <div class="col-md-0 offset-md text-right">
       <a href="{{ route('list')}}">
         <button class="btn btn-primary">Back to Income list</button>
       </a>
  </div>

@if(session()->has('message'))
<div class="alert alert-success">{{ session('message') }}</div>
@endif
<form action="{{ route('Income.update')}}" method="POST">
    @csrf
    <input type="hidden" name="id" value="{{ $Income->id }}"
    <div class="form-group">
      <label for="exampleInputEmail1">Source of Income</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter source of Income" value="{{ $Income->name }}">
      @error('Enter source of Income')
      <small class="text-danger">{{ $message }}</small>
      @enderror
     </div>
     <div class="form-group">
        <label for="exampleInputEmail1">Amount</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Amount"value="{{ $Income->amount }}">
        @error('Enter Amount')
        <small class="text-danger">{{ $message }}</small>
        @enderror
       </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Month</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Month" value="{{ $Income->month }}">
        @error('Enter Income')
        <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>

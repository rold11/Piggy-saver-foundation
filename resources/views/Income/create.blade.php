@extends('layout')

@section('content')

<div class="row my-5">
    <div class="col-md-8 offset-md text-right">
       <a href="{{ route('list')}}">
         <button class="btn btn-primary">Back to Income list</button>
       </a>
  </div>

@if(session()->has('message'))
<div class="alert alert-success">{{ session('message') }}</div>
@endif
<form action="{{ route('Income.store')}}" method="POST">
    @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">Source of Income</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter source of Income">
      @error('Enter source of Income')
      <small class="text-danger">{{ $message }}</small>
      @enderror
     </div>
     <div class="form-group">
        <label for="exampleInputEmail1">Amount</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Amount">
        @error('Enter Amount')
        <small class="text-danger">{{ $message }}</small>
        @enderror
       </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Month</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Month">
        @error('Enter Income')
        <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>

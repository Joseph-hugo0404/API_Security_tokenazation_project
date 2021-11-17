@extends('layouts.app')

@section('content')
<div class="bg-dark">
    <div class="col-lg-12">
     <table class="table-striped">
    </div>
    <div class="col-lg-12"> 
        @foreach ($flights as $item)
        <div class="card card-outline card-black">
            <div class="bg">
            <span class="card-title"><b>Flights &nbsp;</b></span>
            </div>
          </div>
   @endforeach
    </div>
  </div>
  </div>
</table>
<style>
  .bg{
    background-color: #0f0f0f;
  }
  h4{
      position: relative;
      left:10px;
      top:10px;
      font-size:20px;
      
  }


  p{
    position: relative;
    left:100px;
    border-left: 6px solid #000000;
    height: 20px;
    left: 20%;
  }
    .card-title{
        position: relative;
        left: 360px;
        font-size: 30px;
        color:rgb(175, 165, 165);
    }

    .card-body{
        position: relative;
        left: 355px;
    }
    
    </style>
@endsection

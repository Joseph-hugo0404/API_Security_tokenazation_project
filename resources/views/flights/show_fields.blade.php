<!-- Origin Field -->
<div class="col-sm-12">
    {!! Form::label('origin', 'Origin:') !!}
    <p>{{ $flights->origin }}</p>
</div>

<!-- Destination Field -->
<div class="col-sm-12">
    {!! Form::label('destination', 'Destination:') !!}
    <p>{{ $flights->destination }}</p>
</div>

<!-- Flight No Field -->
<div class="col-sm-12">
    {!! Form::label('flight_no', 'Flight No:') !!}
    <p>{{ $flights->flight_no }}</p>
</div>

<!-- Departure Date Field -->
<div class="col-sm-12">
    {!! Form::label('departure_date', 'Departure Date:') !!}
    <p>{{ $flights->departure_date }}</p>
</div>

<!-- Arrival Date Field -->
<div class="col-sm-12">
    {!! Form::label('arrival_date', 'Arrival Date:') !!}
    <p>{{ $flights->arrival_date }}</p>
</div>

<!-- Passenger Name Field -->
<div class="col-sm-12">
    {!! Form::label('passenger_name', 'Passenger Name:') !!}
    <p>{{ $flights->passenger_name }}</p>
</div>

<!-- Age Field -->
<div class="col-sm-12">
    {!! Form::label('age', 'Age:') !!}
    <p>{{ $flights->age }}</p>
</div>


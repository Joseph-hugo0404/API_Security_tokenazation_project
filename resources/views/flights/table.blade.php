<div class="table-responsive">
    <table class="table" id="flights-table">
        <thead>
            <tr>
                <th>Origin</th>
        <th>Destination</th>
        <th>Flight No</th>
        <th>Departure Date</th>
        <th>Arrival Date</th>
        <th>Passenger Name</th>
        <th>Age</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($flights as $flights)
            <tr>
                <td>{{ $flights->origin }}</td>
            <td>{{ $flights->destination }}</td>
            <td>{{ $flights->flight_no }}</td>
            <td>{{ $flights->departure_date }}</td>
            <td>{{ $flights->arrival_date }}</td>
            <td>{{ $flights->passenger_name }}</td>
            <td>{{ $flights->age }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['flights.destroy', $flights->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('flights.show', [$flights->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('flights.edit', [$flights->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

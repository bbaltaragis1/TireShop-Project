@extends ('layouts.master')

@section ('content')
    <div class="jumbotron text-center">
        <h2>{{ $employee->name }}</h2>
        <p>
            <strong>First Name:</strong> {{ $employee->firstName }}<br>
            <strong>Last Name:</strong> {{ $employee->lastName }}<br>
            <strong>Start Date:</strong> {{ $employee->startDate }}<br>
        </p>
    </div>

</div>

@endsection
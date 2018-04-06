@extends ('layouts.master')

@section ('content')
    <div class="jumbotron text-center">
        <h2>{{ $customer->name }}</h2>
        <p>
            <strong>First Name:</strong> {{ $customer->firstName }}<br>
            <strong>Last Name:</strong> {{ $customer->lastName }}<br>
            <strong>Phone Number:</strong> {{ $customer->phoneNumber }}<br>
            <strong>Email:</strong> {{ $customer->email }}<br>
        </p>
    </div>

</div>

</form>

@endsection
@extends ('layouts.master')

@section ('content')
    <div class="jumbotron text-center">
        <h2>{{ $tire->name }}</h2>
        <p>
            <strong>Price:</strong> {{ $tire->price }}<br>
            <strong>Brand:</strong> {{ $tire->brand }}<br>
            <strong>Rim Diameter:</strong> {{ $tire->rimDiameter }}<br>
            <strong>Stock:</strong> {{ $tire->stock }}<br>
        </p>
    </div>

</div>
<a href="/tires/"><button class="btn btn-danger">Cancel</button></a>
@endsection
@extends ('layouts.master')

@section ('content')
{!! Form::model($tire, [
    'method' => 'PATCH',
    'route' => ['tires.update', $tire->tireID]
]) !!}
  {{ csrf_field() }}
<div class="wrapper container">
  <div class="form-group">
    <div class = "row">
      <div class="col-3">
         Name<input type="text" class="form-control" value="{{$tire->name}}" id="name" name="name" >
      </div>
      <div class="col-3">
         Price<input type="text" class="form-control" value="{{$tire->price}}" id="price" name="price">
      </div>
    </div>
    <div class = "row">
      <div class="col-3">
        Brand<input type="text" class="form-control" value="{{$tire->brand}}" id="brand" name="brand">
    </div>
    <div class="col-3">
        Rim Diameter<input type="text" class="form-control" value="{{$tire->rimDiameter}}" id="rimDiameter" name="rimDiameter">
    </div>
  </div>
  <div class = "row">
    <div class="col-3">
        Stock<input type="text" class="form-control" value="{{$tire->stock}}" id="stock" name="stock">
    </div>
  </div>
  </div>

<div class = "row">
     
     <div class="col-3">
       <button type="submit" class="btn btn-primary">Update</button>
     </div>
     <div class="col-3">
      <a href="/tires/"><button class="btn btn-danger">Cancel</button></a>
    </div>
   </div>
</div>
</form>
@endsection
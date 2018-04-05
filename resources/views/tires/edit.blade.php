@extends ('layouts.master')

@section ('content')
{!! Form::model($tire, [
    'method' => 'PATCH',
    'route' => ['tires.update', $tire->id]
]) !!}
  {{ csrf_field() }}
  <div class="form-group">
    <div class = "row">
      <div class="col-3">
         Name<input type="text" class="form-control" value="{{$tire->tire_name}}" id="tire_name" name="tire_name" >
      </div>
      <div class="col-3">
         Price<input type="text" class="form-control" value="{{$tire->tire_price}}" id="tire_price" name="tire_price">
      </div>
      <div class="col-3">
        Stock<input type="text" class="form-control" value="{{$tire->tire_stock}}" id="tire_stock" name="tire_stock">
    </div>
  </div>
  </div>
  <div class="form-group">
    <div class = "row">
    <div class="col-3">
    </div>
    <div class="col-3">
  </div>
    <div class="col-3">
    <button type="submit" class="btn btn-primary">Update</button>
  </div>
  </div>
  </div>
 


</form>
   <a href="/tires/"><button class="btn btn-danger">Cancel</button></a>
@endsection
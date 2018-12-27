@extends('master')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3>Adding new Entry</h3>
            <form method="post" action="{{url('/createEntry')}}">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <div class="form-group">
                    <div class="col-md-12">
                        School Name<input type="text" class="form-control" name="school_name" value="{{old('school_name')}}">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        Address<input type="text" class="form-control" name="address" value="{{old('address')}}">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        City<input type="text" class="form-control" name="city" value="{{old('city')}}">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        Postal Code<input type="text" class="form-control" name="postal_code" value="{{old('postal_code')}}">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        School Board<input type="text" class="form-control" name="school_board" value="{{old('school_board')}}">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        School ID<input type="text" class="form-control" name="school_id" value="{{old('school_id')}}">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        Breakfast<input type="text" class="form-control" name="breakfast" value="{{old('breakfast')}}">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        Lunch<input type="text" class="form-control" name="lunch" value="{{old('lunch')}}">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        Snack<input type="text" class="form-control" name="snack" value="{{old('snack')}}">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-block btn-success" value="Submit">Submit</button>
                        <a class="btn btn-danger btn-block" href="../index.php">Go Back</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

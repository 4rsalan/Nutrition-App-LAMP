@extends('master')

@section('content')
    <div class="card card-container">
        <div class="card-header">
            <h3>Modifying Entry #{{$entry->id}}</h3>
            <form method="post" action="{{url("edit/$entry->id")}}">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <div class="form-group">
                    <div class="col-md-12">
                        School Name<input type="text" class="form-control" name="school_name" value="{{$entry->school_name}}">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        Address<input type="text" class="form-control" name="address" value="{{$entry->address}}">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        City<input type="text" class="form-control" name="city" value="{{$entry->city}}">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        Postal Code<input type="text" class="form-control" name="postal_code" value="{{$entry->postal_code}}">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        School Board<input type="text" class="form-control" name="school_board" value="{{$entry->school_board}}">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        School ID<input type="text" class="form-control" name="school_id" value="{{$entry->school_id}}">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        Breakfast<input type="text" class="form-control" name="breakfast" value="{{$entry->breakfast}}">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        Lunch<input type="text" class="form-control" name="lunch" value="{{$entry->lunch}}">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        Snack<input type="text" class="form-control" name="snack" value="{{$entry->snack}}">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <div class="form-check">
                            Hide Entry?<br>
                            <input class="form-check-input" type="radio" name="hidden" id="hidden1" value="1">
                            <label class="form-check-label" for="hidden1">
                                Yes
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="hidden" id="hidden0" value="0" >
                            <label class="form-check-label" for="hidden0">
                                No
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-block btn-success" value="Submit">Modify</button>
                    </div>
                </div>
            </form>
            <form method="post" action="{{url("delete/$entry->id")}}">
                <div class="form-group">
                    <div class="col-md-12">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <button type="submit" class="btn btn-block btn-warning" value="Submit">Delete Entry</button>
                <a class="btn btn-danger btn-block" href="{{url('/')}}">Go Back</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

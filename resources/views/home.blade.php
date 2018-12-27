@extends('master')

@section('content')
<div class="card card-container">
    {{$data->links()}}
    @if(Session::has('SignedIn'))
    <div class="mb-3 mx-auto">
        <a class="btn btn-primary form-check-inline mb-1" href="{{url('add')}}">Add New Entry</a>
        <form method="post" action="{{url('import')}}" class="form-check-inline">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <button class='btn btn-dark' name='Import'>Import CSV</button>
        </form>
        <form method="post" action="{{url('export')}}" class="form-check-inline ">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <button class='btn btn-warning' name='Export'>Export CSV</button>
        </form>
    </div>
    @endif
    <div class="row mx-auto">
        @foreach($data as $record)
        <div class="col-sm-4 col-md-3 mx-auto">
            <div class="card card-entry">
                <div class="card-body">
                    <h5 class="card-title"> {{$record->school_name}}<br>
                        <small class="text-muted">{{$record->address}},  {{$record->city}}, Ontario, {{$record->postal_code}}</small>
                    </h5>
                    <p class="card-text"> {{$record->school_board}}</p>
                    <p class='card-text'>School ID: {{$record->school_id}}</p>
                    <p><small class='text-muted'>ID#: {{$record->id}}</small></p>
                </div>
                <div class="card-footer text-muted mb-2">
                    Breakfast: <b>{{$record->breakfast}}</b> <br>
                    Lunch: <b>{{$record->lunch}}</b> <br>
                    Snack: <b>{{$record->snack}}</b>
                    @if(Session::has('SignedIn'))
                    <form method='post' action='{{url("modify/$record->id")}}'>
                        <div class='mt-2'>
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <button class='btn btn-secondary btn-block mb-1' name='delete' value='{{$record->id}}'>Modify Card</button>
                        </div>
                    </form>
                        @if($record->hidden == 1)
                            <p><small class='text-muted'>Entry is current hidden by admin</small></p>
                        @endif
                    @endif
                </div>
            </div>
        </div>
            @endforeach
    </div>
</div>
@endsection
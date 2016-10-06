@extends('layouts.app')

@section('content')
<div id="test" class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

            <div class="panel panel-default">
                <div class="panel-heading">Tracking System</div>

                <div class="panel-body">

                    <form action="" method="POST" class="form-inline" role="form">

                        <div class="form-group">
                            <label for=""> From </label>
                            <input type="time" name="startTime" v-model="startTime" class="form-control" id="start-time" placeholder="Input field">
                        </div>

                        <div class="form-group">
                            <label for=""> Until </label>
                            <input type="time" name="endTime" v-model="endTime" class="form-control" id="end-time" placeholder="Input field">
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>

                    </form>

                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-body">

                    @{{message}}

                    <ul class="list-group">
                        <li class="list-group-item">@{{startTime}} to @{{endTime}}</li>
                        <li class="list-group-item">Item 2</li>
                        <li class="list-group-item">Item 3</li>
                    </ul>

                </div>
            </div>

        </div>
    </div>
</div>
@endsection

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

            <div class="panel panel-default">
                <div class="panel-heading">Tracking System</div>

                <div class="panel-body">

                    <form action="" method="POST" role="form">
                        <legend>Time Worked</legend>

                        <div class="form-group">
                            <label for="">label</label>
                            <input type="text" class="form-control" id="" placeholder="Input field">
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>

                </div>
            </div>


            <div class="panel panel-default">
                <div class="panel-body">
                    @{{message}}
                </div>
            </div>

        </div>
    </div>
</div>
@endsection

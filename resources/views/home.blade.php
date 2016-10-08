@extends('layouts.app')

@section('content')
<div id="test" class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

            <section class="panel panel-primary">
                <div class="panel-heading">Tracking System</div>

                <div class="panel-body">

                    <div action="" method="POST" role="form">

                        <div class="form-group">
                            <label for="">Project Title</label>
                            <input type="text" v-model="projectTitle" class="form-control" placeholder="Give your project a clever name, like Gobias Industries, but not that...">
                        </div>

                        <label>Add a time frame of work:</label>

                    </div>

                    <div  method="POST" class="form-inline" role="form">

                        <div class="form-group">
                            <label for="">From </label>
                            <input type="time" name="startTime" v-model="startTime" class="form-control" id="start-time" placeholder="Input field">
                        </div>

                        <div class="form-group">
                            <label for=""> Until </label>
                            <input type="time" name="endTime" v-model="endTime" class="form-control" id="end-time" placeholder="Input field">
                        </div>

                        <button type="submit" v-on:click="addTime" class="btn btn-primary">Submit</button>

                    </div>

                </div>
            </section>


            <div v-if="projectTitle || startTime" class="panel panel-default">

                <div class="panel-heading" v-if="projectTitle">
                    <h3 class="panel-title">@{{projectTitle}}</h3>
                </div>

                <div class="panel-body">

                    <ul class="list-group">
                        <li v-for="time in times" class="list-group-item">@{{time.workedTime}} Hours</li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

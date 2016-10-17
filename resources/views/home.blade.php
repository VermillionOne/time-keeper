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
                            <div class="input-group">
                                <input type="text" v-model="projectTitle" class="form-control" placeholder="Give your project a clever name, like Gobias Industries, but not that...">
                                <span class="input-group-btn">
                                    <button v-on:click="addProject" class="btn btn-primary">Add Project</button>
                                </span>
                            </div>

                        </div>

                        {{-- <div class="form-group"> --}}
                            {{-- <label for="">Assignment Name</label> --}}
                            {{-- <div class="input-group"> --}}
                                {{-- <input type="text" v-model="assignmentTitle" class="form-control" placeholder="Name your assignment."> --}}
                               {{--  <span class="input-group-btn">
                                    <button class="btn btn-primary" v-on:click="addAssignment" type="button">Add Assignment</button>
                                </span> --}}
                            {{-- </div> --}}
                        {{-- </div> --}}

                        {{-- <label>Add a time frame of work:</label> --}}

                    </div>
                    {{--  <div class="form-inline" role="form">

                        <div class="form-group">
                            <label for="">From </label>
                            <input type="time" name="startTime" v-model="startTime" class="form-control" id="start-time" placeholder="Input field">
                        </div>

                        <div class="form-group">
                            <label for=""> Until </label>
                            <input type="time" name="endTime" v-model="endTime" class="form-control" id="end-time" placeholder="Input field">
                        </div>

                        <button type="submit" v-on:click="addTime" v-if="editable != true" class="btn btn-primary">Submit</button>
                        <button type="submit" v-on:click="addTime" v-if="editable == true" class="btn btn-primary">Update</button>

                    </div> --}}

                </div>
            </section>

            <div v-for="project in projects" class="panel panel-default">

                <div class="panel-heading">
                    <h3 class="panel-title">@{{project.title}}</h3>
                </div>


                <div class="panel-body">

                    <div class="form-group">
                        <div class="input-group">
                            <input type="text" v-model="assignmentTitle" v-on:keyup.enter="addAssignmentTitle" class="form-control" placeholder="Give your project a clever name, like Gobias Industries, but not that...">
                            <span class="input-group-btn">
                                <button v-on:click="addProject" class="btn btn-primary">Add Assignment</button>
                            </span>
                        </div>
                    </div>

                    <div class="form-inline" role="form">

                        <div class="form-group">
                            <label for="">From </label>
                            <input type="time" name="startTime" v-model="startTime" class="form-control" id="start-time" placeholder="Input field">
                        </div>

                        <div class="form-group">
                            <label for=""> Until </label>
                            <input type="time" name="endTime" v-model="endTime" class="form-control" id="end-time" placeholder="Input field">
                        </div>

                        <button type="submit" v-on:click="addTime" v-if="editable != true" class="btn btn-primary">Submit</button>
                        <button type="submit" v-on:click="addTime" v-if="editable == true" class="btn btn-primary">Update</button>

                    </div>

                    <ul class="list-group">

                        <li v-for="assignment in assignments" name="item-@{{$index}}" class="list-group-item">

                            <li class="list-group-item" >@{{assignment.title}}</li>
                            <ul class="list-group">

                                <li v-for="time in assignment.times" class="list-group-item">@{{time.workedTime}} Hours
                                    <span class="badge" v-on:click="removeTime($index)"><span class="glyphicon glyphicon-remove"></span></span>
                                    <span class="badge" v-on:click="editTime($index)"><span class="glyphicon glyphicon-pencil"></span></span>
                                </li>
                            </ul>

                        </li>
                    </ul>

                </div>
            </div>
            {{-- End Projects v-for --}}
        </div>
    </div>
</div>
@endsection

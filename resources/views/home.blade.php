@extends('layouts.app')

@section('content')
<div id="test" class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

            <section class="panel panel-primary">

                <div class="panel-heading">Tracking System</div>

                <div class="panel-body">

                    {!! Form::open(['url' => 'project']) !!}

                        {!! Form::label('project_title', 'Project Title', []) !!}

                        <div class="input-group">
                            {!! Form::text('project_title', '', ['class' => 'form-control', 'placeholder' => 'Give your project a clever name, like Gobias Industries, but not that...']) !!}

                            <span class="input-group-btn">

                                {!! Form::submit('Add Project', ['class' => 'btn btn-primary']) !!}

                            </span>

                        </div>

                    {!! Form::close() !!}

                </div>
            </section>
            {{-- --}}

            @if (isset($projects))
                @foreach ($projects as $project)
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">{{ $project->project_title }}</h3>
                        </div>
                        <div class="panel-body">

                            {!! Form::open(['method' => 'post', 'url' => "assignment/$project->project_id"]) !!}
                                <div class="input-group">
                                    {!! Form::text('assignment_title', '', ['class' => 'form-control', 'placeholder' => 'Make an assignment/task here.']) !!}
                                    <span class="input-group-btn">
                                        {!! Form::submit('Set Assignment', ['class' => 'btn btn-success']) !!}
                                    </span>
                                </div>
                            {!! Form::close() !!}

                            @if (isset($project->assignments))
                                @foreach ($project->assignments as $assignment)

                                        {!! Form::open(['url' => 'time/assignment_id', 'class' => 'form-inline']) !!}
                                            <div class="form-group">
                                                <input type="time" name="start_time" class="form-control">
                                                <input type="time" name="end_time" class="form-control">
                                            </div>
                                            {!! Form::submit('Add Time', ['class' => 'form-control']) !!}
                                        {!! Form::close() !!}
                                    <ul class="list-group">
                                        @if (isset($assignment->times))
                                            @foreach ($assignment->times as $time)
                                                <li class="list-group-item">Item {{$index}}</li>
                                            @endforeach
                                        @endif
                                    </ul>

                                @endforeach
                            @endif
                        </div>
                    </div>
                @endforeach
            @endif
            {{-- This section if for testing purposes only --}}
            {!! Form::open(['url' => 'time/1', 'class' => 'form-inline']) !!}
                <div class="form-group">
                    <input type="time" name="start_time" class="form-control">
                    <input type="time" name="end_time" class="form-control">
                </div>
            {!! Form::submit('Add Time', ['class' => 'form-control']) !!}
            {{-- End Projects v-for --}}
        </div>
    </div>
</div>
@endsection

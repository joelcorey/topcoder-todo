@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard | To Do</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="panel-body">
                        <!-- Display Validation Errors -->
                        @include('common.errors')
                        
                        <!-- New Task Form -->
                        <form action="/tasks" method="POST" class="form-horizontal">
                            {{ csrf_field() }}
                
                            <!-- Task Name -->
                            <div class="form-group">
                                <label for="task-name" class="col-sm-3 control-label">Task</label>
                
                                <div class="col-sm-6">
                                    <input type="text" name="task" id="task" class="form-control">
                                </div>
                            </div>
                
                            <!-- Add Task Button -->
                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-6">
                                    <button type="submit" class="btn btn-default">
                                        <i class="fa fa-plus"></i> Add Task
                                    </button>
                                </div>
                            </div>

                        </form>
                    </div>

                    <!-- Current Tasks -->
                    {{-- @if (count($tasks) > 0) --}}
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            {{-- Current Tasks --}}
                        </div>

                        <div class="panel-body">
                            <table class="table table-striped task-table">

                                <!-- Table Headings -->
                                <thead>
                                    {{-- <th>Task</th>
                                    <th>&nbsp;</th> --}}
                                </thead>

                                <!-- Table Body -->
                                <tbody>
                                    @foreach ($tasks as $task)
                                        <tr>
                                            
                                            <!-- Task Name -->
                                            <td class="align-middle">
                                                <div>{{ $task->task }}</div>
                                            </td>

                                            <td>
                                                <form action="{{ action('TaskController@getTask', $task->id) }}" method="get">
                                                    {{csrf_field()}}
                                                    <input name="_method" type="hidden" value="GET">
                                                    <button class="btn btn-primary" type="submit">Edit</button>
                                                </form>
                                            </td>
                                            <td>
                                                <form action="{{ action('TaskController@destroy', $task->id) }}" method="post">
                                                    {{ csrf_field() }}
                                                    <input name="_method" type="hidden" value="DELETE">
                                                    <button class="btn btn-danger" type="submit">Done!</button>
                                                </form>
                                            </td>
                                            
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    {{-- @endif --}}




                </div>
            </div>
        </div>
    </div>
</div>
@endsection

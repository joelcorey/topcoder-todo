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
                        {{-- {{ dd(@$task) }} --}}
                        <form action="{{action('TaskController@edit', $task->id)}}" method="post">
                            @csrf
                            <input name="_method" type="hidden" value="PATCH">
                            
                            <!-- Task Name -->
                            {{-- <div class="form-group">
                                <label for="task-name" class="col-sm-3 control-label">Task</label>

                                <div class="col-sm-6">
                                    <input type="text" name="task" id="task" class="form-control">
                                </div>
                            </div> --}}

                            <div class="row">
                                <div class="col-md-4"></div>
                                <div class="form-group col-md-4">
                                    <label for="name">Task:</label>
                                    <input type="text" class="form-control" name="name" id="task" value="{{$task->task}}">
                                </div>
                            </div>

                            {{-- <div class="row">
                                <div class="col-md-4"></div>
                                <div class="form-group col-md-4">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control" name="email" value="{{$passport->email}}">
                                </div>
                            </div> --}}
                            
                            <div class="row">
                                <div class="col-md-4"></div>
                                <div class="form-group col-md-4" style="margin-top:60px">
                                <button type="submit" class="btn btn-success" style="margin-left:38px">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>

                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

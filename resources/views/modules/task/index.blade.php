@extends('layouts.master')

@section('content')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">About</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">About us</li>
        </ol>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Task
                    </div>
                    <div class="card-body">
                        <table class="table table-sm table-bordered table-hover table-striped">
                            <thead>
                                <tr>
                                    <th>Sl</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Status</th>
                                    <th>Deadline</th>
                                    <th>User</th>
                                    <th>Created at</th>
                                    <th>Updated at</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $sl = 1;
                                @endphp
                                @foreach ($tasks as $task)
                                <tr>
                                    <td>{{ $sl++ }}</td>
                                    <td>{{ $task->title }}</td>
                                    <td>{{ substr($task->description,0,30) }}</td>
                                    <td>{{ $task->status == 1 ? "Active" : "" }}</td>
                                    <td>{{ $task->deadline != null ? Carbon\Carbon::create($task->deadline)->format('d-M-Y') : null }}</td>
                                    <td>{{ $task->user_id }}</td>
                                    <td><small>{{ $task->created_at->toDayDateTimeString() }}</small></td>
                                    <td><small>{{ $task->updated_at->toDayDateTimeString() }}</small></td>
                                    <td></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</main>
@endsection

{{-- @extends('layouts.master')
@section('page_title', 'About Us')
@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Create Task</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Create Task</li>
        </ol>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Create Task </h4>
                    </div>
                    <div class="card-body">

{{--                        @if($errors)--}}
{{--                            <ul class="alert alert-danger">--}}
{{--                                @foreach($errors->all() as $error)--}}
{{--                                    <li>{{$error}}</li>--}}
{{--                                @endforeach--}}
{{--                            </ul>--}}
{{--                        @endif--}}


                       {{-- <form method="post" action="{{route('task.store')}}">
                            @csrf
                            <label class="w-100">
                                Title
                                <input type="text" name="title" class="form-control" placeholder="Enter Title">
                            </label>
                            <label class="w-100 mt-3">
                                Description
                                <textarea name="description" class="form-control"
                                          placeholder="Enter Description"></textarea>
                            </label>
                            <label class="w-100 mt-3">
                                Select Status
                                <select name="status" class="form-select">
                                    <option value="1">Active</option>
                                    <option value="0">Inactive</option>
                                </select>
                            </label>
                            <label class="w-100 mt-3">
                                Select Deadline
                                <input type="date" name="deadline" class="form-control" placeholder="Select Deadline">
                            </label>
                            <label class="w-100 mt-3">
                                Select User
                                <select name="user_id" class="form-select">
                                    @foreach($users as $id=>$user)
                                        <option value="{{$id}}">{{$user}}</option>
                                    @endforeach
                                </select>

                            </label>
                            <button type="submit" class="btn btn-success mt-3">Create New Task
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection --}}

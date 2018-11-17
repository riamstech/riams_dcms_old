@extends('layouts.admin')

@section('content')
<h1>Users</h1>

<header id="main-header" class="py-2 bg-primary text-white">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h4><i class="fa fa-user"></i> Patients</h4>
            </div>
        </div>
    </div>
</header>

<!-- ACTIONS -->
<section id="action" class="py-4 mb-4 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <a href="#" class="btn btn-primary btn-block" data-toggle="modal" data-target="#addPatientsModal">
                    <i class="fa fa-user-circle"></i> Add Patient
                </a>
            </div>


        </div>
        <div class="row">

            <div class="col-md-5 ml-auto">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search">
                    <span class="input-group-btn">
              <button class="btn btn-primary">Search</button>
            </span>
                </div>
            </div>
        </div>
    </div>

    <section id="posts">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            <h6>Patient details</h6>
                        </div>
                        <table class="table table-striped">
                            <thead class="thead-inverse">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Status</th>
                                <th>Created</th>
                                <th>Updated</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @if($users)
                                @foreach($users as $user)
                                    <tr>
                                     <td>{{$user->id}}</td>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>{{$user->role ? $user->role->name : 'User has no role'}}</td>
                                        <td>{{$user->is_active == 1 ? 'Active' : 'Not Active' }}</td>
                                        <td>{{$user->created_at->diffForHumans()}}</td>
                                        <td>{{$user->updated_at->diffForHumans()}}</td>


                                    </tr>
                                    @endforeach
                              @endif
                            </tbody>
                        </table>

                        <nav class="ml-4">
                            <ul class="pagination">
                                <li class="page-item disabled"><a href="#" class="page-link">Previous</a></li>
                                <li class="page-item active"><a href="#" class="page-link">1</a></li>
                                <li class="page-item"><a href="#" class="page-link">2</a></li>
                                <li class="page-item"><a href="#" class="page-link">3</a></li>
                                <li class="page-item"><a href="#" class="page-link">Next</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>

@stop

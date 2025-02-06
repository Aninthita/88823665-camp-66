@extends('layouts.default_with_menu')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <div class="card-header">
                    <h3 class="card-title">User Table</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-bordered table-striped table-hover" style="background-color: #f9f9f9;">
                        <thead style="background-color: #343a40; color: white;">
                            <tr>
                                <th style="width: 20">#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th style="width: 200px; text-align: center;"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $index => $user)
                                <tr class="align-middle" style="background-color: {{ $index % 2 == 0 ? '#e9ecef' : '#ffffff' }};">
                                    <td>{{ $index + 1 }}.</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td class="text-center">
                                        <a href="{{ url('/user/' . $user->id) }}" class="btn btn-warning btn-sm" data-toggle="tooltip" title="Edit">
                                            Edit
                                        </a>
                                        <form action="/user" method="post" style="display: inline;" class="d-inline-block">
                                            @csrf
                                            @method('delete')
                                            <input type="hidden" name="id" value="{{ $user->id }}">
                                            <button type="submit" class="btn btn-danger btn-sm" data-toggle="tooltip" title="Delete">
                                                Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
                <div class="card-footer clearfix">
                    <ul class="pagination pagination-sm m-0 float-end">
                        <li class="page-item">
                            <a class="page-link" href="#">&laquo;</a>
                        </li>
                        <li class="page-item active">
                            <a class="page-link" href="#">1</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">3</a>
                        </li>
                      <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                    </ul>
                  </div>
                </div>
                <!-- /.card -->
              </div>
        </div>
@endsection
@extends('layouts.app', ['page' => __('Admin Users'), 'pageSlug' => 'users'])

@section('content')
    <div class="col-md-12">
        <div class="card ">
            <div class="card-header">
                <div class="row">
                    <div class="col-8">
                        <h4 class="card-title">Users</h4>
                    </div>
                    <div class="col-4 text-right">
                    </div>
                </div>
            </div>
            <div class="card-body">

                <div class="">

                    <table class="table " id="">
                        <thead class=" text-primary">
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Creation Date</th>
                                <th scope="col">Active</th>
                                <th scope="col">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->created_at }}</td>
                                    <td>
                                        <form method="POST" action="{{ route('user.update', ['user' => $user->id, 'status' => $user->status]) }}">
                                            @csrf
                                            @method('PUT')
                                            @if ($user->status == '1')
                                                <button type="submit" class="btn btn-success btn-sm">Enabled</button>
                                            @else
                                                <button type="submit" class="btn btn-warning btn-sm">Disabled</button>
                                            @endif
                                        </form>
                                    </td>
                                    <td>
                                        <form action="{{ route('user.destroy', $user->id) }}" method="POST" id="delete-form-{{ $user->id }}">
                                            @csrf
                                            @method('DELETE')
                                            <button type="button" class="btn btn-link text-danger" data-toggle="modal" data-target="#confirm-delete-{{ $user->id }}" >
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                <div class="modal fade" id="confirm-delete-{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="confirm-delete-label" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="confirm-delete-label">Confirm Delete</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                Are you sure you want to delete this user?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                <button type="submit" class="btn btn-danger" form="delete-form-{{ $user->id }}">Delete</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
            <div class="card-footer py-4">
                <div class="row">
                    <div class="col-md-6">
                        Total Users: {{ $users->total() }}
                    </div>
                    <div class="col-md-6">
                        <div class="float-right">
                            <ul class="pagination" style="margin-top: 0px">
                                <li class="page-item {{ $users->onFirstPage() ? 'disabled' : '' }}">
                                    <a href="{{ $users->previousPageUrl() }}" class="page-link pagination-btn"
                                        data-turbolinks-track="false"><<</a>
                                </li>
                                @for ($i = 1; $i <= $users->lastPage(); $i++)
                                    <li class="page-item {{ $users->currentPage() == $i ? 'active' : '' }}">
                                        <a href="{{ $users->url($i) }}" class="page-link pagination-btn"
                                            data-turbolinks-track="false">{{ $i }}</a>
                                    </li>
                                @endfor
                                <li class="page-item {{ $users->currentPage() == $users->lastPage() ? 'disabled' : '' }}">
                                    <a href="{{ $users->nextPageUrl() }}" class="page-link pagination-btn"
                                        data-turbolinks-track="false">>></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


{{-- <tbody>
                            <tr>
                                <td>Admin Admin</td>
                                <td>
                                    <a href="mailto:admin@black.com">admin@black.com</a>
                                </td>
                                <td>24/02/2020 16:47</td>
                                <td class="text-right">
                                    <div class="dropdown">
                                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                            <a class="dropdown-item" href="#">Edit</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody> --}}

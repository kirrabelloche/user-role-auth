@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h2>Listes des utilisateurs</h2></div>
                <br>
                <div class="col-md-2">
                    <a href="{{route('admin.users.create')}}" class="btn btn-primary btn-lg"> Create New User</a>
                </div>
<br>
                <div class="row">
                  <div class="col-md-12">

                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col"># </th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Role</th>
                            <th scope="col">Actions</th>
                          </tr>
                        </thead>
                        <tbody>

                            @foreach ($users as $user )
                            <tr>
                                <th scope="row">{{ $user->id }}</th>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ implode(' ,  ', $user->roles()->get()->pluck('name')->toArray()) }}</td>
                                <td>
                                  @can('edit-users')


                                            <a href=" {{ route('admin.users.edit',$user->id) }} " ><button class="btn btn-primary btn-block">Edit</button> </a>


                                    @endcan
                                   </td>
                                   <td>
                                  @can('delete-users')

                                    <form  action="{{ route('admin.users.destroy',$user->id) }}" method="DELETE"  class="bb"
                                      style=" position: relative; ">

                                      {{ csrf_field() }}
                                        <button class="btn btn-danger btn-block" type="submit">DELETE</button>
                                    </form>


                                    @endcan

                                </td>
                              </tr>

                            @endforeach


                        </tbody>
                      </table>



                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

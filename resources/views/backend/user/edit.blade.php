@extends('backend.layouts.app')

@section('title','Update User')

@section('breadcrumb')
<li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
<li class="breadcrumb-item"><a href="{{route('admin.user.index')}}">User</a></li>
<li class="breadcrumb-item active" aria-current="page"><span>Update</span></li>
@endsection

@section('style')
    <style>
      .tabelbox {
    border-radius: 5px;
    background: #0e1726;
}
    </style>
@endsection
@section('content')



<!--  BEGIN CONTENT AREA  -->
<div id="content" class="main-content">
    <div class="layout-px-spacing ">

        <div class="row mt-5">
            <div class="col-lg-12 ">
              <div class=" d-flex justify-content-between p-3 statbox tabelbox box box-shadow">
                <h4>Update User Role</h4>


              </div>

            </div>


        </div>
        <div class="row layout-top-spacing" id="cancel-row">


            <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                <div class="widget-content widget-content-area br-6">
                    <table id="zero-config" class="table dt-table-hover" style="width:100%">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Role</th>
                                <th>User Name</th>
                                <th>Email</th>
                                <th class="no-content">Actions</th>
                            </tr>
                        </thead>
                        <tbody >

                            <tr>
<form action="{{route('admin.user.update',$user->id)}}" method="post">
@csrf
@method('PUT')
                                <td>{{$user->name}}</td>
                                <td>

                                    {{-- {{$user->role->name}} --}}
                                    <select name="role_id" class='form-control' id="">
                                        @foreach ($roles as $role)

                                        <option value="{{$role->id}}" {{$role->id==$user->role_id ? 'selected' :'' }} >{{$role->name}}</option>
                                        @endforeach
                                    </select>
                                </td>
                                <td>{{$user->user_id}}</td>
                                <td>{{$user->email}}</td>
                                <td>

                                  <button class="btn btn-primary btn-sm" type="submit">Update</button>

                                </td>
                            </form>
                            </tr>

                        </tbody>

                    </table>
                </div>
            </div>

        </div>

    </div>

</div>
<!--  END CONTENT AREA  -->


@endsection

@section('script')

@endsection

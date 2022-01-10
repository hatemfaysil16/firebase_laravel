@extends('firebase.app')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-12">


           @if (@session['status'])
            <h4 class="alert alert-warning mb-2">{{ session('status') }}</h4>
           @endif

            <div class="card">
                <div class="card-header">
                    <h4>
                        Contact List
                        <a href="{{ url('add-contact') }}" class="btn btn-sm btn-primary float-end">Add Contact</a>
                    </h4>
                </div>
                <div class="card-body">


                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>First Name</th>
                                <th>last Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                    <tbody>
                        <tr>
                           @php
                           $i=1;
                           @endphp
                           @forelse ($contacts as $key=>$item)
                           <tr>
                             <td>{{ $i }}</td>
                             <td>{{ $item['fname'] }}</td>
                             <td>{{ $item['email'] }}</td>
                             <td>{{ $item['last_name'] }}</td>
                             <td>{{ $item['phone'] }}</td>
                             <td><a href="" class="btn btn-sm btn-success">Edit</a></td>
                             <td><a href="" class="btn btn-sm btn-danger">Delete</a></td>
                           </tr>
                           @empty
                           <tr>
                            <td colspan="7">No Record Found</td>
                          </tr>
                        </tr>
                        @endforelse

                    </table>

                    </tbody>



                </div>
            </div>




        </div>
    </div>
</div>

@endsection

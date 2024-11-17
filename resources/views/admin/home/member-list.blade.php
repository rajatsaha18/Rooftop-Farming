@extends('admin.layouts.master')
@section('content')
<section class="py-5">
    <div class="container">
        <a href="{{ route('home') }}" class="btn btn-success">Home</a>
        <div class="row">
            <div class="col-md-12">
                <div class="card card-body">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Status</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($members as $member)
                            <tr>
                                <th scope="row">1</th>
                                <td>{{ $member->name }}</td>
                                <td>{{ $member->email }}</td>
                                <td>{{ $member->status }}</td>
                                <td>
                                    <a href="{{ route('memberlist.edit',$member->id) }}" class="btn btn-info">Edit</a>
                                </td>

                            @endforeach

                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

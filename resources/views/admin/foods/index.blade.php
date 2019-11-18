@extends('layouts.app')

@section('page_heading')
Food List
@endsection

@section('content')
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive table-hover">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Sn</th>
                        <th>Food </th>
                        <th>Price</th>
                        <th>Description</th>
                        {{-- <th>Start date</th>
                  <th>Salary</th> --}}
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Sn</th>
                        <th>Food </th>
                        <th>Price</th>
                        <th>Description</th>
                        {{-- <th>Start date</th>
                  <th>Salary</th> --}}
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($foods as $food)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$food->name}}</td>
                        <td>{{$food->rate}}</td>
                        <td>{{$food->description}}</td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
{{-- <table class="table bordered">
    <thead>
        <tr>
            <th>Sn</th>
            <th>Name</th>
            <th>Price</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>

    </tbody>
</table> --}}

@endsection
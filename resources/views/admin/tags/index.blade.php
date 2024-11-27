@extends('layouts.admin')

@section('content')
<div class="container" style="margin-left: 320px">
    <div class="row">
        <div class="col-8">
            <table class="table table-bordered">
                <a href="{{ route('dashboard.tags.create') }}" class="btn btn-primary">Create</a>
                <br>
                <br>
                <thead>
                  <tr>
                    <th style="width: 10px">id</th>
                    <th>name_uz</th>
                    <th>name_en</th>
                    <th>holati</th>

                  </tr>
                </thead>
                <tbody>
             @foreach ($tags as $ctg )
             <tr>
                <td>1.</td>
                <td>{{ $ctg->name_uz }}</td>
                <td>{{ $ctg->name_en }}</td>
                <td>
                    <a href="#" class="btn btn-primary">update</a>
                    <a href="#" class="btn btn-danger">delete</a>
                </td>

              </tr>
             @endforeach

                </tbody>
              </table>
        </div>
    </div>
</div>
@endsection



@extends('layouts.admin')

@section('content')
<div class="container" style="margin-left: 320px">
    <div class="row">
        <div class="col-8">
            <table class="table table-bordered">
                <a href="{{ route('dashboard.categoris.create') }}" class="btn btn-primary">Create</a>
                <br>
                <br>
                <thead>
                  <tr>
                    <th style="width: 10px">id</th>
                    <th>name_uz</th>
                    <th>name_en</th>
                    <th>slug</th>
                    <th>meta_title</th>
                    <th>meta_description</th>
                    <th>meta_keyword</th>
                    <th>holati</th>

                  </tr>
                </thead>
                <tbody>
             @foreach ($category as $ctg )
             <tr>
                <td>1.</td>
                <td>{{ $ctg->name_uz }}</td>
                <td>{{ $ctg->name_en }}</td>
                <td>{{ $ctg->slug }}</td>
                <td>{{ $ctg->meta_title }}</td>
                <td>{{ $ctg->meta_descritption	 }}</td>
                <td>{{ $ctg->meta_keywords }}</td>
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



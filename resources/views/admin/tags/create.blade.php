@extends('layouts.admin')


@section('content')
<div class="container" style="margin-left: 320px">
    <div class="row">
        <div class="col-8">
            <form  action="{{ route('dashboard.tags.store') }}" method="POST">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">name_uz</label>
                    <input type="text" name="name_uz" class="form-control" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">name_en</label>
                    <input type="text"  name="name_en" class="form-control" >
                  </div>

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
        </div>
    </div>
</div>

@endsection

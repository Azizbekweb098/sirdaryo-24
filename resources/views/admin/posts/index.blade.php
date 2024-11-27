@extends('layouts.admin')

@section('content')
<div class="container" style="margin-left: 320px">
    <div class="row">
        <div class="col-8">
            <table class="table table-bordered">
                <a href="{{ route('dashboard.posts.create') }}" class="btn btn-primary">Create</a>
                <br>
                <br>
                <thead>
                  <tr>
                    <th style="width: 10px">id</th>
                    <th>title_uz</th>
                    <th>title_en</th>
                    <th>image</th>
                    <th>slug</th>
                    <th>body_uz</th>
                    <th>body_en</th>
                    <th>category</th>
                    <th>tag</th>
                    <th>holati</th>

                  </tr>
                </thead>
                <tbody>
             @foreach ($posts as $post )
             <tr>
                <td>1.</td>
                <td>{{ $post->title_uz }}</td>
                <td>{{ $post->title_en }}</td>
                <td><img src="/images/{{ $post->image }}" alt=""></td>
                <td>{{ $post->slug }}</td>
                <td>{{ $post->body_uz }}</td>
                <td>{{ $post->body_en }}</td>
                <td>{{ $post->category ? $post->category->name_uz : 'No category' }}</td>
                <td>
                    @foreach ($post->tags as $tag)
                        <span>{{ $tag->name_uz }}</span>@if(!$loop->last), @endif
                    @endforeach
                </td>


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



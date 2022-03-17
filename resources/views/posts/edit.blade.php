@extends('layouts.app')

@section('title', 'Изменение поста '.$post->id)
 
@section('content')
<div class="row">

    <div class="col-lg-6 mx-auto">

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif  

<form method="post" action="{{ route('posts.update',$post) }}">
    @csrf
    @method('patch')
    <div class="form-group">
      <label for="post-title">Название</label>
      <input type="text" name="title" class="form-control" id="post-title" value="{{ $post->title }}">
    </div>
    <div class="form-group">
      <label for="post-description">Описание</label>
      <textarea class="form-control" name="description" id="post-description" rows="3">{{ $post->description }}</textarea>
    </div>
    <div class="form-group">
        <label for="post-price">Цена</label>
        <input type="text" name="price" class="form-control" id="post-price" value="{{ $post->price }}">
      </div>
    <button type="submit" class="btn btn-success mt-3">Отредактировать пост</button>
  </form>
    </div>  
</div>
@endsection
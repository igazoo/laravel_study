@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">Dashboard</div>

        <div class="card-body">
          @if (session('status'))
          <div class="alert alert-success" role="alert">
            {{ session('status') }}
          </div>
          @endif

          show
          {{$contact->your_name}}
          {{$contact->title}}
          {{$contact->email}}
          {{$gender}}
          {{$age}}


          <form  action="{{route('contact.edit',['id' => $contact->id])}}" method="get">
            @csrf

            <input class="btn btn-info" type="submit" value="編集する">
          </form>

          <form  action="{{route('contact.destroy',['id' => $contact->id])}}" method="post" id ="delete_{{$contact->id}}">
            @csrf
            <a href="#" class="btn btn-danger" data-id="{{$contact->id}}" onclick="deletePost(this);">削除する</a>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>


<script>
<!--
/*******

削除ボタンを押して一旦jsで確認メッセージを出す

*******/
//-->>
  function deletePost(e){
    'user strict';
    if(confirm('本当に削除してもいいですか？')){
      document.getElementById('delete_' + e.dataset.id).submit();
    }
  }
</script>
@endsection

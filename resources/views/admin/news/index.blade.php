@extends('layouts.admin')
@section('title', '登録済みニュースの一覧')

@section('content')
        <div class="container">
            <div class="row">
                <h2>ニュース一覧</h2>
            </div>
            <div class="row">
                <div class="col-md-4">
                   <a href="{{ action('Admin\NewsController@add') }}" role="button" class="btn btn-primary">新規作成</a> 
                </div>
                <div class="col-md-8">
                    <form action="{{ action('Admin\NewsController@index') }}" method="get">
                        <div class="from-group row">
                            <label class="col-md-2">タイトル</label>
                            <div class="col-md-8">
                                <input type="text" class="from-control" name="cond_title" value="{{ $cond_title }}">
                            </div>
                            <div class="col-md-2">
                                {{ csrf_field() }}
                                <input type="submit" class="btn btn-primary" value="検索">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="list-news col-md-12 mx-auto">
                    <div class="row">
                        <teble class="table table-dark">
                            <thead>
                                <tr>
                                    <th width="10%">ID</th>
                                    <th width="20%">タイトル</th>
                                    <th width="50%">本文</th>
                                </tr>
                            </thead>
                            <today>
                                @foreach($posts as $news)
                                <tr>
                                    <tr>{{ $news->id }}</tr>
                                    <td>{{ \Str::limit($news->title, 100) }}</td>
                                    <td>{{ \Str::limit($news->body, 250) }}</td>
                                </tr>
                                @endforeach
                            </today>
                        </teble>
                    </div>
                </div>
            </div>
        </dev>
    @endsection








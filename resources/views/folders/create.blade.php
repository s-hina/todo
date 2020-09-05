@extends('layouts.layout')
@section('title', 'フォルダの作成')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col col-md-offset-3 col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">フォルダを追加する</div>
                    <div class="panel-body">
                        <form action="{{ route('folders.create') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="title">フォルダ名</label>
                                <input type="text" class="form-controll" name="title" id="title">
                            </div>
                            <div class="text-right">
                                <button type="submit" class="btn btn-primary">送信</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection
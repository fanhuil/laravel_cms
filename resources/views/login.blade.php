@extends('layouts.default')
@section('content')
    <div class="card">
        <div class="card-header">用户登录</div>
        <div class="card-body">
            <form action="/login/store" method="post">
                @csrf
                <div class="form-group">
                    <label for="">邮箱</label>
                    <input type="text" class="form-control" name="email" value="{{old('email')}}">
                </div>
                <div class="form-group">
                    <label for="">密码</label>
                    <input type="password" class="form-control" name="password">
                </div>
                <div class="card-footer text-muted">
                    <button type="submit" class="btn btn-success" >登录</button>
                </div>
            </form>
        </div>
    </div>
@endsection

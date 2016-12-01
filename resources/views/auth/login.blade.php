@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    登录
                </div>

                <div class="panel-body">
                    <!-- Display Validation Errors -->
                @include('common.errors')

                <!-- New Task Form -->
                    <form action="/auth/login" method="POST" class="form-horizontal">
                    {{ csrf_field() }}

                    <!-- E-Mail Address -->
                        <div class="form-group">
                            <label for="email" class="col-sm-3 control-label">邮箱</label>

                            <div class="col-sm-6">
                                <input type="email" name="email" class="form-control" value="{{ old('email') }}">
                            </div>
                        </div>

                        <!-- Password -->
                        <div class="form-group">
                            <label for="password" class="col-sm-3 control-label">密码</label>

                            <div class="col-sm-6">
                                <input type="password" name="password" class="form-control">
                            </div>
                        </div>

                        <!-- Login Button -->
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                <button type="submit" class="btn btn-default">
                                    登录
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
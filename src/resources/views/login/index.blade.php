@extends('layouts.base')

@section('title')
Вход
@endsection

@section('content')

<div class="container text-center">
    <p class="login_title">Авторизация</p>
    
</div>
<div class="login_background">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 col-lg-5">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('login.store')}}" method="POST">
                            <div class="mb-3">
                                <div class="d-flex align-items-center justify-content-end">
                                <label class="login_form_email_label required">Почта:</label>
                                <input class="form-control login_form_email_input" type="email" name="email" id="" autofocus></div>
                            </div>
                            <div class="mb-3">
                                <div class="d-flex align-items-center justify-content-end">
                                <label class="login_form_password_label required">Пароль:</label>
                                <input class="form-control login_form_password_input" type="password" name="password" id=""></div>
                            </div>
                            <button type="submit" class="btn ">Войти</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
          
                
@endsection
@extends('layouts.app')
@section('title', 'الملف الشخصي')
@section('content')
    <div class="row">
        <div class="col-md-6 mx-auto">
            {{-- @if (session()->has('success'))
                <div class="alert alert-success">
                    <p><i>"{{ session()->get('success') }}"</i></p>
                </div>
            @endif --}}
            <div class="card p-5">
                <div class="text-center">{{--  --}}
                    <img src="{{ asset('storage/' . auth()->user()->image) }}" alt="{{ 'my profile image' }}"
                        class="profile-image" width="164" height="164">
                    <h1 class="mt-4">{{ auth()->user()->name }}</h1>
                    <div class="card-body text-right" dir="rtl" style="text-align: right!important">
                        <form action="/profile" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <p class="
                            form-group" class="text-right" dir="rtl">
                                <label class="form-label" for="name">الإسم</label>
                                <input type="text" class="name form-control" name="name" id="name"
                                    value="{{ auth()->user()->name }}">
                                @error('name')
                                <div class="text-danger">
                                    <small> {{ $message }}</small>
                                </div>
                            @enderror
                            </p>
                            <p class="form-group">
                                <label class="form-label" for="email">البريد الإلكتروني</label>
                                <input type="email" class="email form-control" name="email" id="email"
                                    value="{{ auth()->user()->email }}" dir="ltr">
                                @error('email')
                                <div class="text-danger">
                                    <small> {{ $message }}</small>
                                </div>
                            @enderror
                            </p>
                            <p class="form-group">
                                <label class="form-label" for="password">كلمة المرور</label>
                                <input type="password" class="password form-control" onclick="myFunction()" name="password"
                                    dir="ltr" id="password">
                                @error('password')
                                <div class="text-danger">
                                    <small> {{ $message }}</small>
                                </div>
                            @enderror
                            </p>
                            <p class="form-group">
                                <label class="form-label" for="password_confirmation">تأكيد كلمة المرور</label>
                                <input type="password" class="password_confirmation form-control" onclick="myFunction()"
                                    name="password_confirmation" dir="ltr" id="password_confirmation">
                                @error('password_confirmation')
                                    {{ $message }}
                                @enderror
                            </p>
                            <p class="input-group m-0">
                            <div class="m-0 p-0"><label for="image" class="form-label d-block">تغيير الصورة
                                    الشخصية</label></div>
                            <input class="form-control" name="image" id="image" type="file">
                            @error('image')
                                <div class="text-danger">
                                    <small> {{ $message }}</small>
                                </div>
                            @enderror
                            </p>
                            <p class="form-group d-flex mt-5 gap-2 flex-row-reverse">
                                <button type="submit" class="btn btn-primary mt-2">حفظ التعديلات</button>
                                <button type="submit" class="btn btn-light mt-2" form="logout">تسجيل الخروج</button>
                            </p>
                        </form>
                        <form id="logout" action="logout" method="POST">@csrf</form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

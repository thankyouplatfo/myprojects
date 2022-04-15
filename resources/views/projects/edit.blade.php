@extends('layouts.app')

@section('title', 'تعديل المشروع')

@section('content')
    <div class="row justify-content-center text-right">
        <div class="col-8">
            <div class="card p-5">
                <h1 class="text-center pd-3 font-weight-bold">
                    تعديل المشروع
                </h1>
                <form action="/projects/{{ $project->id }}" method="POST" dir="rtl">
                    @csrf
                    @method("PATCH")
                    @include('projects.form')
                    <div class="mt-3 d-flex flex-row-reverse">
                        <button type="submit" class="btn btn-primary">تعديل</button>
                        <a href="projects/" type="submit" class="btn btn-light">إلغاء</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

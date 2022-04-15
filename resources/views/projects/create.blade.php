@extends('layouts.app')

@section('title', 'إنشاء مشروع جديد')

@section('content')
    <div class="row justify-content-center text-right">
        <div class="col-8">
            <div class="card p-5">
                <h1 class="text-center pd-3 font-weight-bold"">
                        مشروع جديد
                    </h1>
                    <form action=" /projects" method="POST" dir="rtl">
                    @include('projects.form', ['project' => new \App\Models\Project()])
                    <div class="mt-3 d-flex flex-row-reverse">
                        <button type="submit" class="btn btn-primary">إنشاء</button>
                        <a href="/projects" type="submit" class="btn btn-light">إلغاء</a>
                    </div>
                    </form>
            </div>
        </div>
    </div>
@endsection

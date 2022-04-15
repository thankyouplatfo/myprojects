@extends('layouts.app')
@section('content')
    <header class="d-flex d-flex-row justify-content-between align-item-center" dir="rtl">
        <h1 class="h1 text-dark ">{{ $project->title }}</h1>
        <a href="/projects/{{ $project->id }}/edit" class="btn fs-4 bg-primary text-white">تعديل المشروع</a>
    </header>
    <section class="d-flex text-right mt-3 gap-3" dir="rtl">
        <div class="col-lg-4">
            {{-- Project Des --}}
            <div class="card">
                <div class="card-body">
                    <div class="status mb-2">
                        @switch($project->status)
                            @case(1)
                                <span class="badge fs-6 bg-success">مكتمل</span>
                            @break

                            @case(2)
                                <span class="badge fs-6 bg-danger">ملغى</span>
                            @break

                            @default
                                <span class="badge fs-6 bg-warning text-black">قيد الإنجاز</span>
                        @endswitch
                    </div>
                    <h2 class="h4 card-title"><a href="/projects/{{ $project->id }}">{{ $project->title }}</a>
                    </h2>
                    <p class="h6 card-subtitle mb-2 text-muted ">{{ $project->created_at->diffForHumans() }}</p>
                    <p class="card-text">{{ $project->description }}</p>
                    @include('projects.footer')
                </div>
            </div>
            <div class="card mt-2">
                <div class="card-body">
                    <h2 class="h4 card-title">حالة المشروع</h2>
                    <form method="post">
                        @csrf
                        @method('PATCH')
                        <select class="custom-select form-control status" name="status" id="status"
                            onchange="this.form.submit()">
                            <option value="0" {{ $project->status == 0 ? 'selected' : '' }}>قيد الإنجاز</option>
                            <option value="1" {{ $project->status == 1 ? 'selected' : '' }}>مكتمل</option>
                            <option value="2" {{ $project->status == 2 ? 'selected' : '' }}>ملغي </option>
                        </select>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-8">
            {{-- Tasks --}}
            @foreach ($project->tasks as $task)
                <div class="card mb-3">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <div class="col-lg-1 d-flex justify-content-center align-items-center">
                            <div class="">
                                <form action="/projects/{{ $project->id }}/tasks/{{ $task->id }}" method="POST">
                                    @csrf
                                    @method("PATCH")
                                    <input class="done form-check-input ml-4 fs-3" name="done" id="done" type="checkbox"
                                        {{ $task->done ? 'checked' : '' }} onchange="this.form.submit()">
                                </form>
                            </div>
                        </div>
                        <div class=" col-lg-10 {{ $task->done ? 'checked' : '' }}">
                            {{ $task->body }}
                        </div>
                        <div class="col-lg-1 d-flex justify-content-center align-items-center">
                            <form action="/projects/{{ $task->project_id }}/tasks/{{ $task->id }}" method="POST"
                                class="text-left">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger d-inline-block align-start"><i
                                        class="bi bi-trash"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="card bg-light border-0">
                <form action="/projects/{{ $project->id }}/task" method="POST"
                    class="d-flex justify-content-between gap-2">
                    @csrf
                    <input type="text" class="form-control body p-2 ml-2" name="body" id="body" placeholder="أضف مهمة جديدة"
                        autofocus>
                    <button class="btn btn-primary">إضافة</button>
                </form>
            </div>
        </div>

    </section>
@endsection

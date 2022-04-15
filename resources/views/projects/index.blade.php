@extends('layouts.app')
@section('title', 'الرئيسية')
@section('content')
    <header class="d-flex justify-content-between align-item-center" dir="rtl">
        <h2 class="h2 text-dark">المشاريع</h2>
        <a href="/projects/create" class="btn fs-4 bg-primary text-white">مشروع جديد</a>
    </header>
    <section>
        <div class="row mt-3" dir="rtl">
            @forelse ($projects as $project)
                <div class="col-lg-4">
                    <div class="card mt-2">
                        <div class="card-body" id="card-body-index-page" style="height: 185px;">
                            <div class="status">
                                @switch($project->status)
                                    @case(0)
                                        <span class="badge fs-6 bg-warning text-black">قيد الإنجاز</span>
                                    @break

                                    @case(1)
                                        <span class="badge fs-6 bg-success">مكتمل</span>
                                    @break

                                    @default
                                        <span class="badge fs-6 bg-danger">ملغي</span>
                                @endswitch
                            </div>
                            <a href="projects/{{ $project->id }}">
                                <h3 class="card-title cnsb-large">{{ $project->title }}</h3>
                            </a>
                            <h6 class="card-subtitle mb-2 text-muted ">{{ $project->created_at->diffForHumans() }}</h6>
                            <p class="card-text" style="height: 75px!important">
                                {{ Str::limit($project->description, 150, '...') }}</p>

                        </div>
                        @include('projects.footer')
                    </div>
                </div>
                @empty
                    <div class="m-auto justify-content-center text-center">
                        <p>لوحة العمل خالية من المشاريع</p>
                        <div class="mt-5">
                            <a href="projects/create" class="btn bg-primary fs-4 text-white">أنشئ مشروع جديد</a>
                        </div>
                    </div>
                @endforelse
            </div>
        </section>
    @endsection

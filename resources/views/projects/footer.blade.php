<footer class="card-footer d-flex justify-content-around" dir="rtl">
    <div class="d-flex gap-3">
        <div class="d-flex align-items-center text-center">
            <i class="bi bi-clock-history"></i>
            <div style="margin-right: 10px">
                {{ $project->created_at->diffForHumans() }}
            </div>
        </div>
        <div class="d-flex align-items-center text-center">
            <i class="bi bi-list-ul"></i>
            <div style="margin-right: 10px">
                {{count($project->tasks)}}
            </div>
        </div>
        <div class="d-flex align-items-center text-center">
            <form action="/projects/{{ $project->id }}" method="POST" class="text-left">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger d-inline-block align-start"><i
                        class="bi bi-trash"></i></button>
            </form>
        </div>
    </div>
</footer>

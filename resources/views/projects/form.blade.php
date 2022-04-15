@csrf
<div class="form-group mt-2">
    <label class="form-label h5" for="exampleInputtitle1">عنوان المشروع</label>
    <input name="title" class="form-control" id="exampleInputtitle1" aria-describedby="titleHelp"
        placeholder="أدخل عنوان المشروع هنا" value="{{ $project->title}}">
    @error('title')
        <div class="text-danger">
            <small>{{ $message }}</small>
        </div>
    @enderror
</div>
<div class="form-group mt-2">
    <label class="form-label h5" for="exampleInputdescription1">وصف المشروع</label>
    <textarea name="description" class="form-control" id="exampleInputdescription1" placeholder="أدخل وصف المشروع هنا"
        cols="30" rows="10">{{ $project->description}}</textarea>
    @error('description')
        <div class="text-danger">
            <small>{{ $message }}</small>
        </div>
    @enderror
</div>

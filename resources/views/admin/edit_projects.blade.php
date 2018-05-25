@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form class="form-horizontal" role="form" action="{{ route('project_edit', $projects->id) }}" method="POST">
    <div class="form-group">
        <label for="name_en" class="col-sm-2 control-label">Name</label>
        <div class="col-sm-10">
            <input type="text" name="name_en" placeholder="Name" required="required" class="form-control" id="name_en" value="{{ $projects->name_en }}">
        </div>
    </div>
    <div class="form-group">
        <label for="name_am" class="col-sm-2 control-label">Name Am</label>
        <div class="col-sm-10">
            <input type="text" name="name_am" placeholder="Name Am" required="required" class="form-control" id="name_am" value="{{ $projects->name_am }}">
        </div>
    </div>
    <div class="form-group">
        <label for="name_ru" class="col-sm-2 control-label">Name Ru</label>
        <div class="col-sm-10">
            <input type="text" name="name_ru" placeholder="Name Ru" required="required" class="form-control" id="name_ru" value="{{ $projects->name_ru }}">
        </div>
    </div>
    <div class="form-group">
        <label for="description_en" class="col-sm-3 control-label">Description</label>
        <div class="col-sm-9">
            <textarea name="description_en" class="form-control" rows="3" placeholder="Description" required="required" id="description_en">{{ $projects->description_en }}</textarea>
        </div>
    </div>

    <div class="form-group">
        <label for="description_am" class="col-sm-3 control-label">Description Am</label>
        <div class="col-sm-9">
            <textarea name="description_am" class="form-control" rows="3" placeholder="Description Am" required="required" id="description_am">{{ $projects->description_am }}</textarea>
        </div>
    </div>
    <div class="form-group">
        <label for="description_ru" class="col-sm-3 control-label">Description Ru</label>
        <div class="col-sm-9">
            <textarea name="description_ru" class="form-control" rows="3" placeholder="Description Ru" required="required" id="description_ru" >{{ $projects->description_ru }}</textarea>
        </div>
    </div>
    {{ csrf_field() }}
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </div>
</form>
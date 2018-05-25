@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@if(session('status'))
    <p class="alert alert-success">{{ session('status') }}</p>
@endif
<form class="form-horizontal" role="form" action="{{ route('addprojects') }}" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label for="name_en" class="col-sm-3 control-label">Name</label>
        <div class="col-sm-9">
            <input type="text" name="name_en" placeholder="Name" required="required" class="form-control" id="name_en">
        </div>
    </div>
    <div class="form-group">
        <label for="name_am" class="col-sm-3 control-label">Name Am</label>
        <div class="col-sm-9">
            <input type="text" name="name_am" placeholder="Name Am" required="required" class="form-control" id="name_am">
        </div>
    </div>
    <div class="form-group">
        <label for="name_ru" class="col-sm-3 control-label">Name Ru</label>
        <div class="col-sm-9">
            <input type="text" name="name_ru" placeholder="Name Ru" required="required" class="form-control" id="name_ru">
        </div>
    </div>
    <div class="form-group">
        <label for="app_img" class="col-sm-3 control-label ">Projects img</label>
        <div class="col-sm-9">
            <div>
                <input type="file" name="img[]"  required="required" class="form-control"  id="app_img" multiple >
            </div>
        </div>
    </div>
    <div class="form-group">
        <label for="description_en" class="col-sm-3 control-label">Description</label>
        <div class="col-sm-9">
            <textarea name="description_en" class="form-control" rows="3" placeholder="Description" required="required" id="description_en"></textarea>
        </div>
    </div>

    <div class="form-group">
        <label for="description_am" class="col-sm-3 control-label">Description Am</label>
        <div class="col-sm-9">
            <textarea name="description_am" class="form-control" rows="3" placeholder="Description" required="required" id="description_am"></textarea>
        </div>
    </div>
    <div class="form-group">
        <label for="description_ru" class="col-sm-3 control-label">Description Ru</label>
        <div class="col-sm-9">
            <textarea name="description_ru" class="form-control" rows="3" placeholder="Description" required="required" id="description_ru" ></textarea>
        </div>
    </div>

    {{ csrf_field() }}
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10" style="text-align: center;">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </div>
</form>


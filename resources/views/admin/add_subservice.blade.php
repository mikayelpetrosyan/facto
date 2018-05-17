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
<form class="form-horizontal" role="form" action="{{ route('addsubservice') }}" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label for="category" class="col-sm-3 control-label">Subcategory</label>
        <div class="col-sm-9">
            <select class="form-control selectpicker" required="required" name="services_id" id="category" value="{{ old('category') }}">
                <option value="">-- Select--</option>
                @foreach ($services as $service)
                    <option value="{{ $service->id }}">{{ $service->name_en }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="form-group">
        <label for="title_en" class="col-sm-3 control-label">Title</label>
        <div class="col-sm-9">
            <input type="text" name="title_en" placeholder="Title" required="required" class="form-control" id="title_en">
        </div>
    </div>
    <div class="form-group">
        <label for="title_am" class="col-sm-3 control-label">Title Am</label>
        <div class="col-sm-9">
            <input type="text" name="title_am" placeholder="Title" required="required" class="form-control" id="title_am">
        </div>
    </div>
    <div class="form-group">
        <label for="title_ru" class="col-sm-3 control-label">Title Ru</label>
        <div class="col-sm-9">
            <input type="text" name="title_ru" placeholder="Title" required="required" class="form-control" id="title_ru">
        </div>
    </div>
    <div class="form-group">
        <label for="app_img" class="col-sm-3 control-label ">App img</label>
        <div class="col-sm-9">
            <div>
                <input type="file" name="img"  required="required" class="form-control"  id="app_img" >
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


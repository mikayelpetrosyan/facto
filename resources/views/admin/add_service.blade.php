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
<form class="form-horizontal" role="form" action="{{ route('addservice') }}" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label for="service" class="col-sm-2 control-label adminlabel">Name</label>
        <div class="col-sm-10">
            <input type="text" name="name_en" placeholder="Service Name" required="required" class="form-control" id="service">
        </div>
    </div>
    <div class="form-group">
        <label for="service_am" class="col-sm-2 control-label adminlabel">Name Am</label>
        <div class="col-sm-10">
            <input type="text" name="name_am" placeholder="Service Name" required="required" class="form-control" id="service_am">
        </div>
    </div>
    <div class="form-group">
        <label for="service_ru" class="col-sm-2 control-label adminlabel">Name Ru</label>
        <div class="col-sm-10">
            <input type="text" name="name_ru" placeholder="Service Name" required="required" class="form-control" id="service_ru">
        </div>
    </div>
    <div class="form-group">
        <label for="description_en" class="col-sm-3 control-label">Title</label>
        <div class="col-sm-9">
            <textarea name="title_en" class="form-control" rows="3" placeholder="Title" required="required" id="description_en"></textarea>
        </div>
    </div>

    <div class="form-group">
        <label for="description_am" class="col-sm-3 control-label">Title Am</label>
        <div class="col-sm-9">
            <textarea name="title_am" class="form-control" rows="3" placeholder="Title Am" required="required" id="description_am"></textarea>
        </div>
    </div>
    <div class="form-group">
        <label for="description_ru" class="col-sm-3 control-label">Title Ru</label>
        <div class="col-sm-9">
            <textarea name="title_ru" class="form-control" rows="3" placeholder="Title Ru" required="required" id="description_ru" ></textarea>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-5" style="text-align: center">
            <button type="submit" class="btn btn-custom btn-lg btn-block">Save</button>
        </div>
    </div>
    {{ csrf_field() }}
</form>
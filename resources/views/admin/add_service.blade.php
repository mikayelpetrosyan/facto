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
        <label for="title" class="col-sm-2 control-label adminlabel">Title</label>
        <div class="col-sm-10">
            <input type="text" name="title_en" placeholder="Title" required="required" class="form-control" id="title">
        </div>
    </div>
    <div class="form-group">
        <label for="title_am" class="col-sm-2 control-label adminlabel">Title Am</label>
        <div class="col-sm-10">
            <input type="text" name="title_am" placeholder="Title" required="required" class="form-control" id="title_am">
        </div>
    </div>
    <div class="form-group">
        <label for="title_ru" class="col-sm-2 control-label adminlabel">Title Ru</label>
        <div class="col-sm-10">
            <input type="text" name="title_ru" placeholder="Title" required="required" class="form-control" id="title_ru">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-5" style="text-align: center">
            <button type="submit" class="btn btn-custom btn-lg btn-block">Save</button>
        </div>
    </div>
    {{ csrf_field() }}
</form>
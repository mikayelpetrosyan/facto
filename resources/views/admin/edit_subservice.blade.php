<!--@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
            @endforeach
            </ul>
        </div>
@endif-->
<!--@if(session('status'))
        <p class="alert alert-success">{{ session('status') }}</p>
@endif-->
<form class="form-horizontal" role="form" action="{{route("subservice_edit",$id)}}" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label for="category" class="col-sm-3 control-label">Subcategory</label>
        <div class="col-sm-9">
            <select class="form-control selectpicker" required="required" name="services_id" id="category" value="">

                <option value="">-- Select--</option>
                     @foreach($service as $ser)
                        <option value="{{$ser->id}}">{{$ser->name_en}}</option>
                     @endforeach
                </select>
            </div>
        </div>
       <div class="form-group">
        <label for="title" class="col-sm-3 control-label">Title</label>
        <div class="col-sm-9">
            <input type="text" name="title_en" placeholder="Title" required="required" class="form-control"
             id="title" value="{{$subservice['title_en']}}">
        </div>
    </div>
         <div class="form-group">
        <label for="title_am" class="col-sm-3 control-label">Title Am</label>
        <div class="col-sm-9">
            <input type="text" name="title_am" placeholder="Title" required="required" class="form-control"
             id="title_am" value="{{$subservice['title_am']}}">
        </div>
    </div>
         <div class="form-group">
        <label for="title_ru" class="col-sm-3 control-label">Title Ru</label>
        <div class="col-sm-9">
            <input type="text" name="title_ru" placeholder="Title" required="required" class="form-control"
             id="title_ru" value="{{$subservice['title_ru']}}">
        </div>
    </div>
    <div class="form-group">
        <label for="imgInp" class="col-sm-3 control-label ">App img</label>
        <div class="col-sm-9">
            <div>
                <input type="file" name="img"  class="form-control"  id="imgInp" onchange="readURL(this)">
                <button type="button" class="close" aria-label="Close" id="closes">
                <span aria-hidden="true">&times;</span>
            </button>
            <input type='hidden' value="{{$subservice['img']}}" name="old_img"/>
            </div>
        </div>
    </div>
    <div class="form-group">
        <label for="fff" class="col-sm-3 control-label adminlabel"></label>
        <div class="col-sm-9">
            <img width="100%" height="150px"  id="fff" src="{{ asset('/storage/upload/'.$subservice['img']) }}">
        </div>
    </div>
    <div class="form-group">
        <label for="blah" class="col-sm-3 control-label adminlabel"></label>
        <div class="col-sm-9">
            <img id="blah" src="#" alt="your new image" width="100%" height="150px" />
        </div>
    </div>
    <div class="form-group">
        <label for="description" class="col-sm-3 control-label">Description</label>
        <div class="col-sm-9">
            <textarea name="description_en" class="form-control" rows="3" placeholder="Description"
            required="required" id="description">{{$subservice['description_en']}}</textarea>
        </div>
    </div>
    <div class="form-group">
        <label for="description_am" class="col-sm-3 control-label">Description Am</label>
        <div class="col-sm-9">
            <textarea name="description_am" class="form-control" rows="3" placeholder="Description"
            required="required" id="description_am">{{$subservice['description_am']}}</textarea>
        </div>
    </div>
        <div class="form-group">
        <label for="description_ru" class="col-sm-3 control-label">Description Ru</label>
        <div class="col-sm-9">
            <textarea name="description_ru" class="form-control" rows="3" placeholder="Description"
            required="required" id="description_ru">{{$subservice['description_ru']}}</textarea>
        </div>
    </div>
    {{ csrf_field() }}
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10" style="text-align: center;">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </div>
            </form>


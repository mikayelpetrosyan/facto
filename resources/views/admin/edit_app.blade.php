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
<form class="form-horizontal" role="form" action="{{route("apps_edit",$id)}}" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label for="category" class="col-sm-3 control-label">Subcategory</label>
        <div class="col-sm-9">
            <select class="form-control selectpicker" required="required" name="subcategoryid" id="category" value="">

                <option value="">-- Select--</option>
                @foreach($subcategorys as $subcategory)
            <option value="{{$subcategory->id}}">{{$subcategory->subcategory}}</option>
                    @endforeach

                </select>
            </div>
        </div>
       <div class="form-group">
        <label for="title" class="col-sm-3 control-label">Title</label>
        <div class="col-sm-9">
            <input type="text" name="title" placeholder="Title" required="required" class="form-control" id="title" value="{{$app['title']}}">
        </div>
    </div>
    <div class="form-group">
        <label for="manufacturer" class="col-sm-3 control-label">Manufacturer</label>
        <div class="col-sm-9">
            <input type="text" name="manufacturer" placeholder="Manufacturer" required="required" class="form-control" id="manufacturer" value="{{$app['manufacturer']}}">
        </div>
    </div>
    <div class="form-group">
        <label for="color" class="col-sm-3 control-label">Color</label>
        <div class="col-sm-9">
            <input type="text" name="color" placeholder="Color" required="required" class="form-control" id="color" value="{{$app['color']}}">
        </div>
    </div>
    <div class="form-group">
        <label for="manufactur_country" class="col-sm-3 control-label">Manufactur Country</label>
        <div class="col-sm-9">
            <input type="text" name="manufactur_country" placeholder="Manufactur Country" required="required" class="form-control" id="manufactur_country" value="{{$app['manufactur_country']}}">
        </div>
    </div>
    <div class="form-group">
        <label for="weight" class="col-sm-3 control-label">Weight</label>
        <div class="col-sm-9">
            <input type="text" name="weight" placeholder="Weight" required="required" class="form-control" id="weight" value="{{$app['weight']}}">
        </div>
    </div>
    <div class="form-group">
        <label for="price" class="col-sm-3 control-label">Price</label>
        <div class="col-sm-9">
            <input type="number" name="price" placeholder="Price" required="required" class="form-control" id="price" value="{{$app['price']}}">
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
            <input type='hidden' value="{{$app['img']}}" name="old_img"/>
            </div>
        </div>
    </div>
    <div class="form-group">
        <label for="fff" class="col-sm-3 control-label adminlabel"></label>
        <div class="col-sm-9">
            <img width="100%" height="150px"  id="fff" src="{{ asset('/storage/upload/'.$app['img']) }}">
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
            <textarea name="description" class="form-control" rows="3" placeholder="Description" required="required" id="description">{{$app['description']}}</textarea>
        </div>
    </div>

    <div class="form-group">
        <label for="info" class="col-sm-3 control-label">Info</label>
        <div class="col-sm-9">
            <textarea name="info" class="form-control" rows="3" placeholder="Info" required="required" id="info">{{$app['info']}}</textarea>
        </div>
    </div>
    <div class="form-group">
        <label for="manual" class="col-sm-3 control-label">Manual</label>
        <div class="col-sm-9">
            <textarea name="manual" class="form-control" rows="3" placeholder="Manual" required="required" id="manual" >{{$app['manual']}}</textarea>
        </div>
    </div>
    <div class="form-group">
        <label for="mode_application" class="col-sm-3 control-label">Mode application</label>
        <div class="col-sm-9">
            <textarea name="mode_application" class="form-control" rows="3" placeholder="Mode application" required="required" id="mode_application">{{$app['mode_application']}}</textarea>
        </div>
    </div>

    {{ csrf_field() }}
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10" style="text-align: center;">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </div>
            </form>


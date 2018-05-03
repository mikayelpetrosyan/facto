@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form class="form-horizontal" role="form" action="{{ route('subcategory_edit', $subcategory->id) }}" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label for="category" class="col-sm-2 control-label adminlabel">Category</label>
        <div class="col-sm-5">
            <select  class="form-control selectpicker" required="required" name="categoryId" id="category">
                @foreach ($categories as $category)
                    <option  @if($subcategory->category_id == $category->id) selected @endif  value="{{ $category->id }}">{{ $category->category }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="form-group">
        <label for="subcategory" class="col-sm-2 control-label adminlabel">Subcategory</label>
        <div class="col-sm-10">
            <input type="text" name="subcategory"  placeholder="Subcategory" required="required"  class="form-control" id="subcategory" value="{{ $subcategory->subcategory }}">
        </div>
    </div>
    <div class="form-group">
        <label for="subcategory" class="col-sm-2 control-label adminlabel"></label>
        <div class="col-sm-10">
            <input type="file" name="sub_img"  class="form-control" id="imgInp" onchange="readURL(this)">
            <button type="button" class="close" aria-label="Close" id="closes">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
    <div class="form-group">
        <label for="subcategory" class="col-sm-2 control-label adminlabel"></label>
        <div class="col-sm-5">
            <img width="100%" height="150px"  id="fff" src="{{ asset('/storage/upload/'.$subcategory->sub_img) }}">
        </div>
    </div>
    <div class="form-group">
        <label for="subcategory" class="col-sm-2 control-label adminlabel"></label>
        <div class="col-sm-5">
            <img id="blah" src="#" alt="your new image" width="100%" height="150px" />
        </div>
    </div>
    {{ csrf_field() }}
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-5" style="text-align: center">
            <button type="submit" class="btn btn-custom btn-lg btn-block">Update</button>
        </div>
    </div>
</form>

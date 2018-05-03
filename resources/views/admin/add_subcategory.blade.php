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
<form class="form-horizontal" role="form" action="{{ route('addsubcategory') }}" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label for="category" class="col-sm-2 control-label adminlabel">Category</label>
        <div class="col-sm-5">
            <select  class="form-control selectpicker" required="required" name="categoryId" id="category">
                <option value="">-- Select Page --</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->category }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="form-group">
        <label for="subcategory" class="col-sm-2 control-label adminlabel">Subategory</label>
        <div class="col-sm-10">
            <input type="text" name="subcategory" placeholder="Subcategory" required="required" class="form-control" id="subcategory" value="{{ old('subcategory') }}">
        </div>
    </div>
    <div class="form-group">
        <label  class="col-sm-2 control-label adminlabel"></label>
        <div class="col-sm-10">
            <input type="file" name="sub_img"  required="required" class="form-control" >
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-5" style="text-align: center">
            <button type="submit" class="btn btn-custom btn-lg btn-block">Save</button>
        </div>
    </div>
    {{ csrf_field() }}
</form>
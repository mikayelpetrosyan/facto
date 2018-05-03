@if(session('status'))
    <p class="alert alert-success">{{ session('status') }}</p>
@endif
<div >
    <div>
        <table class="table table-bordered table-hover" id="myTable">
            <thead>
            <tr>
                <td>
                    No
                </td>
                <td>
                    CATEGORY
                </td>
                <td>
                    SUBCATEGORY
                </td>
                <td>
                    Images
                </td>
                <td>
                    ACTION
                </td>
            </tr>
            </thead>
            <tbody>
            <?php $i = 1 ?>
            @foreach ($subcategories as $subcategory)
                <tr>
                    <td>{{ $i }}</td>
                    <td>{{  $subcategory->categories->category}}</td>
                    <td>{{ $subcategory->subcategory }}</td>
                    <td><img width="55px" height="40px" src="{{ asset('/storage/upload/'.$subcategory->sub_img) }}"></td>
                    <td><a href="{{ route('subcategory_edit_form', $subcategory->id) }}" class="btn btn-primary">EDIT</a><a href="{{ route('subcategory_delete', $subcategory->id) }}" class="btn btn-danger" style="margin-left: 5px;">DELETE</a></td>
                </tr>
                <?php  $i++; ?>
            @endforeach
            </tbody>
        </table>

    </div>
    <script>
        jQuery(document).ready(function(){
            jQuery('#myTable').DataTable();
        });
    </script>
</div>

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
                    ACTION
                </td>
            </tr>
            </thead>
            <tbody>
            <?php $i = 1 ?>
            @foreach ($categories as $category)
                <tr>
                    <td>{{ $i }}</td>
                    <td>{{ $category->category }}</td>
                    <td><a href="{{ route('category_edit_form',$category->id) }}" class="btn btn-primary">EDIT</a><a href="{{ route('category_delete',$category->id) }}" class="btn btn-danger" style="margin-left: 5px;">DELETE</a></td>
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

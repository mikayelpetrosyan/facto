
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
                    Name
                </td>
                <td>
                    Name Am
                </td>
                <td>
                    Name Ru
                </td>
                <td>
                    Delete/Update
                </td>
            </tr>
            </thead>
            <tbody>
            <?php $i = 1 ?>
            @foreach ($shops as $shop)
                <tr>
                    <td>{{ $i }}</td>
                    <td>{{ $shop->name_en }}</td>
                    <td>{{ $shop->name_am }}</td>
                    <td>{{ $shop->name_ru }}</td>
                    <td><a href="{{ route('shop_edit_form',$shop->id) }}" class="btn btn-xs btn-primary">EDIT</a><a href="{{ route('shop_delete',$shop->id) }}" class="btn btn-xs btn-danger" style="margin-left: 5px;">DELETE</a></td>
                </tr>
                <?php  $i++; ?>
            @endforeach

            </tbody>
        </table>

    </div>
</div>
<script>
    jQuery(document).ready(function(){
        jQuery('#myTable').DataTable();
    });
</script>
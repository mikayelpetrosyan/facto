
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
                    Delete
                </td>
            </tr>
            </thead>
            <tbody>
            <?php $i = 1 ?>
            @foreach ($partners as $partner)
                <tr>
                    <td>{{ $i }}</td>
                    <td>{{ $partner->name_en }}</td>
                    <td>{{ $partner->name_am }}</td>
                    <td>{{ $partner->name_ru }}</td>
                    <td><a href="{{ route('partners_delete',$partner->id) }}" class="btn btn-xs btn-danger" style="margin-left: 5px;">DELETE</a></td>
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

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
            @foreach ($news as $new)
                <tr>
                    <td>{{ $i }}</td>
                    <td>{{ $new->title_en }}</td>
                    <td>{{ $new->title_am }}</td>
                    <td>{{ $new->title_ru }}</td>
                    <td><a href="{{ route('news_delete',$new->id) }}" class="btn btn-xs btn-danger" style="margin-left: 5px;">DELETE</a></td>
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
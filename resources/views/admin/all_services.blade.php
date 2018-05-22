
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
                @foreach ($services as $service)
                    <tr>
                        <td>{{ $i }}</td>
                        <td>{{ $service->name_en }}</td>
                        <td>{{ $service->name_am }}</td>
                        <td>{{ $service->name_ru }}</td>
                        <td><a href="{{ route('service_edit_form',$service->id) }}" class="btn btn-xs btn-primary">EDIT</a><a href="{{ route('service_delete',$service->id) }}" class="btn btn-xs btn-danger" style="margin-left: 5px;">DELETE</a></td>
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
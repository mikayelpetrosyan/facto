@if(session('status'))
    <p class="alert alert-success">{{ session('status') }}</p>
@endif
<div >
    <div>
        <table class="table table-bordered table-hover" id="myTableservice">
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
                    Title
                </td>
                <td>
                    Title Am
                </td>
                <td>
                    Title Ru
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
                    <td>{{ $service->title_en }}</td>
                    <td>{{ $service->title_am }}</td>
                    <td>{{ $service->title_ru }}</td>
                    <td><a href="{{ route('service_edit_form',$service->id) }}" class="btn btn-primary">EDIT</a><a href="{{ route('service_delete',$service->id) }}" class="btn btn-danger" style="margin-left: 5px;">DELETE</a></td>
                </tr>
                <?php  $i++; ?>
            @endforeach

            </tbody>
        </table>
    </div>
    <script>
        jQuery(document).ready(function(){
            jQuery('#myTableservice').DataTable();
        });
    </script>
</div>

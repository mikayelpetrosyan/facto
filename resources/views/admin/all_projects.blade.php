
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
            @foreach ($projects as $project)
                <tr>
                    <td>{{ $i }}</td>
                    <td>{{ $project->name_en }}</td>
                    <td>{{ $project->name_am }}</td>
                    <td>{{ $project->name_ru }}</td>
                    <td><a href="{{ route('projects_edit_form',$project->id) }}" class="btn btn-xs btn-primary">EDIT</a><a href="{{ route('projects_delete',$project->id) }}" class="btn btn-xs btn-danger" style="margin-left: 5px;">DELETE</a></td>
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
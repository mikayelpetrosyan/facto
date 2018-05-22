@if(session('status'))
    <p class="alert alert-success">{{ session('status') }}</p>
@endif
<div>
    <table class="table table-bordered table-hover" id="apps-table">
        <thead>
        <tr>
            <td>
                ID
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
            <td>
                Delete/Update
            </td>

        </tr>
        </thead>
    </table>
</div>
<script>
    $(function() {
        $('#apps-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{!! route('allSubService.data') !!}',
            columns: [
                {data: 'id', name: 'id'},
                {data: 'title_en', name: 'title'},
                {data: 'title_am', name: 'title Am'},
                {data: 'title_ru', name: 'title Ru'},
                {data: 'action', name: 'action', orderable: false, searchable: false}
            ]
        });
    });
</script>
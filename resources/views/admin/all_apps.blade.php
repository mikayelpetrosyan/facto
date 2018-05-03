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
                Category
            </td>
            <td>
                Sub Category
            </td>
            <td>
                Date
            </td>
            <td>
                Action
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
            ajax: '{!! route('allApps.data') !!}',
            columns: [
                {data: 'id', name: 'id'},
                {data: 'title', name: 'title'},
                {data: 'sub_categories.categories.category', name: 'category'},
                {data: 'sub_categories.subcategory', name: 'subcategory'},
                {data: 'created_at', name: 'created_at'},
                {data: 'action', name: 'action', orderable: false, searchable: false}
            ]
        });
    });
</script>
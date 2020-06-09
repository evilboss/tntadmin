$(document).ready(() => {
    $('#item-table').DataTable({
        ajax: {
            url: 'items/table',
            type: 'GET'
        },
        columnDefs: [{
            targets: 0,
            render: (data, type, full, meta) => {
                if (type === 'display') {
                    data = `${data}
                        <div class="links">
                        <a href="/items/get/${data}">Edit</a> 
                        <a href="#">delete</a>
                        </div>`;
                }

                return data;
            }
        }]


    });
});

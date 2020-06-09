$(document).ready(() => {
    $('#book-table').DataTable({
        ajax: {
            url: 'books/books_page',
            type: 'GET'
        }
    });
});

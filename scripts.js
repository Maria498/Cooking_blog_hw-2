$(document).ready(function(){
    $('.form-check-input').click(function(){
       $(this).closest('li').css(
           'text-decoration',
           this.checked ? 'line-through' : 'none'
           );
    })

    $("#btn_asc").click(function() {
        sortTable();
    });
    function sortTable() {

        let order = $('.table thead tr>th:eq(1)').data('order');
        order = order === 'ASC' ? 'DESC' : 'ASC';
        $('.table thead tr>th:eq(1)').data('order', order);
    
        $('.table tbody tr').sort(function(a, b) {
        a = $(a).find('td:eq(1)').text();
        b = $(b).find('td:eq(1)').text();

        return order === 'ASC' ? b.localeCompare(a) : a.localeCompare(b);
    
        }).appendTo('.table tbody');
    }
    
});



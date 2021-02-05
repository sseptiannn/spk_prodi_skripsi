$(function () {
    $('#excel').click(function () {
        var url = 'data:application/vnd.ms-excel,' + encodeURIComponent($('#tableExcel').html())
        location.href = url
        return false
    })
})
function print(div_id) {
    var DocumentContainer = document.getElementById(div_id);
    var html = '<html><head>' +
        '</head><body style="background:#ffffff;">' +
        DocumentContainer.innerHTML +
        '</body></html>';

    var WindowObject = window.open("", "PrintWindow",
        "width=1000,height=650,top=50,left=50,toolbars=no,scrollbars=yes,status=no,resizable=yes");
    WindowObject.document.writeln(html);
    WindowObject.document.close();
    WindowObject.focus();
    WindowObject.print();
    WindowObject.close();
    document.getElementById('print_link').style.display = 'block';
}
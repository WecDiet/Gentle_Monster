$(document).ready(function () {
    $("#myBtn").click(function () {
        $("#myModal").modal({ backdrop: true });
    });

    $("#myBtn2").click(function () {
        $("#myModal2").modal({
            backdrop: false
        });
    });

});
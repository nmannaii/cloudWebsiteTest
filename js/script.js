$(document).ready(() => {
    var filedata = new FormData();
    $("#upload-btn").click(function (e) {
        $("#upload").click();
    });


    $("#upload").on('change', function () {
        filedata.append('file', this.files[0]);
        $.ajax({
            type: "POST",
            url: "../uploadImages.php",
            data: filedata,
            contentType: false,
            cache: false,
            processData: false,
            success: function (response) {
                if (response === 'Ok') {
                    $("img").addClass("showImg");
                }
            }
        });
    });
});
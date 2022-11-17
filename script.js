$("#addButton").on("click", function () {

        $(".alSuccess").css("display", "block");
        let createAction = $("#addForm").attr("action", "upload.php");
        createAction.submit();

});

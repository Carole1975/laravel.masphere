$(document).ready(function () {

    $(document).ready(function () {
        $(".hideComment").click(function () {
            $(this).closest(".CommentsDispos").hide().prev(".show").show();
        });
        $(".showComment").click(function () {
            $(this).hide().next(".CommentsDispos").show();
        });
    });

})
/**
 * Created by MannaCastro on 2016-04-08.
 */

$(function () {
    $("#add_another").click(function(){

        var lastDiv = $("form div").last();
        $(appendDiv()).insertAfter(lastDiv);
        lastDiv = $("form div").last();
        lastDiv.css("display", "none");
        $(lastDiv).slideDown("slow");
    });


});

function appendDiv(){

    var counterDiv = 1;
    var findDivList = document.getElementsByClassName("create_bk_inner");
    var stringObj = "";
    counterDiv = counterDiv + findDivList.length;
    stringObj += "<div class=\"create_bk_inner\">";
    stringObj += "<p class=\"register_boxes\">";
    stringObj += "<input type=\"text\" name=\"bookmark_name_" + counterDiv + "\" placeholder=\"Enter Bookmark Name\">*";
    stringObj += "<input type=\"text\" name=\"bookmark_url_" + counterDiv + "\" placeholder=\"Enter Bookmark URL (E.g. https://www.google.com)\">*";
    stringObj += "</p>";
    stringObj += "</div>";

    return stringObj;
}

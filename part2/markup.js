/**
 * Created by MannaCastro on 2016-04-24.
 */
$(function(){


});

function passCourseId(courseId){
    console.log("Course ID:"+courseId);

    $.post("course.php", {data:courseId});
    window.location.href = "course.php";
}
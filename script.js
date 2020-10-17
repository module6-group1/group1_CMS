

// $("button").click(newFunction);

// function newFunction() {
//     alert("hi there!")
// }

// $(".sort")[0].click(()=>{
   
//     alert("hELLO")
// })

document.getElementById("content").style.visibility = "hidden";

var options = {
    valueNames: [ 'title' ]
};
new List('sortable-blog-list', options);


    var editor = ace.edit("editor");
editor.session.setMode("ace/mode/html");


$("#submit").click(function() {
   
var title = $("#title").val();
var author = $("#author").val();
var date = $("#date").val();
var content = editor.getValue();

editor.setValue(content);
});


$.post( "submit-post.php", { 
    title: title, 
    content: content, 
    author: author, 
    date: date,
}).done(function() {
window.location = "/index.php";
});



    
   







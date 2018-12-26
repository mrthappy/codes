$(document).ready(function() {
  var CommentsDiv=$("#comments_users");
var btn =$("#postBtn");
var inputText=$("#comment_container");
let $Form =$("form");
btn.click(function(event){
  var $FormData=$Form.serialize();
  event.preventDefault();
  // call ajax;
  $.ajax({
    data:$FormData,
    type:"POST",
    dataType:"text",
    url:"comment.php"

  }).done(function(data){
      console.log(data);
  });

});
});

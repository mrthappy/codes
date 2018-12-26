
 $(document).ready(function() {
     let navBody = $(".nav_body a");
     let open = $("#burger");
      let close=$("#burger");
     // adding an event to the close nav bar
       close.click(function(){
       var nav =$(".main_nav");
       let  navBody=$(".nav_body a");

       nav.fadeIn(function (){
     	  // looping through the a list
     	  navBody.each(function(){
    		   let rand=Math.floor((Math.random() * 10)+1);
  	       let counter=0;
    		   let timer=50;
    		   return setTimeout(function(){
    			   if(counter < navBody.length){
    				  counter++;

    				 navBody.addClass("translate");



      }
    },timer*rand );

    });
     });
   });

   open.click(function() {
         $(".main_nav").fadeIn(function() {
             let list = document.querySelectorAll(".nav_body a");
           let counter = 0;            let randNumber = Math.floor(Math.random() * 10) + 1;
           let stop = true;
           return setInterval(function() {
                if (counter < list.length) {
                   list[counter++].classList.add("translate");
                   stop = false;

                }

            }, randNumber + counter);
        });

     });
     var $para=$(".try");
    $para.click(function(){
       $(this).fadeOut();

     })
     var $set=$(".set");
    $set.click(function(){
      $para.fadeIn(function(){
       $(this).removeClass("gone");

      });
    })
   /* end of event to open the navigation */
   let closeBar = $(".close_nav");
   closeBar.click(function() {
       $(".main_nav").delay(500).fadeOut(function() {
           let list = document.querySelectorAll(".nav_body a");
           for (let i = 0; i < list.length; i++) {
               if (list[i].classList.contains("translate")) {
                    list[i].classList.remove("translate");


                }

             }
         });


     });

     /* end of the closeBar function */
     let blickerElem = $(".blicker");
     $(blickerElem).each(function(index, elem) {


         $(elem).on("click", function() {
             let parentDiv = $(elem).parent();
             let autor = parentDiv.find(".crew_name").text();
             let divHidden = $(".crew_holder_image");
             let divTxt = divHidden.find(".crew_name");
             $(divTxt).html(autor);
           divHidden.stop().fadeIn().addClass("grid_animate");

       });

   });

   /* end of the blicker element event */
   let blickerClose = $(".crew_class");

    $(blickerClose).click(function() {
       let divHidden = $(".crew_holder_image");
       let divTxt = divHidden.find(".crew_name");
       divHidden.fadeOut().removeClass("grid_animate");
      divTxt.html("");

    });
    /* end of blicker close*/

 let $Form =$("form");

 $Form.on("submit",function(e){


resetErrors();
//
//
// 	// getting the object containing the whole stuff

   let $FormData=$Form.serialize();

 $.ajax({
   data:$FormData,
   type:"POST",
   dataType:"json",
   url:"contact.php"

 }).done(function(response){
    let $input=$(".field")

    let $data=response;
    if($data.hasOwnProperty("fail")){
      // there are errors in the fields !!
        var $keys=Object.keys($data.fail);

        $.each($data.fail,function(i,v){
         let $para =`<p class="inputErrors">${v}</p>`;
          $('input[name="'+i+'"]').addClass("error").after($para);
          $('textarea[name="'+i+'"]').addClass("error").after($para);

        });

    }else{

     setTimeout(function(){
                   if($data.hasOwnProperty("success")){

                   $("input.field").val("");
                    $('textarea[name="message"]').val("");
                    console.log("thank you so munch for you time");


 }
        },100);

      }
 });
 e.preventDefault();
 });
 function resetErrors(){
  $("input.field").removeClass("error");
  $('textarea[name="message"]').removeClass("error");
  $('p.inputErrors').remove();

 }

// gettin the anchors to perform a scroll event
 let $anchors = $("a.anchor");
 $anchors.click(function (){
  $.each($anchors,function(index,value){

    $(this).removeClass("translate");
    $(".main_nav").removeClass("gone").fadeOut(600);


  });


});



});

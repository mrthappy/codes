$(document).ready(function(){
  // global object
  let nav_anchors =$(".snchor a ");
  let burger =$("#burger");
  let main_nav=$(".main_nav");
  burger.click(function(event){
    return setTimeout(function(){
      return new Promise(function((resolve,reject){
      let counter ;
      let num =Math.floor(Math.random()*100));
      if(num >0){
        console.log("this ist he proeoe")
      }


      }));
    },3000).then(function(data){
      console.log("this is the beser ");
    });
      event.preventDefaul();
  });
})


<style>
*{margin:0;padding:0px;box-sizing:border-box;}
img{
  max-width:100%;
  display:block;
}
a{
  display:block;
  text-decoration:none;
  color:lightgrey;
  line-height:100%;
} ul{list-style:none;}
.edit_page{
  display:flex;
  flex-direction:column;
  align-items:center;

  max-width:480px;
  margin:2rem auto;

}
.Linksholder{

width:100%;
margin:0 auto;
display: flex;
flex-direction: column;
align-items: center;
border-bottom:none;

}
.imgcontent{
  width:100px;
  height:100px;
  border-radius:50%;
  margin-top:10px;
}
.display_content{
  margin-top:2rem;
    border:0.8px solid lightgrey;
    width:100%;
}
.pagedescription{
  display:flex;
  flex-direction:column;
}
.pagedescription h3{
  color:lightgreen;
  text-align:center;
  vertical-align: middle;
  margin-bottom:1.3rem;

}
.form img{
  width:200px;
  height:200px;
  margin:20px auto;

}
.itemslinks{
  display:block;

  margin-top:20px;
  width:100%;
}
input[type="submit"]{
  display: block;
  background: #0aafbe;
  padding: 20px;
  border-radius: 30px;
  color: white;
  border: 1px solid #d3d3d3;
  width: 50%;
  padding: 20px;
  margin:10px  auto;
  cursor:pointer;

}
.imghold{    border: 1px solid #cacbcc;
    box-shadow: 0 2px 0 hsla(0,0%,100%,.63), inset 0 1px 2px rgba(41,48,59,.15);}
    .form{padding:18px;}
    .items{align-self:flex-start;}
    .file{
      max-width:100%;
      border:0px;
      outline:none;

    }
    input[type="file"]{
      background:orange;
      opacity:0;
    }
    .value{outline:0;border:0;display:block;padding:10px;background: transparent;}
    label{display:flex;cursor:pointer;    border: 1px solid silverb;
    background-color: #f1e5e6;}
    strong{
              background-color: #d3394c;
          width:80%;
    }
</style>






<div class="edit_page">
  <div class="Linksholder">
      <img src="../images/girl.jpeg" class="imgcontent">
      <h3 style="color:rgba(0,0,0,.65);margin-bottom:10px;">Firstname Lastname</h3>
    <ul class="items">

      <li class="itemslinks"><a href="user">Upload Photo</a></li>
      <li class="itemslinks"><a href="user">Public Profile</a></li>
    </ul>
  </div>
  <div class="display_content"style="margin-top:70px;">
    <div class="pagedescription">
      <h3  style="border-bottom:1px solid #dedfe0;color:#29303b;line-height:80px;">Public Profile</h3>
    </div>
    <div class="form">
      <div class="imghold">
      <img src ="../images/beauty.jpg">
    </div>
      <form enctype="multipart/form-data"method="post"action="#">
        <label for="fileupload">
          <span></span>
          <input type="text"readonly value="upload imagew" class="value">
          <strong>choose a file</strong>
        </label>

              <input type="file"  class="file" id="fileupload" accept=".jpeg">



        </div>
        <div class="formholder">
          <input type="submit" name="submit" value="save">
        </div>
      </form>
    </div>
  </div>
</div>
<script>
let file=document.querySelector(".file");
file.addEventListener("change",function(){
	let filearray=this.files;
  console.log(filearray);
    let name=filearray[0].name;
    let span=document.querySelector("span");
    if(filearray.length >0){
      let changer=document.querySelector(".value");
      console.log(changer.value);
    	changer.value=name;

    }else{
    	span.innerHTML="";
    	filearray="";
    }
})
</script>

let exampleInputEmail1=document.getElementById('exampleInputEmail1');
let exampleInputPassword1=document.getElementById('exampleInputPassword1');
let exampleInputPassword2=document.getElementById('exampleInputPassword2');
let Submit=document.getElementById('Submit');
let form=document.getElementById('form');
let error=document.getElementById('error');
let error1=document.getElementById('error1');

//let a=0;
//let b=0;









          
/*if((exampleInputPassword2.value==="")||(exampleInputPassword1.value==="")  ){
     //error.innerHTML="veuiller remplir les champs vides";
     Submit.disabled=true;}
     else if(exampleInputPassword1.value===exampleInputPassword2.value){
          Submit.disabled=false;
     }*/


exampleInputEmail1.addEventListener('focusout',function(e){
     e.preventDefault();
     if(exampleInputEmail1.value==="")
     {
          error.innerHTML=`<div class="alert alert-danger">'veuiller remplir le champs email'</div>`;
     }
})
/*exampleInputPassword2.addEventListener('focusout',function(e){
     e.preventDefault();
     if(exampleInputPassword2.value==="")
     {
         error.innerHTML=`<div class="alert alert-danger">'veuiller confirmer le password'</div>`;
     }
})*/
exampleInputPassword1.addEventListener('focusout',function(e){
     e.preventDefault();
     if(exampleInputPassword1.value==="")
     {
          error.innerHTML=`<div class="alert alert-danger">'veuiller remplir le champs password'</div>`;
     }
})






     //error.innerHTML="veuiller remplir les champs vides";
     
     

Submit.addEventListener("click",function(e){

     e.preventDefault();
     if((exampleInputEmail1.value==="")||(exampleInputPassword2.value==="")||(exampleInputPassword1.value==="")  ){


          error.innerHTML=`<div class="alert alert-danger">'veuiller remplir le champs vides'</div>`;
     }
     else if(exampleInputPassword1.value!=exampleInputPassword2.value)
     {
        alert('les mots de passe ne correspondent pas');
        exampleInputPassword2.value="";
     } 
       else {
          error.innerHTML=`<div class="alert alert-success">'Vos données sont enréchistrées !!'</div>`;
          error1.innerHTML=`<div class="alert alert-success">'Vous avez un email de confirmation'</div>`;
       }

         
     
     })
/*exampleInputPassword1.addEventListener("focusout",function(e){

e.preventDefault();



if(exampleInputPassword1==="" ){
     error.innerHTML=`<div class="alert alert-danger">"veuiller remplir les champs vides"</div>`;
     Submit.disabled=true;
     else{
     	b++;
     }
     

}


})


})

if((a==0) && (b==0))
{
	Submit.disabled=false;
}



form.addEventListener("submit",function(e){

e.preventDefault();


})*/
 
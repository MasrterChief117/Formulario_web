const content = element.innerHTML;

element.innerHTML = htmlString;

function desplegar (){
    let div=document.getElementById("div_elementos")
    
   let elemento_si=document.getElementById("flexRadioDefault1");
   if(elemento_si.checked){
       div.innerHTML=`
       <hr>
       <div class="form-check">
       <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
       <label class="form-check-label" for="flexCheckDefault">
         :)
       </label>
     </div>
     <div class="form-check">
       <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
       <label class="form-check-label" for="flexCheckChecked">
         :(
       </label>
     </div>`
   }else{
        div.innerHTML=""

   }
}
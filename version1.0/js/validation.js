const inputs = document.querySelectorAll('input');

inputs.forEach((input,login)=>{
  switch (input.getAttribute("type")) {
    case "email":
        input.addEventListener('keyup',function(e){
          let val = e.target.value
          if(!(val.includes('@') && val.includes("."))){
              e.target.classList.add("invalid")
              e.target.parentNode.querySelector(".validation-msg").innerText = "This email is not valid!";
          }else{
              e.target.classList.remove("invalid");
              e.target.classList.add("valid");
              e.target.parentNode.querySelector(".validation-msg").innerText = "";
          }
        });
      break;
    case "password":
        input.addEventListener('keyup',function(e){
          let val = e.target.value
          if(!(val.length > 8 && val.length < 20)){
            e.target.classList.add("invalid")
            e.target.parentNode.querySelector(".validation-msg").innerText = "Your password must be more than 8 characters!";
            return
          }
          e.target.classList.remove("invalid");
          e.target.classList.add("valid");
          e.target.parentNode.querySelector(".validation-msg").innerText = "";
        });
      break;
    case "phone":
        input.addEventListener('keyup',function(e){
          let val = e.target.value
          if(!(val.length > 10 && val.length < 16)){
            e.target.classList.add("invalid")
            e.target.parentNode.querySelector(".validation-msg").innerText = "Your phone number must be more than 10 characters!";
            return
          }
          e.target.classList.remove("invalid");
          e.target.classList.add("valid");
          e.target.parentNode.querySelector(".validation-msg").innerText = "";
        });
      break;
    case "text":
        input.addEventListener('keyup',function(e){
          let val = e.target.value
          if(!(val.length > 2)){
            e.target.classList.add("invalid")
            e.target.parentNode.querySelector(".validation-msg").innerText = "Text must be more than 2 characters!";
            return
          }
          e.target.classList.remove("invalid");
          e.target.classList.add("valid");
          e.target.parentNode.querySelector(".validation-msg").innerText = "";
        });
      break;
  
    default:
      break;
  }
})
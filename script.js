const form=document.querySelector("form"),
textstatus=document.querySelector(".button-area span");

form.onsubmit=(e) => {
e.preventDefault();
textstatus.style.color="#0d6efd";
textstatus.style.display="inline";

let xhr=new XMLHttpRequest();
xhr.open("post" , "message.php");

 xhr.onload=()=>{
    if(xhr.readyState===4 , xhr.status===200){
        let xmlrespose=xhr.response;
        if(xmlrespose.indexOf("email and password field is required!") != -1 || xmlrespose.indexOf("enter avaliud email address") != -1 || xmlrespose.indexOf("sorry failed to send your message..") != -1){
textstatus.style.color="red";
        }else{
            form.reset();
            setTimeout(() => {
                textstatus.style.display="none";
            }, 2000);
        }
        textstatus.innerText=xmlrespose;
    }
}
let formdata=new FormData(form);



xhr.send(formdata);   
}
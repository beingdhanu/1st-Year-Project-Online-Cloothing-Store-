function myFunction(){
    let a = document.getElementById("txt").value;
    let b = document.getElementById("email").value;
    let c = document.getElementById("pswd").value;
    if(a.match && b.match(/[A-Za-z0-9]/g) && c.match(/[^A-Za-z0-9]/g)){
        alert("good");   
    }
    else{
        alert("re-enter");
    }
}
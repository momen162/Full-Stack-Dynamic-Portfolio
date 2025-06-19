logo = document.querySelector("ul").children;
for(i = 0; i<logo.length; i++){
    logo[i].addEventListener
    ("click", function (event){
        console.log(event.target.innerText);
    });
}

btn = document.getElementById("change");
btn.addEventListener("click", function (event){
    userName = document.getElementById('userName');
    userName.innerText= "Shipon Ahmed";
    userName.style.color = "red";

    userName.classList.add('btn');
})
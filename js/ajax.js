let likeBtn = document.querySelector("button[name=like]");
let heart = document.querySelector("button[name=like] ~ p");
let title = document.querySelector(".card-content_text > h3 > a");

likeBtn.addEventListener("click", e => {
    e.preventDefault()
    addMessage();
})

const addMessage = () => {
    let request = new XMLHttpRequest();
    request.open("POST", "php/ajax.php");

    let props = "like="+heart.textContent+"&title="+title.textContent;
    request.setRequestHeader("Content-Type", "application/x-www-form-urlencoded")

    request.onload = () => {
        heart.textContent =Number(heart.textContent) + 1;
    }

    request.onreadystatechange = () => {
        if(request.readyState == 4 && request.status == 200){
            console.log(request.responseText)
        }
    }

    request.send(props);
}
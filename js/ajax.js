let likeBtn = document.querySelector("button[name=like]");
let heart = document.querySelector("button[name=like] ~ p");

likeBtn.addEventListener("click", e => {
    e.preventDefault()
    addMessage();
})

const addMessage = () => {
    let request = new XMLHttpRequest();
    request.open("POST", "php/ajax.php");

    let props = `like=${heart}`;
    request.setRequestHeader("Content-Type", "application/x-www-form-urlencoded")

    request.onload = () => {
        heart.textContent =Number(heart.textContent) + 1;
    }

    request.onreadystatechange = () => {
        if(request.readyState == 4 && request.status == 200){
            console.log("Everything is just fine");
        }
    }

    request.send(props);
}
let likeBtn = document.querySelector("button[name=like]");

likeBtn.addEventListener("click", e => {
    e.preventDefault()
    addMessage();
})

const addMessage = () => {
    let request = new XMLHttpRequest();
    request.open("POST", "php/ajax.php");

    request.onload = () => {
        console.log(request.responseText)
    }

    request.send();
}
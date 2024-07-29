window.addEventListener("load", init);

function init() {
    var btns = document.getElementsByClassName("delete-post");

    for(let i=0; i<btns.length; i++){
        btns[i].addEventListener("click", deletePost);
    }
}

function deletePost(){
    var id = this.getAttribute("id");
    // console.log(id)
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function()
    {

            // console.log(this.statusText);

            console.log(this.responseText);
    };
    xhr.open("POST", "../db-delete-blog.php", true);
    // xhr.setRequestHeader("Content-type", "text/plain");
    xhr.send(`id=${id}`);
}
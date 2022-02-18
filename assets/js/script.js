// alert("Yesahhh")
let content = document.getElementById('content');

console.log(window.innerHeight);

content.style.minHeight = (window.innerHeight - 180) + "px";

function confirmDelete() {
    return confirm("Tens a certeza que excluir?");
}
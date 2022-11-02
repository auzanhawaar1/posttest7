const checkbox = document.getElementById("checkbox")
checkbox.addEventListener("change", () => {
    document.body.classList.toggle("dark")
})

alert("Selamat datang")

document.getElementById("dom1").style.color = "rgb(100, 30, 300)"
document.getElementById("dom2").innerHTML = "Toko Red";
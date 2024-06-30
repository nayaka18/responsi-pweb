function pesan(produk) {
    document.getElementById("judulProduk").innerText = produk;
    document.getElementById("namaProduk").value = produk;
    document.getElementById("formPesan").style.display = "block";
}

function tutupForm() {
    document.getElementById("formPesan").style.display = "none";
}

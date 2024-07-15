function sendWhatsApp() {
    var name = document.getElementById("cf-name").value;
    var date = document.getElementById("cf-date").value;
    var people = document.getElementById("cf-people").value;
    var address = document.getElementById("cf-address").value;
    var message = document.getElementById("cf-message").value;

    var whatsappMessage =
        `Halo, saya ingin melakukan reservasi dengan detail berikut:%0A%0A` +
        `Nama: ${name}%0A` +
        `Tanggal: ${date}%0A` +
        `Jumlah Orang: ${people}%0A` +
        `Alamat: ${address}%0A` +
        `Pesan Tambahan: ${message}`;

    var whatsappUrl = `https://wa.me/6281326351768?text=${encodeURIComponent(
        whatsappMessage
    )}`;

    window.open(whatsappUrl, "_blank");
}

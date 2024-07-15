const express = require("express");
const bodyParser = require("body-parser");
const { createCanvas } = require("canvas");

const app = express();
app.use(bodyParser.json());

app.post("/generate-struk", (req, res) => {
    const { name, email, phone, date, time, people, resmessage } = req.body;

    const canvas = createCanvas(400, 600);
    const ctx = canvas.getContext("2d");

    // Background
    ctx.fillStyle = "#FFFFFF";
    ctx.fillRect(0, 0, canvas.width, canvas.height);

    // Text
    ctx.fillStyle = "#000000";
    ctx.font = "20px Arial";
    ctx.fillText(`Nama: ${name}`, 50, 100);
    ctx.fillText(`Alamat: ${email}`, 50, 150);
    ctx.fillText(`Nomer: ${phone}`, 50, 200);
    ctx.fillText(`Tanggal: ${date}`, 50, 250);
    ctx.fillText(`Tanggal: ${time}`, 50, 250);
    ctx.fillText(`Tanggal: ${people}`, 50, 250);
    ctx.fillText(`Pesan: ${resmessage}`, 50, 300);

    const buffer = canvas.toBuffer("image/png");
    const imageUrl = `YOUR_SERVER_URL/images/${Date.now()}.png`;
    require("fs").writeFileSync(`./public/images/${Date.now()}.png`, buffer);

    res.json({ imageUrl });
});

app.listen(3000, () => {
    console.log("Server is running on port 3000");
});

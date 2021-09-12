let fotos = ["foto1.jpg","foto2.jpg","foto3.jpg"];

function TrocarFoto (foto){
    document.querySelector(".imagem-banner").src = "imagens/" + fotos[foto];

}

let fotoAtual = 0;
TrocarFoto (fotoAtual);

setInterval (function() {
fotoAtual++;
if(fotoAtual >2){
    fotoAtual = 0;

}
TrocarFoto (fotoAtual);
} ,2000);

function zap() {
    var nome = document.getElementById("nome").value;
    var sobrenome = document.getElementById("sobrenome").value;
    var mensagem = document.getElementById("mensagem").value;
    var cursos = document.getElementById("curso").value;

    if (nome.trim() === "" || sobrenome.trim() === "" || mensagem.trim() === "") {
        alert("Preencha todas as informações antes de enviar")
        return;
    }

    var url = "https://wa.me/+551938122626?text=" +
        "Oi, me chamo " + nome + "%0a" + sobrenome + ", gostaria de saber mais sobre o curso de" + "%0a" + cursos + "." + "%0a%0a" + mensagem;

    window.open(url, '_blank').focus();
}
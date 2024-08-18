<!DOCTYPE html>
<?
?>
<html>
<head>
    <title>Jogo</title>
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
</head>
<canvas id="meuGrafico" width="400" height="300"></canvas>

<script>
    const canvas = document.getElementById("meuGrafico");
    const ctx = canvas.getContext("2d");
    

    // Largura e altura das barras
    const larguraBarra = 50;
    const alturaMaxima = 200;
    dados = [0, 0, 0, 0];
    var response
    var data
 
    function loop() {
        // Dados do gráfico (valores das barras)
        dados = [dados[1], dados[2], dados[3], getRand(1, 60)];
        ctx.clearRect(0, 0, canvas.width, canvas.height)
        // Desenhe as barras
        for (let i = 0; i < dados.length; i++) {
            const x = i * (larguraBarra + 10);
            const altura = (dados[i] / 100) * alturaMaxima;
            ctx.fillStyle = "blue"; // Cor das barras
            ctx.fillRect(x, canvas.height - altura, larguraBarra, altura);
        }
        console.log(response)
    }

    function getRand(min, max) {
        return Math.random() * (max - min) + min;
    }



    //https://jediplaylist.vercel.app/api/mcdtrx.php

fetch('https://jediplaylist.vercel.app/api/mcdtrx.php') // Substitua pela URL desejada
  .then(response => response.text())
  .then(text => {
    try {
      const jsonData = JSON.parse(text);
      console.log('Dados em formato JSON:', jsonData);
      // Faça o que desejar com os dados aqui
    } catch (error) {
      console.error('Erro ao fazer parsing do JSON:', error);
    }
  })
  .catch(error => {
    console.error('Erro ao buscar dados:', error);
  });

    setInterval(function () {
        loop();
    }, 3000);

</script>
<body>


</body>
</html>

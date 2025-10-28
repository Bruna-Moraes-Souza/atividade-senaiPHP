<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Sorteio de Rifa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Sorteio de Rifa</h1>

        <form id="formRifa">
            <label for="premio">Prêmio:</label>
            <input type="text" id="premio" placeholder="Digite o prêmio..." required>
            <button type="submit">Sortear</button>
        </form>

        <div id="resultado" class="resultado"></div>
    </div>

    <script>
        const nomes = ["Anna", "Bruna", "Carlos", "Gabi Moura", "Nubia", "Joao Perissinoto", "Lara"];

        document.getElementById("formRifa").addEventListener("submit", function(e) {
            e.preventDefault();

            const premio = document.getElementById("premio").value.trim();
            const nomeSorteado = nomes[Math.floor(Math.random() * nomes.length)];
            const dataAtual = new Date();
            
            const dataFormatada = dataAtual.toLocaleDateString('pt-BR');
            const horaFormatada = dataAtual.toLocaleTimeString('pt-BR');

            document.getElementById("resultado").innerHTML = `
                <h2> Resultado do Sorteio </h2>
                <p><strong>Nome sorteado:</strong> ${nomeSorteado}</p>
                <p><strong>Prêmio:</strong> ${premio}</p>
                <p><strong>Data:</strong> ${dataFormatada}</p>
                <p><strong>Hora:</strong> ${horaFormatada}</p>
            `;
        });
    </script>
</body>
</html>
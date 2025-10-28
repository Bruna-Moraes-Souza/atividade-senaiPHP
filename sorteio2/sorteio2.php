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
            <label for="intervalo">Escolha o intervalo das rifas:</label>
            <select id="intervalo" required>
                <option value="100">01 a 100</option>
                <option value="300">01 a 300</option>
            </select>

            <label for="premio">Prêmio:</label>
            <input type="text" id="premio" placeholder="Digite o prêmio..." required>

            <button type="submit">Sortear</button>
        </form>

        <div id="resultado" class="resultado"></div>

        <div id="historico" class="historico">
            <h2>📋 Lista de Ganhadores</h2>
            <ul id="listaGanhadores"></ul>
        </div>
    </div>

    <script>
        let rifasSorteadas = new Set(); // guarda os números já sorteados
        const listaGanhadores = document.getElementById("listaGanhadores");

        document.getElementById("formRifa").addEventListener("submit", function(e) {
            e.preventDefault();

            const premio = document.getElementById("premio").value.trim();
            const intervalo = parseInt(document.getElementById("intervalo").value);
            const totalRifas = intervalo;

            if (rifasSorteadas.size >= totalRifas) {
                alert("Todas as rifas já foram sorteadas!");
                return;
            }

            // Sorteia um número não repetido
            let numeroSorteado;
            do {
                numeroSorteado = Math.floor(Math.random() * totalRifas) + 1;
            } while (rifasSorteadas.has(numeroSorteado));

            rifasSorteadas.add(numeroSorteado);

            const dataAtual = new Date();
            const dataFormatada = dataAtual.toLocaleDateString('pt-BR');
            const horaFormatada = dataAtual.toLocaleTimeString('pt-BR');

            // Mostra o resultado do sorteio
            document.getElementById("resultado").innerHTML = `
                <h2> Resultado do Sorteio </h2>
                <p><strong>Número sorteado:</strong> ${numeroSorteado.toString().padStart(3, '0')}</p>
                <p><strong>Prêmio:</strong> ${premio}</p>
                <p><strong>Data:</strong> ${dataFormatada}</p>
                <p><strong>Hora:</strong> ${horaFormatada}</p>
            `;

            // Adiciona o ganhador à lista
            const item = document.createElement("li");
            item.innerHTML = `<strong>Rifa ${numeroSorteado.toString().padStart(3, '0')}</strong> — ${premio}`;
            listaGanhadores.appendChild(item);

            // Limpa o campo do prêmio
            document.getElementById("premio").value = "";
        });
    </script>
</body>
</html>

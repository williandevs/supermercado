<?php
require_once('conexao.php');

$cep = $_POST['cep']; // CEP fornecido pelo cliente
$valorCompra = 200; // Valor da compra (exemplo)

$url = "https://viacep.com.br/ws/$cep/json/";
$response = file_get_contents($url);

if ($response === false) {
    // Trate o erro de requisição ao ViaCEP
    echo "Ocorreu um erro ao consultar o ViaCEP.";
} else {
    $endereco = json_decode($response);

    if (isset($endereco->erro)) {
        // Trate o erro retornado pelo ViaCEP
        echo "CEP inválido ou não encontrado.";
    } else {
        echo "Logradouro: " . $endereco->logradouro . "<br>";
        echo "Bairro: " . $endereco->bairro . "<br>";
        echo "Localidade: " . $endereco->localidade . "<br>";
        echo "UF: " . $endereco->uf . "<br>";

        // Busque os dados na tabela "bairros"
        $query = "SELECT * FROM bairros";
        $result = $pdo->query($query);

        if ($result) {
            $fretePorBairro = array();

            while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                $nomeBairro = $row['nome'];
                $valorFrete = $row['valor_frete'];

                $fretePorBairro[$nomeBairro] = $valorFrete;
            }

            // Verifique o bairro do endereço obtido do ViaCEP
            $bairro = $endereco->bairro;

            if (isset($fretePorBairro[$bairro])) {
                $valorFrete = $fretePorBairro[$bairro];
            } else {
                // Define um valor padrão caso não haja uma regra específica para o bairro
                $valorFrete = 10;
            }

            // Verifica se o frete é grátis para compras acima de R$ 250
            if ($valorCompra > 250) {
                $valorFrete = 0; // Frete grátis
            }

            // Soma o valor do frete com o valor da compra
            $valorTotal = $valorCompra + $valorFrete;

            echo "Valor do frete: R$ " . number_format($valorFrete, 2, ',', '.') . "<br>";
            echo "Valor total da compra: R$ " . number_format($valorTotal, 2, ',', '.') . "<br>";

            // Defina sua lógica para a data de entrega com base no CEP, bairro ou outros critérios
            $dataEntrega = strtotime('+3 days'); // Exemplo: entrega em 3 dias úteis
            $dataEntregaFormatada = date('d/m/Y', $dataEntrega); // Formata a data no padrão dd/mm/yyyy

            $diaSemana = date('l', $dataEntrega); // Obtém o dia da semana (em inglês)
            $horarioEntrega = "12:30"; // Horário de entrega desejado

            // Traduz o dia da semana para o idioma desejado
            $diasSemanaPt = array(
                'Monday' => 'Segunda-feira',
                'Tuesday' => 'Terça-feira',
                'Wednesday' => 'Quarta-feira',
                'Thursday' => 'Quinta-feira',
                'Friday' => 'Sexta-feira',
                'Saturday' => 'Sábado',
                'Sunday' => 'Domingo'
            );

            $diaSemanaPt = $diasSemanaPt[$diaSemana];

            echo "Previsão de entrega: $diaSemanaPt ($dataEntregaFormatada) às $horarioEntrega";
        } else {
            echo "Erro ao buscar dados na tabela bairros.";
        }
    }
}
?>

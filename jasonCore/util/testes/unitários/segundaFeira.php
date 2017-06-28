<?php header ('Content-type: text/html; charset=UTF-8');

$limiteDoMes = 31; // Essa linha estabelece um limite de dias para o mês
$agenda = array(12, 13, 17, 21, 29); // Array que guarda todos os dias agendados

$diasAgendados = count($agenda); // Conta quantos dias tem agendado, para aplicação saber quantas vezes terá que fazer sua tarefa até parar

$diasCorridos = 0; // Estabelece uma partida para a tarefa ser realizada
	while ($diasCorridos < $diasAgendados) // Enquanto (while) a quantidade de dias corrigos na análise, for menor que a quantidade de dias agendados, faça a tarefa abaixo
	{
		$proximaSegunda = $agenda[$diasCorridos] + 7; // Calcula a proxima segunda de cada dia agendado
		$segundaDoMesSeguinte = $agenda[$diasCorridos] + 7 - $limiteDoMes; // Calcula a proxima segunda se cair no mês seguinte
		
		if ($proximaSegunda > $limiteDoMes) // Se a próxima segunda cair no mês seguinte, escreva esse texto
		{
			echo "A próxima segunda feira depois do dia $agenda[$diasCorridos] será no mês seguinte, do dia $segundaDoMesSeguinte ";
		}
			else{ // Caso contrário, se cair neste mês, escreva isso
				echo "A próxima segunda feira depois do dia $agenda[$diasCorridos] será $proximaSegunda<br>";
		
			}
		$diasCorridos++; // Depois da tarefa executada, adicione 1, a dias corrigos, e faça a tarefa de novo, como uma roleta
	}

	?>
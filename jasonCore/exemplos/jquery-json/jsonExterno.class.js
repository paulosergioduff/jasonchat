// Classe para chamar o Json.
function json(){
	var qtd;
	var retorno;

	// Resgatar valores.
	json.prototype.resgatarValores = function(){
		$('#resultado').html('Carregando dados...');

		// Estrutura de resultado.
		$.getJSON('http://localhost/jasonCore/exemplos/selectTabela.php', function(data){
			// servidor http://localhost/jasonCore/exemplos/selectTabela.php
			this.qtd = data.dados.length;
			this.retorno = '';

			for (i = 0; i < this.qtd; i++){
				this.retorno += 'ID: ' + data.dados[i].id + '<br />';
				this.retorno += 'Categoria: ' + data.dados[i].Categoria + ' - ';
				this.retorno += 'cidade: ' + data.dados[i].cidade + '<br /><br />';
			}

			$('#resultado').html(this.retorno);
		});

	}

}

// Objeto.
var obj = new json();
obj.resgatarValores();

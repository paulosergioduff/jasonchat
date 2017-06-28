// Classe para chamar o Json.
function json(){
	var qtd;
	var retorno;

	// Resgatar valores.
	json.prototype.resgatarValores = function(){
		$('#resultado').html('Carregando usuarios...');

		// Estrutura de resultado.
		$.getJSON('arquivo.json', function(data){
			// servidor http://localhost/jasonCore/exemplos/selectTabela.php
			this.qtd = data.usuarios.length;
			this.retorno = '';

			for (i = 0; i < this.qtd; i++){
				this.retorno += 'ID: ' + data.usuarios[i].id + '<br />';
				this.retorno += 'nome: ' + data.usuarios[i].nome + ' - ';
				this.retorno += 'cidade: ' + data.usuarios[i].cidade + '<br /><br />';
			}

			$('#resultado').html(this.retorno);
		});

	}

}

// Objeto.
var obj = new json();
obj.resgatarValores();

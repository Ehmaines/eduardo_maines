using Cartao;
using Orientacao_a_Objetos;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Unidade02.Orientacao_a_Objetos
{
	class TestaClienteECartao
	{
		private static void Main_()
		{
			CartaoDeCredito c4 = new CartaoDeCredito(1235124);
			c4.numero = 432141;
			c4.validade = "12/25";

			Cliente c = new Cliente();
			c.id = 1234;
			c.nome = "Eduardo";

			CartaoDeCredito cdc2 = new CartaoDeCredito(6354341);
			cdc2.numero = 09312441;
			cdc2.validade = "08/21";

			c4.cliente = c;

			Console.WriteLine(c4.numero);
			Console.WriteLine(c4.validade);
			Console.WriteLine(c4.cliente.nome);

			Console.ReadLine();
		}
			
	}	
}


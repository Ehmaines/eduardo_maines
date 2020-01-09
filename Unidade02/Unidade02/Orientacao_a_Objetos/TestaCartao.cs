using Cartao;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Unidade02.Orientacao_a_Objetos
{
	class TestaCartao
	{
		public static void Main2()
		{
			CartaoDeCredito cdc1 = new CartaoDeCredito(41251243);
			cdc1.numero = 12234321;
			cdc1.validade = "10/21";

			CartaoDeCredito cdc2 = new CartaoDeCredito(314512341);
			cdc2.numero = 31241231;
			cdc2.validade = "11/23";

			Console.WriteLine(cdc1.numero);
			Console.WriteLine(cdc1.validade);

			Console.WriteLine(cdc2.numero);
			Console.WriteLine(cdc2.validade);

			Console.ReadLine();
		}
	}
}

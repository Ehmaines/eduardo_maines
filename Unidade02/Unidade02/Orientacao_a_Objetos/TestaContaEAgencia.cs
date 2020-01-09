using Bancos_agencia;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Unidade02.Orientacao_a_Objetos
{
	class TestaContaEAgencia
	{
		private static void Main_()
		{
			Agencia a = new Agencia(31);
			

			Conta c = new Conta(321);
			c.numero = 12541;
			c.saldo = 1233;
			c.limite = 490;

			

			Console.WriteLine(c.numero);
			Console.WriteLine(c.saldo);
			Console.WriteLine(c.limite);
			Console.WriteLine(c.agencia.numero);

			Console.ReadLine();
		}
	}
}

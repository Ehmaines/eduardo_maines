using Bancos_agencia;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Unidade02.Orientacao_a_Objetos
{
	class TestaAgencia
	{
		private static void Main3()
		{
			Agencia agencia1 = new Agencia(34);
			agencia1.numero = 21;

			Agencia agencia2 = new Agencia(31);
			agencia2.numero = 32;

			Console.WriteLine(agencia1.numero);
			Console.WriteLine(agencia2.numero);

			Console.ReadLine();
		}
	}
}

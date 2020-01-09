using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Unidade4
{
	class Conta
	{
		public static int Contador;
		public int numeroConta;

		public Conta()
		{
			this.numeroConta = Conta.Contador;
			Conta.Contador++;
		}
		public static void ZeraContador()
		{
			Console.WriteLine("Contador: " + Conta.Contador);
			Console.WriteLine("Zerando Contador...");
			Conta.Contador = 0;
		}
	}
}

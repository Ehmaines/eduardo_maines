using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Unidade4
{
	class TestaConta
	{
		private static void Main()
		{
			
			Conta c = new Conta();
			Console.WriteLine("Conta número: " + c.numeroConta);
			Conta c1 = new Conta();
			Console.WriteLine("Conta número: " + c1.numeroConta);
			Conta.ZeraContador();
			Console.WriteLine("Contador: " + Conta.Contador);

			Console.ReadLine();
		}
	}
}

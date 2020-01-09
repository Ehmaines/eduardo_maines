using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Unidade02.Orientacao_a_Objetos
{
	class TestaConta
	{
		private static void Main_()
		{
			//Conta c1 = new Conta(a);

			//Console.WriteLine(c1.numero);
			//Console.WriteLine(c1.saldo);
			//Console.WriteLine(c1.limite);
			//c1.numero = 12345;
			//c1.saldo = 1000.0;
			//c1.limite = 500.0;

			//Conta c2 = new Conta();
			//c2.numero = 99880;
			//c2.saldo = 1200.0;
			//c2.limite = 650.0;

			//Console.WriteLine(c1.numero);
			//Console.WriteLine(c1.saldo);
			//Console.WriteLine(c1.limite);

			//Console.WriteLine(c2.numero);
			//Console.WriteLine(c2.saldo);
			//Console.WriteLine(c2.limite);

			Conta origem = new Conta(31);
			origem.saldo = 1000;
			Conta destino = new Conta(324);

			origem.transferir(destino, 125);

			Console.WriteLine(origem.saldo);
			Console.WriteLine(destino.saldo);

			Console.ReadLine();
		}
	}
}

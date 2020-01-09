using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Unidade02.Orientacao_a_Objetos.Complementar
{
	class TestaConta
	{
		private static void Main()
		{
			Conta c = new Conta();
			c.numero = 12412;
			c.saldo = 1900;
			c.limite = 750;

			while (true)
			{
				Console.WriteLine("0 - Sair");
				Console.WriteLine("1 - Depositar");
				Console.WriteLine("2 - Sacar");
				Console.WriteLine("3 - Imprimir Extrato");

				Console.Write("Sua Opção: ");
				int op = int.Parse(Console.ReadLine());

				if(op == 0)
				{
					break;
				}
				else if(op == 1)
				{
					Console.WriteLine("Valor: ");
					int valor = int.Parse(Console.ReadLine());
					c.Depositar(valor);

				}
				else if(op == 2)
				{
					Console.WriteLine("Valor: ");
					int valor = int.Parse(Console.ReadLine());
					c.Sacar(valor);
				}
				else if(op == 3)
				{
					c.ImprimirExtrato();
				}
			}
		}
	}
}

using Orientacao_a_Objetos;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Unidade02.Orientacao_a_Objetos
{
	class TestaCliente
	{
		private static void Main_()
		{
			Cliente c1 = new Cliente();
			c1.nome = "Eduardo";
			c1.id = 1;

			Cliente c2 = new Cliente();
			c2.nome = "Mário";
			c2.id = 2;

			Console.WriteLine(c1.nome);
			Console.WriteLine(c1.id);

			Console.WriteLine(c2.nome);
			Console.WriteLine(c2.id);

			Console.ReadLine();
		}
	}
}

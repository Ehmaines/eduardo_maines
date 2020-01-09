using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Unidade02.Orientacao_a_Objetos
{
	class TestaAluno
	{
		private static void Main_()
		{
			Aluno a1 = new Aluno();
			Aluno a2 = new Aluno();

			a1.Nome = "Eduardo Maines";
			a1.RG = 98023900;
			a1.DataNascimento = "27/10/2000";

			a2.Nome = "Felipe Maines";
			a2.RG = 5444312;
			a2.DataNascimento = "19/08/2003";

			Console.WriteLine(a1.Nome);
			Console.WriteLine(a1.RG);
			Console.WriteLine(a1.DataNascimento);

			Console.WriteLine(a2.Nome);
			Console.WriteLine(a2.RG);
			Console.WriteLine(a2.DataNascimento);

			Console.ReadLine();
		}
		 
	}
}

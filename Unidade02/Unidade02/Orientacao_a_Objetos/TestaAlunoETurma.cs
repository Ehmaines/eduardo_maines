using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Unidade02.Orientacao_a_Objetos
{
	class TestaAlunoETurma
	{
		private static void Main_()
		{
			Aluno a = new Aluno();
			a.Nome = "Eduardo";
			a.RG = 4123412;
			a.DataNascimento = "10/10/2000";

			Turma t = new Turma();
			t.periodo = 1;
			t.serie = "2 Serie";
			t.sigla = "2A";
			t.tipoEnsino = "Exatas";

			a.turma = t;

			Console.WriteLine(a.Nome);
			Console.WriteLine(a.RG);
			Console.WriteLine(a.DataNascimento);
			Console.WriteLine(a.turma.sigla);
			Console.ReadLine();

		}
	}
}

using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Unidade03.Arrays.ExercicioFixacao
{
	class OrdenaValores
	{
		private static void Main_()
		{
			string[] nomes = new string[] { "Eduardo", "Mario", "Leticia", "Felipe" };
			Array.Sort(nomes);

			foreach(var nome in nomes)
			{
				Console.WriteLine(nome);
			}
			Console.ReadLine();
		}
	}
}

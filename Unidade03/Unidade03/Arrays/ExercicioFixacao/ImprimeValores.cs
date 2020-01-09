using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Unidade03.Arrays.ExercicioFixacao
{
	class ImprimeValores
	{
		private static void Main_()
		{ 
		int[] numeros = new int[] { 21, 738, 34, 97, 100, 42 };
		foreach(var numero in numeros)
			{
				Console.WriteLine(numero);
			}
			Console.ReadLine();
		}
	}
}

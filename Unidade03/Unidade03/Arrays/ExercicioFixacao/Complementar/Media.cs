using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Unidade03.Arrays.ExercicioFixacao.Complementar
{
	class Media
	{
		private static void Main_()
		{
			double[] numeros = new double[5];
			double soma = 0;
			for (int i = 0; i < 5; i++)
			{
				Console.WriteLine("Digite um numero: ");
				double numero = double.Parse(Console.ReadLine());
				numeros[i] = numero;
			}
			for (int i = 0; i < numeros.Length; i++)
			{
				
				soma += numeros[i];
			}
			double media = soma / numeros.Length;
			Console.WriteLine(media);
			Console.ReadLine();
			
		}
	}
}

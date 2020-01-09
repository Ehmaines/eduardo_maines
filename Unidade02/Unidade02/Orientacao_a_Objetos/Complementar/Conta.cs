using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Unidade02.Orientacao_a_Objetos.Complementar
{
	class Conta
	{
		public int numero;
		public double saldo;
		public double limite;

		public void Depositar(double valor)
		{
			this.saldo += valor;
		}
		public void Sacar(double valor)
		{
			this.saldo -= valor;
		}
		public void ImprimirExtrato()
		{
			Console.WriteLine("Saldo: " + this.saldo);
		}
	}
}

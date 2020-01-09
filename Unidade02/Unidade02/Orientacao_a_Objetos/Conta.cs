using Bancos_agencia;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Unidade02
{
	class Conta
	{
		public int numero;
		public double saldo;
		public double limite = 100.0;

		public Agencia agencia;

		//public Conta(int numero)
		//{
		//	this.numero = numero;
		//}

		public Conta(int numero)
		{
			this.numero = numero;
		}

		public Conta(int numero, double limite) : this(numero)
		{
			this.limite = limite;
		}
		public void transferir(Conta destino, double valor)
		{
			this.saldo -= valor;
			destino.saldo += valor;
		}

	}
}

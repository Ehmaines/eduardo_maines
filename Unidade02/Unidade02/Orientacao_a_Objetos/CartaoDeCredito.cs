using Orientacao_a_Objetos;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Cartao
{
	class CartaoDeCredito
	{
		public int numero;
		public string validade;

		public Cliente cliente;

		public CartaoDeCredito(int numero)
		{
			this.numero = numero;
		}
	}
}

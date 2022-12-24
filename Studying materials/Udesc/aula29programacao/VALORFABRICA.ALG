Algoritmo "semnome"
// Disciplina   : [Linguagem e Lógica de Programação]
// Professor   : Antonio Carlos Nicolodi 
// Descrição   : Aqui você descreve o que o programa faz! (função)
// Autor(a)    : Nome do(a) aluno(a)
// Data atual  : 29/09/2022
Var
// Seção de Declarações das variáveis 
   valor_de_fabrica: real
   aliquota_imposto: real
   margem_revenda: real
   valor_final: real

Inicio
// Seção de Comandos, procedimento, funções, operadores, etc... 
escreval ("Este algoritmo calcula o valor final de um veículo")
   escreval ("Qual o valor de fábrica?")
   leia(valor_de_fabrica)
   aliquota_imposto <- 0.45
   margem_revenda <- 0.28
   valor_final <- (valor_de_fabrica * aliquota_imposto) + (valor_de_fabrica * margem_revenda) + valor_de_fabrica
   escreval ("A margem de revenda é 28%, e o imposto  é de 45%, ambos incidem diretamente sobre o Valor de Fábrica, portanto o Valor Final é de: R$" , valor_final)

Fimalgoritmo
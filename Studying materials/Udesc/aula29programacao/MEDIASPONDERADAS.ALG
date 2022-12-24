Algoritmo "mediasponderadas"
// Disciplina   : [Linguagem e Lógica de Programação]
// Professor   : Antonio Carlos Nicolodi 
// Descrição   : Aqui você descreve o que o programa faz! (função)
// Autor(a)    : Nome do(a) aluno(a)
// Data atual  : 29/09/2022
Var
// Seção de Declarações das variáveis
  nota1: real
  nota2: real
  nota3: real
  nomea: caractere
  media: real

Inicio
// Seção de Comandos, procedimento, funções, operadores, etc... 
   escreval ("Qual seu nome?")
   leia(nomea)
   escreval ("Nota 1a prova")
   leia(nota1)
   escreval ("Nota 2a prova")
   leia(nota2)
   escreval ("Nota 3a prova")
   leia(nota3)
   escreval("Sendo o peso da 1a prova 2, da 2a prova 3 e da 3a prova 5.")
   media<- ((nota1*2)+(nota2*3)+(nota3*5))/10)
   escreval("A media do aluno " , nomea, " é: " , media)

Fimalgoritmo
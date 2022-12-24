Algoritmo "semnome"
// Disciplina   : [Linguagem e Lógica de Programação]
// Professor   : Antonio Carlos Nicolodi 
// Descrição   : Aqui você descreve o que o programa faz! (função)
// Autor(a)    : Nome do(a) aluno(a)
// Data atual  : 30/09/2022
Var
// Seção de Declarações das variáveis 
   salario:  real
   inss: real
   aliquotainss: real
   aliquotairrf: real

Inicio
// Seção de Comandos, procedimento, funções, operadores, etc... 
   escreval("Informe o seu salario: ")
   leia(salario)
   se (salario <= 1212) entao aliquotainss <- 0.075
      senao
           se (salario > 1212) E (salario <= 2427.35) entao aliquotainss <- 0.09
      senao
           se(salario > 2427.35) E (salario <= 3641.03) entao aliquotainss <- 0.12
      senao
           se (salario > 3641) entao aliquotainss <- 0.14
           fimse
           fimse
           fimse
           fimse
      escreval("O seu salario liquido é de: ", salario)

Fimalgoritmo
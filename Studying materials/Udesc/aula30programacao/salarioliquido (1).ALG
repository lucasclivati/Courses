Algoritmo "semnome"
// Disciplina   : [Linguagem e Lógica de Programação]
// Professor   : Antonio Carlos Nicolodi 
// Descrição   : Aqui você descreve o que o programa faz! (função)
// Autor(a)    : Nome do(a) aluno(a)
// Data atual  : 30/09/2022
Var
// Seção de Declarações das variáveis 
   salario :  real
   inss : real
   aliquotainss : real
   aliquotairrf : real
   salario_para_faixa_irrf: real
   salario_liquido: real
   parcela_dedutivel: real
   

Inicio
// Seção de Comandos, procedimento, funções, operadores, etc... 
   escreval("Informe o seu salario: ")
   leia(salario)
   se (salario <= 1212) entao
    aliquotainss <- 0.075
    senao
         se (salario > 1212) E (salario <= 2427.35) entao
           aliquotainss <- 0.09
           senao
                se(salario > 2427.35) E (salario <= 3641.03) entao
           aliquotainss <- 0.12
                senao
                (salario > 3641) entao
                aliquotainss <- 0.14
                fimse
         fimse
   fimse
           salario_para_faixa_irrf <- salario - (salario * aliquotainss)
           
   se (salario_para_faixa_irrf <= 1903.98) entao
    aliquotairff <- 0
    parcela_dedutivel <- 0
      senao
           se (salario_para_faixa_irrf >= 1903.99) E (salario_para_faixa_irrf <= 2826.65) entao
           aliquotairrf <- 0.075
           parcela_dedutivel <- 142.80
      senao
           se(salario_para_faixa_irrf > 2826.66) E
           (salario_para_faixa_irrf <= 3751.05) entao
           aliquotairrf <- 0.15
           parcela_dutivel <- 354.80
      senao
           se(salario_para_faixa_irrf >= 3751.06) E
           (salario_para_faixa_irrf <=4664.68)  entao
            aliquotairff <- 0.225
            parcela_dedutivel <- 636.13
             senao
           (salario_para_faixa_irrf > 4664.68) entao
            aliquotairff <- 0.275
            parcela_dedutivel 869.36
           fimse
           fimse
           fimse
           fimse
              salario_liquido <- salario_para_faixa_irrf - ((salario_para_faixa_irrf * aliquotairrf)- parcela_dedutivel)
      escreval("O seu salario liquido é de: ", salario_liquido)


Fimalgoritmo
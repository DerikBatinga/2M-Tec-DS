package com.mycompany.menucalculadora;
/**
 *
 * @author d3
 */
public class MenuCalculadora {
    private Calculadora calculadora;
    private int opcao;
    private ConversorNumeros conversor;
    private EntradaSaidaDados io;
    
    public MenuCalculadora(){
    this.calculadora = new Calculadora();
    this.opcao = -1;
    this.conversor = new ConversorNumeros();
    this.io = new EntradaSaidaDados();
    }
    
    public void executarCalculadora(){
        do {
            this.executarMenuPrincipal();
            this.avaliarOpcaoEscolhida();
        } while (this.opcao != 5);
    }

    private void executarMenuPrincipal(){
    String mensagemMenu = "Selecione uma opcao:"
            +"\n 1-Somar"
            +"\n 2-Subtrair"
            +"\n 3-Multiplicar"
            +"\n 4-Dividir"
            +"\n 5-Sair";
    String entradaDados = io.entradaDados(mensagemMenu);
    this.opcao = conversor.StringToInt(entradaDados);
    }
    
    public void avaliarOpcaoEscolhida(){
    String saida;
    double num1 = 0, num2 = 0;
        if (this.opcao >= 1 && this.opcao <= 4) {
            String mensagemEntrada = "Digite o primeiro numero: ";
            num1 = conversor.stringToDouble(io.entradaDados(mensagemEntrada));
            calculadora.setNumero01(num1);
            
            mensagemEntrada = "Digite o segundo numero: ";
            num2 = conversor.stringToDouble(io.entradaDados(mensagemEntrada));
            calculadora.setNumero02(num2);
            
            switch(this.opcao){
                case 1:
                    calculadora.somar ();
                    saida = "Resultado:" + calculadora.getResultado();
                    io.saidaDados(saida);
                 break;
                case 2:
                    calculadora.subtracao ();
                    saida = "Resultado:" + calculadora.getResultado();
                    io.saidaDados(saida);
                 break;
                case 3:
                    calculadora.multiplicacao ();
                    saida = "Resultado:" + calculadora.getResultado();
                    io.saidaDados(saida);
                 break;
                case 4:
                    calculadora.divisao ();
                    saida = "Resultado:" + calculadora.getResultado();
                    io.saidaDados(saida);
                 break;
                      case 5:
                    calculadora.sair();
                 break;
                default:
                    saida = "Numero inserido invalido:";
                    io.saidaDados(saida);
                 break;
            }
        }
    }
}


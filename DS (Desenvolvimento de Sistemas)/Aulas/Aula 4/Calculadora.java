package com.mycompany.calculadora;
import javax.swing.JOptionPane;
/**
 *
 * @author d3
 */
public class Calculadora {
static void menu(){
JOptionPane.showMessageDialog(null,"1 – Soma\n" +
"2 – Subtração\n" +
"3 – Divisão\n" +
"4 – Multiplicação\n" +
"5 – Resto da Divisão\n" +
"6 – Dobro\n" +
"7 – Quadrado\n" +
"8 – Cubo\n" +
"9 – Raiz Quadrada\n" +
"0 – Sair");
}
static int lerValor(){
int inserido = Integer.parseInt(JOptionPane.showInputDialog("Insira um valor:"));

return inserido;
}
static void soma(){
     float n1 =  Float.parseFloat(JOptionPane.showInputDialog("Digite o valor do primeiro numero:"));
     float n2 =  Float.parseFloat(JOptionPane.showInputDialog("Digite o valor do segundonumero:"));
     float resultado = n1+n2;
     JOptionPane.showMessageDialog(null,"Resultado"+resultado);
}
static void subtracao(){
     float n1 =  Float.parseFloat(JOptionPane.showInputDialog("Digite o valor do numero que ira ser subtraido:"));
     float n2 =  Float.parseFloat(JOptionPane.showInputDialog("Digite o valor do numero que ira subtrair:"));
     float resultado = n1-n2;
     JOptionPane.showMessageDialog(null,"Resultado"+resultado);
}
static void divisao(){
     float n1 =  Float.parseFloat(JOptionPane.showInputDialog("Digite o valor do numero que sera dividido:"));
     float n2 =  Float.parseFloat(JOptionPane.showInputDialog("Digite o valor do numero que ira dividir:"));
     float resultado = n1/n2;  
     JOptionPane.showMessageDialog(null,"Resultado"+resultado);
}
static void multiplicacao(){
     float n1 =  Float.parseFloat(JOptionPane.showInputDialog("Digite o valor do numero que sera multiplicado:"));
     float n2 =  Float.parseFloat(JOptionPane.showInputDialog("Digite o valor do numero que multiplicara:"));
     float resultado = n1*n2;
     JOptionPane.showMessageDialog(null,"Resultado"+resultado);
}
static void modulo(){
     float n1 =  Float.parseFloat(JOptionPane.showInputDialog("Digite o valor do numero:"));
     float n2 =  Float.parseFloat(JOptionPane.showInputDialog("Digite o valor do modulo:"));
     float resultado = n1%n2;
     JOptionPane.showMessageDialog(null,"Resultado"+resultado);
}
static void dobro(){
     float n1 =  Float.parseFloat(JOptionPane.showInputDialog("Digite o valor do numero:"));
     float resultado = n1*2;
     JOptionPane.showMessageDialog(null,"Resultado"+resultado);
}
static void quadrado(){
     double n1 =  Double.parseDouble(JOptionPane.showInputDialog("Digite o valor do numero:"));
     double resultado = Math.pow(n1,2);
     JOptionPane.showMessageDialog(null,"Resultado"+resultado);
}
static void cubo(){
     double n1 =  Double.parseDouble(JOptionPane.showInputDialog("Digite o valor do numero:"));
     double resultado = Math.pow(n1,3);
     JOptionPane.showMessageDialog(null,"Resultado"+resultado);
}
static void raizQuadrada(){
     double n1 =  Double.parseDouble(JOptionPane.showInputDialog("Digite o valor do numero:"));
     double resultado = Math.sqrt(n1);
     JOptionPane.showMessageDialog(null,"Resultado"+resultado);
}
    public static void main(String[] args) {
     int escolha = 1;
        
        
        while (escolha !=0){
          menu();
          escolha = lerValor();
            switch (escolha) {
                case 1:
                    soma();
                 break;
                case 2:
                    subtracao();
                 break;
                case 3:
                    divisao();
                 break;
                case 4:
                    multiplicacao();
                 break;
                case 5:
                    modulo();
                 break;
                case 6:
                    dobro();
                 break;
                case 7:
                    quadrado();
                 break;
                case 8:
                    cubo();
                 break;
                case 9:
                    raizQuadrada();
                 break;
                case 0:
                    JOptionPane.showMessageDialog(null,"Saindo do programa...");
                 break;
                default:
                  JOptionPane.showMessageDialog(null,"Numero inserido invalido!");
                 break;
            }
        }      
    }
}

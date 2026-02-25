package com.mycompany.tamanhostring;
import javax.swing.JOptionPane;

/**
 *
 * @author d3
 */
public class TamanhoString {

    public static void main(String[] args) {
          //atribuindo o valor de tamanho do valor retornado de verTam
        int tamanho = digitarValor();
          //mostrando valor resultado
        JOptionPane.showMessageDialog(null,"Tamanho:"+ tamanho);
    }
    static int digitarValor(){
       String p;
         //pedindo a palavra para verificar
       p = JOptionPane.showInputDialog("Digite uma palavra:");
         //retornando o valor para tamanho conforme o resultado de verTam
       return verTam(p);
    }
    
    static int verTam(String x){
          //verificando e devolvendo o valor para digitarValor
       return x.length();
    }
}

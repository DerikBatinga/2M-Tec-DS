package com.mycompany.calculandomedia;
import javax.swing.JOptionPane;

/**
 *
 * @author d3
 */
public class CalculandoMedia {

    static float lerNota(){
    float nota = Float.parseFloat(JOptionPane.showInputDialog("Digite o valor da primeira nota:"));
    return nota;
    }
    
    static float calcularMedia(float n, float n1){
    float calculo = (n+n1)/2;
            
    return calculo;
    }
    
    public static void main(String[] args) {
        float nota1 = lerNota();
        float nota2 = lerNota();
        
        float resultado = calcularMedia(nota1,nota2);
        
        if (resultado >= 7) {
            JOptionPane.showMessageDialog(null,"Voce foi aprovado!:\nNota Final:"+resultado);
        }
        else{
        JOptionPane.showMessageDialog(null,"Voce foi reprovado!:\nNota Final:"+resultado);
        }
    }
}

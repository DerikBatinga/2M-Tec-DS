package com.mycompany.menucalculadora;
import javax.swing.JOptionPane;
/**
 *
 * @author d3
 */

public class EntradaSaidaDados {
    public String entradaDados(String mensagemEntrada){
          return JOptionPane.showInputDialog(mensagemEntrada);
    }
    
    public void saidaDados(String mensagemSaida){
    JOptionPane.showMessageDialog(null,mensagemSaida);
    }
}

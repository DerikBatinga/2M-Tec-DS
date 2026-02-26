/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 */

package com.mycompany.exemplopessoa;

import javax.swing.JOptionPane;

/**
 *
 * @author Admin
 */
public class ExemploPessoa {

    public static void main(String[] args) {
       Pessoa p1 = new Pessoa();
       
       p1.nome = "Gingisdam";
       p1.sexo = "M";
       p1.pais = "Greece";
       
       JOptionPane.showMessageDialog(null,"Nome:"+p1.nome+"Sexo:"+p1.sexo+"País:"+p1.pais);
              
       p1.pessoaAnda();
       p1.pessoaFala();
       p1.pessoaCorre();
       p1.pessoaEstuda();
       p1.pessoaBrinca();     
       

    }
}

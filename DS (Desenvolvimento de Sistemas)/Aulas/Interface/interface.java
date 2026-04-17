//TIP To <b>Run</b> code, press <shortcut actionId="Run"/> or
// click the <icon src="AllIcons.Actions.Execute"/> icon in the gutter.

import javax.swing.*; //Para fazer a janela
import java.awt.*; //Para colocar cor
public class primeiraJanela extends JFrame{
    JLabel titulo,rotulo1,rotulo2,rotulo3,rotulo4,rotulo5,rotulo6,rotulo7;
    JTextField texto1,texto2,texto3,texto4,texto5,texto6,texto7;
    public primeiraJanela(){

        super("Formulário de cadastro");

        Container tela = getContentPane();
        tela.setBackground(Color.lightGray);
        setLayout(null);

        titulo = new JLabel("Cadastro do cliente");

        rotulo1 = new JLabel("Nome");
        rotulo2 = new JLabel("CPF");
        rotulo3 = new JLabel("RG");
        rotulo4 = new JLabel("Endereço");
        rotulo5 = new JLabel("Cidade");
        rotulo6 = new JLabel ("Estado");
        rotulo7 = new JLabel("CEP");

        texto1 = new JTextField();
        texto2 = new JTextField();
        texto3 = new JTextField();
        texto4 = new JTextField();
        texto5 = new JTextField();
        texto6 = new JTextField();
        texto7 = new JTextField();

        titulo.setBounds(170,20,200,20);
        titulo.setForeground(Color.red);
        titulo.setFont(new Font("Arial",Font.BOLD,18));

        rotulo1.setBounds(50,50,100,10);
        rotulo2.setBounds(50,100,100,10);
        rotulo3.setBounds(50,150,100,10);
        rotulo4.setBounds(50,200,100,10);
        rotulo5.setBounds(50,250,100,10);
        rotulo6.setBounds(50,300,100,10);
        rotulo7.setBounds(50,350,100,10);

        texto1.setBounds(50,65,300,20);
        texto2.setBounds(50,115,75,20);
        texto3.setBounds(50,165,50,20);
        texto4.setBounds(50,215,300,20);
        texto5.setBounds(50,265,250,20);
        texto6.setBounds(50,315,200,20);
        texto7.setBounds(50,365,50,20);

        tela.add(titulo);
        tela.add(rotulo1);
        tela.add(rotulo2);
        tela.add(rotulo3);
        tela.add(rotulo4);
        tela.add(rotulo5);
        tela.add(rotulo6);
        tela.add(rotulo7);

        tela.add(texto1);
        tela.add(texto2);
        tela.add(texto3);
        tela.add(texto4);
        tela.add(texto5);
        tela.add(texto6);
        tela.add(texto7);
        setSize(500,500);
        setVisible(true);
        setLocationRelativeTo(null);
    }
    void main() {
        primeiraJanela janela = new primeiraJanela();
        janela.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
    }

//Herança, dependencia e associação
    //psvm Cria uma main :o
    //setbound width, height, largura, comprimento
}
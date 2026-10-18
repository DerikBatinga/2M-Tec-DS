//package org.example;
//
//import javax.swing.*;
//import java.awt.*;
//
//public class JList extends JFrame {
//    private JList list;
//    String[] estados = {"Rio de Janeiro","São Paulo", "Acre","","","","",""};
//    JButton exibir;
//    JLabel rotulo;
//
//    public JList(String[] estados){
//        super("JList-Exemplo");
//        Container container = getContentPane();
//        setLayout(null);
//
//        exibir = new JButton("Exibir");
//        rotulo = new JLabel("Rotulo");
//        list = new JList(this.estados);
//        list.setVisibleRowCount(5);
//
//        JScrollPane painelScroll = new JScrollPane(list);
//        list.setSelectionMode(ListSectionModel.MULTIPLE_INTERVAL_SELECTION);
//
//        setSize(420,200);
//        setVisible(true);
//    }
//}

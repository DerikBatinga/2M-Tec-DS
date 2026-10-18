package org.example.Exercicios2;

import javax.swing.*;
import java.awt.*;
import java.util.ArrayList;
import java.util.Collections;
import java.util.List;

public class TelaCadastrado extends JFrame{
        private JLabel
                Lcodigo,Lnome,Lendereco,Lbairro,Lcidade,Lestado,Lcep,Lsexo,Lcelular,Ltelefone,Laniversario,Lcadastro,
                Rcodigo,Rnome,Rendereco,Rbairro,Rcidade,Restado,Rcep,Rsexo,Rcelular,Rtelefone,Raniversario,Rcadastro;
        private JButton Bvoltar;

        private List<JLabel> listaLabels = new ArrayList<>();
        private List<JLabel> listaRespostas = new ArrayList<>();


        public TelaCadastrado(TransmissaoDados transDados){
            super("Cadastro");
            setLayout(null);
            Container tela = getContentPane();

            this.Lcodigo = new JLabel("Código do cliente:");
            this.Lnome = new JLabel("Nome completo:");
            this.Lendereco = new JLabel("Endereço:");
            this.Lbairro = new JLabel("Bairro:");
            this.Lcidade = new JLabel("Cidade:");
            this.Lestado = new JLabel("Estado:");
            this.Lcep = new JLabel("CEP:");
            this.Lsexo = new JLabel("Sexo:");
            this.Lcelular = new JLabel("Celular:");
            this.Ltelefone = new JLabel("Telefone:");
            this.Laniversario = new JLabel("Aniversario:");
            this.Lcadastro = new JLabel("Cadastro:");
            Collections.addAll(listaLabels,Lcodigo,Lnome,Lendereco,Lbairro,Lcidade,Lestado,Lcep,Lsexo,Lcelular,Ltelefone,Laniversario,Lcadastro);

            this.Rcodigo = new JLabel(String.valueOf(transDados.codigo));
            this.Rnome = new JLabel(transDados.nome);
            this.Rendereco = new JLabel(transDados.endereco);
            this.Rbairro = new JLabel(transDados.bairro);
            this.Rcidade = new JLabel(transDados.cidade);
            this.Restado = new JLabel(transDados.estado.toString());
            this.Rcep = new JLabel(transDados.cep);
            this.Rsexo = new JLabel(String.valueOf(transDados.sexo)); //Erro aqui?
            this.Rcelular = new JLabel(transDados.celular);
            this.Rtelefone = new JLabel(transDados.telefone);
            this.Raniversario = new JLabel(transDados.dataAniversario);
            this.Rcadastro = new JLabel(transDados.dataCadastro);
            Collections.addAll(listaRespostas, Rcodigo, Rnome, Rendereco, Rbairro, Rcidade, Restado, Rcep, Rsexo, Rcelular, Rtelefone, Raniversario, Rcadastro);

            this.Bvoltar = new JButton("Sair");

            this.Lcodigo.setBounds(40,20,150,20);
            this.Lnome.setBounds(40,40,150,20);
            this.Lendereco.setBounds(40,60,150,20);
            this.Lbairro.setBounds(40,80,150,20);
            this.Lcidade.setBounds(40,100,150,20);
            this.Lestado.setBounds(40,120,150,20);
            this.Lcep.setBounds(40,140,150,20);
            this.Lsexo.setBounds(40,160,150,20);
            this.Lcelular.setBounds(40,180,150,20);
            this.Ltelefone.setBounds(40,200,150,20);
            this.Laniversario.setBounds(40,220,150,20);
            this.Lcadastro.setBounds(40,240,150,20);

            this.Rcodigo.setBounds(250,20,150,20);
            this.Rnome.setBounds(250,40,150,20);
            this.Rendereco.setBounds(250,60,150,20);
            this.Rbairro.setBounds(250,80,150,20);
            this.Rcidade.setBounds(250,100,150,20);
            this.Rcep.setBounds(250,140,150,20);
            this.Rcelular.setBounds(250,180,150,20);
            this.Rtelefone.setBounds(250,200,150,20);
            this.Raniversario.setBounds(250,220,150,20);
            this.Rcadastro.setBounds(250,240,150,20);

            this.Restado.setBounds(250,120,150,20);
            this.Rsexo.setBounds(250,160,150,20);

            this.Bvoltar.setBounds(170,270,100,20);

            this.Bvoltar.addActionListener(e->dispose());

            for (JLabel l : listaLabels){
                tela.add(l);
            }
            for (JLabel t: listaRespostas){
                tela.add(t);
            }
            tela.add(Bvoltar);

            setSize(450,400);
            setVisible(true);
            setLocationRelativeTo(null);
        }
    }
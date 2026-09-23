package org.example.Exercicios2;
import javax.swing.*;
import java.awt.*;
import java.util.Collections;
import java.util.List;
import java.util.ArrayList;

public class TelaCadastro extends JFrame {
    private JLabel Lcodigo, Lnome, Lendereco, Lbairro, Lcidade, Lestado, Lcep, Lsexo, Lcelular, Ltelefone, Laniversario, Lcadastro;
    private JTextField Tcodigo, Tnome, Tendereco, Tbairro, Tcidade, Tcep, Tcelular, Ttelefone, Taniversario, Tcadastro;
    private JComboBox<String> comboEstado;
    private JRadioButton RsexoM, RsexoF;
    private ButtonGroup grupoSexo;
    private JButton Bcadastrar, Blimpar, Bsair;
    private ImageIcon cadastrarIcon, limparIcon, sairIcon;

    private List<JLabel> listaLabels = new ArrayList<>();
    private List<JTextField> listaTfield = new ArrayList<>();
    private List<JButton> listaBtn = new ArrayList<>();

    String[] estados = {
            "Acre", "Alagoas", "Amapá", "Amazonas", "Bahia", "Ceará", "Distrito Federal",
            "Espírito Santo", "Goiás", "Maranhão", "Mato Grosso", "Mato Grosso do Sul",
            "Minas Gerais", "Pará", "Paraíba", "Paraná", "Pernambuco", "Piauí",
            "Rio de Janeiro", "Rio Grande do Norte", "Rio Grande do Sul", "Rondônia",
            "Roraima", "Santa Catarina", "São Paulo", "Sergipe", "Tocantins"
    };

    public TelaCadastro() {
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
        Collections.addAll(listaLabels, Lcodigo, Lnome, Lendereco, Lbairro, Lcidade, Lestado, Lcep, Lsexo, Lcelular, Ltelefone, Laniversario, Lcadastro);

        this.Tcodigo = new JTextField("XXXXX");
        this.Tnome = new JTextField("Nome e sobrenome");
        this.Tendereco = new JTextField("Rua (nome da rua)");
        this.Tbairro = new JTextField("Bairro (nome do bairro)");
        this.Tcidade = new JTextField("Cidade (nome da cidade)");
        this.Tcep = new JTextField("XXXXX-XXX");
        this.Tcelular = new JTextField("(XX)XXXXX-XXXX");
        this.Ttelefone = new JTextField("(XX)XXXXX-XXXX");
        this.Taniversario = new JTextField("XX/XX/XXXX");
        this.Tcadastro = new JTextField("XX/XX/XXXX");
        Collections.addAll(listaTfield, Tcodigo, Tnome, Tendereco, Tbairro, Tcidade, Tcep, Tcelular, Ttelefone, Taniversario, Tcadastro);

        this.RsexoM = new JRadioButton("M");
        this.RsexoF = new JRadioButton("F");

        this.grupoSexo = new ButtonGroup();
        this.grupoSexo.add(RsexoM);
        this.grupoSexo.add(RsexoF);

        JComboBox<String> comboEstado = new JComboBox<>(estados);
        comboEstado.setMaximumRowCount(4);

        cadastrarIcon = new ImageIcon("img/People.png");
        limparIcon = new ImageIcon("img/deleteArquive.png");
        sairIcon = new ImageIcon("img/Exit.png");

        this.Bcadastrar = new JButton("Cadastrar",cadastrarIcon);
        this.Blimpar = new JButton("Limpar",limparIcon);
        this.Bsair = new JButton("Sair",sairIcon);
        Collections.addAll(listaBtn, Bcadastrar, Blimpar, Bsair);

        this.Lcodigo.setBounds(40, 20, 150, 20);
        this.Lnome.setBounds(40, 40, 150, 20);
        this.Lendereco.setBounds(40, 60, 150, 20);
        this.Lbairro.setBounds(40, 80, 150, 20);
        this.Lcidade.setBounds(40, 100, 150, 20);
        this.Lestado.setBounds(40, 120, 150, 20);
        this.Lcep.setBounds(40, 140, 150, 20);
        this.Lsexo.setBounds(40, 160, 150, 20);
        this.Lcelular.setBounds(40, 180, 150, 20);
        this.Ltelefone.setBounds(40, 200, 150, 20);
        this.Laniversario.setBounds(40, 220, 150, 20);
        this.Lcadastro.setBounds(40, 240, 150, 20);

        this.Tcodigo.setBounds(250, 20, 150, 20);
        this.Tnome.setBounds(250, 40, 150, 20);
        this.Tendereco.setBounds(250, 60, 150, 20);
        this.Tbairro.setBounds(250, 80, 150, 20);
        this.Tcidade.setBounds(250, 100, 150, 20);
        this.Tcep.setBounds(250, 140, 150, 20);
        this.Tcelular.setBounds(250, 180, 150, 20);
        this.Ttelefone.setBounds(250, 200, 150, 20);
        this.Taniversario.setBounds(250, 220, 150, 20);
        this.Tcadastro.setBounds(250, 240, 150, 20);

        this.RsexoM.setBounds(250, 160, 60, 20);
        this.RsexoF.setBounds(310, 160, 60, 20);

        comboEstado.setBounds(250, 120, 150, 20);

        this.Bcadastrar.setBounds(50, 270, 110, 30);
        this.Blimpar.setBounds(160, 270, 110, 30);
        this.Bsair.setBounds(270, 270, 110, 30);

        this.Bcadastrar.addActionListener(e ->{
        try {
            for (JTextField campo : listaTfield) {
                if (campo.getText().trim().isEmpty()) {
                    throw new Exception("Existe campo em branco: " + campo.getName());
                }
            }
            TransmissaoDados transmissaoDados = new TransmissaoDados();
            transmissaoDados.codigo = Tcodigo.getText();
            transmissaoDados.nome = Tnome.getText();
            transmissaoDados.endereco = Tendereco.getText();
            transmissaoDados.bairro = Tbairro.getText();
            transmissaoDados.cidade = Tcidade.getText();
            transmissaoDados.estado = (String) comboEstado.getSelectedItem();;
            transmissaoDados.cep = Tcep.getText();
            transmissaoDados.sexo = RsexoM.isSelected() ? "M" : "F";
            transmissaoDados.celular = Tcelular.getText();
            transmissaoDados.telefone = Ttelefone.getText();
            transmissaoDados.dataAniversario = Taniversario.getText();
            transmissaoDados.dataCadastro = Tcadastro.getText();

            TelaCadastrado telaCadastrado = new TelaCadastrado(transmissaoDados);
        } catch (Exception exception) {
            TelaErro telaErro = new TelaErro();
        }
        });

        this.Blimpar.addActionListener(e->{
            this.Tcodigo.setText("");
            this.Tnome.setText("");
            this.Tendereco.setText("");
            this.Tbairro.setText("");
            this.Tcidade.setText("");
            this.Tcep.setText("");
            this.Tcelular.setText("");
            this.Ttelefone.setText("");
            this.Taniversario.setText("");
            this.Tcadastro.setText("");
        });

        this.Bsair.addActionListener(e->dispose());

        for (JLabel l : listaLabels) {
            tela.add(l);
        }
        for (JTextField t : listaTfield) {
            tela.add(t);
        }
        for (JButton b : listaBtn) {
            tela.add(b);
        }
        tela.add(comboEstado);
        tela.add(RsexoM);
        tela.add(RsexoF);

        setSize(450, 400);
        setVisible(true);
        setLocationRelativeTo(null);
    }
}
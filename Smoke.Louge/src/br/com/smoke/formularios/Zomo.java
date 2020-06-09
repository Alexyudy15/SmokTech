package br.com.smoke.formularios;

import java.awt.EventQueue;

import javax.swing.JInternalFrame;
import javax.swing.JComboBox;
import javax.swing.DefaultComboBoxModel;
import javax.swing.JCheckBox;
import javax.swing.JLabel;
import java.awt.Font;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;

import javax.swing.JFrame;
import javax.swing.JTextField;
import java.awt.BorderLayout;
import javax.swing.JTable;
import javax.swing.table.DefaultTableModel;
import javax.swing.ImageIcon;
import javax.swing.JScrollPane;

public class Zomo extends JInternalFrame {
	private JTextField textField;
	private JLabel lblNewLabel_1;
	private JTable table;
	private JLabel btnAdicionar;
	private JLabel btnDeletar;
	private JLabel btnPesquisar;
	private JLabel btnRecarregar;
	private JTextField txtId;
	private JTextField txtNomeEssencia;
	private JTextField txtValor;
	private JTextField txtQuantidade;
	public Zomo() {
		setClosable(true);
		setIconifiable(true);
		setTitle("Zomo");
		setBounds(0, 0, 536, 605);
		getContentPane().setLayout(null);
		
		/* Objetos e variaveis para trabalhar com o sql */
		Connection conexao = null;
		PreparedStatement pst = null;
		ResultSet rs = null;
		
		textField = new JTextField();
		textField.setBounds(10, 26, 304, 20);
		getContentPane().add(textField);
		textField.setColumns(10);
		
		lblNewLabel_1 = new JLabel("New label");
		lblNewLabel_1.setIcon(new ImageIcon(Zomo.class.getResource("/br/com/smoke/icones/pesquisar.png")));
		lblNewLabel_1.setBounds(324, 20, 38, 37);
		getContentPane().add(lblNewLabel_1);
		
		JScrollPane scrollPane = new JScrollPane();
		scrollPane.setBounds(20, 57, 293, 417);
		getContentPane().add(scrollPane);
		
		table = new JTable();
		table.setModel(new DefaultTableModel(
			new Object[][] {
				{null, null, null, null},
				{null, null, null, null},
				{null, null, null, null},
				{null, null, null, null},
				{null, null, null, null},
				{null, null, null, null},
				{null, null, null, null},
				{null, null, null, null},
				{null, null, null, null},
				{null, null, null, null},
				{null, null, null, null},
				{null, null, null, null},
				{null, null, null, null},
				{null, null, null, null},
				{null, null, null, null},
				{null, null, null, null},
				{null, null, null, null},
				{null, null, null, null},
				{null, null, null, null},
				{null, null, null, null},
				{null, null, null, null},
				{null, null, null, null},
				{null, null, null, null},
				{null, null, null, null},
				{null, null, null, null},
				{null, null, null, null},
				{null, null, null, null},
				{null, null, null, null},
				{null, null, null, null},
				{null, null, null, null},
				{null, null, null, null},
				{null, null, null, null},
				{null, null, null, null},
				{null, null, null, null},
				{null, null, null, null},
				{null, null, null, null},
				{null, null, null, null},
				{null, null, null, null},
				{null, null, null, null},
				{null, null, null, null},
				{null, null, null, null},
			},
			new String[] {
				"ID", "Ess\u00EAncias", "Valor", "Estoque"
			}
		));
		scrollPane.setViewportView(table);
		
scrollPane.setViewportView(table);
		
		JLabel label_1 = new JLabel("");
		label_1.setIcon(new ImageIcon(Adalya.class.getResource("/br/com/smoke/icones/create.png")));
		label_1.setBounds(30, 487, 72, 69);
		getContentPane().add(label_1);
		
		JLabel btnDeletar = new JLabel("");
		btnDeletar.setIcon(new ImageIcon(Adalya.class.getResource("/br/com/smoke/icones/delete.png")));
		btnDeletar.setBounds(413, 487, 72, 69);
		getContentPane().add(btnDeletar);
		
		JLabel btnPesquisar = new JLabel("");
		btnPesquisar.setIcon(new ImageIcon(Adalya.class.getResource("/br/com/smoke/icones/read.png")));
		btnPesquisar.setBounds(290, 487, 72, 69);
		getContentPane().add(btnPesquisar);
		
		JLabel btnRecarregar = new JLabel("");
		btnRecarregar.setIcon(new ImageIcon(Adalya.class.getResource("/br/com/smoke/icones/update.png")));
		btnRecarregar.setBounds(151, 487, 72, 69);
		getContentPane().add(btnRecarregar);
		
		txtId = new JTextField();
		txtId.setBounds(324, 101, 179, 20);
		getContentPane().add(txtId);
		txtId.setColumns(10);
		
		JLabel lblIdEssncia = new JLabel("ID Ess\u00EAncia");
		lblIdEssncia.setBounds(376, 76, 72, 14);
		getContentPane().add(lblIdEssncia);
		
		JLabel lblNomeEssncia = new JLabel("Nome Ess\u00EAncia");
		lblNomeEssncia.setBounds(364, 137, 94, 14);
		getContentPane().add(lblNomeEssncia);
		
		txtNomeEssencia = new JTextField();
		txtNomeEssencia.setBounds(324, 162, 179, 20);
		getContentPane().add(txtNomeEssencia);
		txtNomeEssencia.setColumns(10);
		
		txtValor = new JTextField();
		txtValor.setColumns(10);
		txtValor.setBounds(324, 230, 179, 20);
		getContentPane().add(txtValor);
		
		JLabel lblValorEssncia = new JLabel("Valor Ess\u00EAncia");
		lblValorEssncia.setBounds(377, 205, 108, 14);
		getContentPane().add(lblValorEssncia);
		
		txtQuantidade = new JTextField();
		txtQuantidade.setColumns(10);
		txtQuantidade.setBounds(324, 303, 179, 20);
		getContentPane().add(txtQuantidade);
		
		JLabel lblQuantidade = new JLabel("Quantidade");
		lblQuantidade.setBounds(376, 278, 95, 14);
		getContentPane().add(lblQuantidade);
		
	}

	/**
	 * Launch the application.
	 */
	public static void main(String[] args) {
		EventQueue.invokeLater(new Runnable() {
			public void run() {
				try {
					Zomo frame = new Zomo();
					frame.setVisible(true);
				} catch (Exception e) {
					e.printStackTrace();
				}
			}
		});
	}
		}

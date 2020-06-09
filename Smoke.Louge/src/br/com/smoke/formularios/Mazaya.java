package br.com.smoke.formularios;

import java.awt.EventQueue;

import javax.swing.JInternalFrame;
import javax.swing.JComboBox;
import javax.swing.DefaultComboBoxModel;
import javax.swing.JCheckBox;
import javax.swing.JLabel;
import javax.swing.JScrollPane;

import java.awt.Font;
import javax.swing.JFrame;
import javax.swing.JTextField;
import java.awt.BorderLayout;
import javax.swing.JTable;
import javax.swing.table.DefaultTableModel;
import javax.swing.ImageIcon;

public class Mazaya extends JInternalFrame {
	private JTextField textField;
	private JTable table;
	private JLabel lblNewLabel_1;
	public Mazaya() {
		setClosable(true);
		setIconifiable(true);
		setTitle("Mazaya");
		setBounds(0, 0, 536, 605);
		getContentPane().setLayout(null);
		
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

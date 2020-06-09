package br.com.smoke.formularios;

import java.awt.EventQueue;

import javax.swing.JInternalFrame;
import javax.swing.JTextField;
import java.awt.BorderLayout;
import javax.swing.JTable;
import javax.swing.table.DefaultTableModel;
import javax.swing.JLabel;
import javax.swing.ImageIcon;
import javax.swing.JFrame;
import javax.swing.JScrollPane;

public class Adalya extends JInternalFrame {
	private JTextField textField;
	private JTable table;

	/**
	 * Launch the application.
	 */
	public static void main(String[] args) {
		EventQueue.invokeLater(new Runnable() {
			public void run() {
				try {
					Adalya frame = new Adalya();
					frame.setVisible(true);
				} catch (Exception e) {
					e.printStackTrace();
				}
			}
		});
	}

	/**
	 * Create the frame.
	 */
	public Adalya() {
		setIconifiable(true);
		setClosable(true);
		setTitle("Adalya");
		setBounds(0, 0, 536, 605);
		getContentPane().setLayout(null);
		
		textField = new JTextField();
		textField.setBounds(10, 26, 304, 20);
		getContentPane().add(textField);
		textField.setColumns(10);
		
		JLabel label = new JLabel("");
		label.setBounds(324, 20, 32, 32);
		label.setIcon(new ImageIcon(Adalya.class.getResource("/br/com/smoke/icones/pesquisar.png")));
		getContentPane().add(label);
		
		JScrollPane scrollPane = new JScrollPane();
		scrollPane.setBounds(10, 55, 304, 430);
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
	
	
	
}

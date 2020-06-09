package br.com.smoke.formularios;

import java.awt.EventQueue;

import javax.swing.JInternalFrame;
import javax.swing.JLabel;
import javax.swing.JComboBox;
import javax.swing.JTextPane;
import javax.swing.ImageIcon;

public class Sobre extends JInternalFrame {

	/**
	 * Launch the application.
	 */
	public static void main(String[] args) {
		EventQueue.invokeLater(new Runnable() {
			public void run() {
				try {
					Sobre frame = new Sobre();
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
	public Sobre() {
		setClosable(true);
		setTitle("Sobre");
		setBounds(0, 0, 536, 605);
		getContentPane().setLayout(null);
		
		JLabel label = new JLabel("");
		label.setBounds(10, 68, 46, 14);
		getContentPane().add(label);
		
		JLabel label_1 = new JLabel("");
		label_1.setBounds(177, 127, 46, 14);
		getContentPane().add(label_1);
		
		JLabel lblVerso = new JLabel("Vers\u00E3o 1.0");
		lblVerso.setBounds(220, 366, 85, 14);
		getContentPane().add(lblVerso);
		
		JLabel lblNewLabel_1 = new JLabel("Todos os direitos reservados");
		lblNewLabel_1.setBounds(177, 391, 211, 14);
		getContentPane().add(lblNewLabel_1);
		
		JLabel lblDesenvolvidoEmJava = new JLabel("Desenvolvido em Java");
		lblDesenvolvidoEmJava.setBounds(187, 416, 217, 14);
		getContentPane().add(lblDesenvolvidoEmJava);
		
		JLabel lblBancoDeDados = new JLabel("Banco de Dados: MySQL Workbench");
		lblBancoDeDados.setBounds(160, 441, 284, 14);
		getContentPane().add(lblBancoDeDados);
		
		JLabel lblContatenos = new JLabel("Contate-nos: (11) 4508-2834");
		lblContatenos.setBounds(170, 466, 284, 14);
		getContentPane().add(lblContatenos);
		
		JLabel lblCopyright = new JLabel(" Copyright \u00A9 2018 Smoke Lounge");
		lblCopyright.setBounds(160, 491, 257, 14);
		getContentPane().add(lblCopyright);

	}
}

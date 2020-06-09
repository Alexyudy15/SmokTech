package br.com.smoke.formularios;

import java.awt.EventQueue;

import javax.swing.JInternalFrame;
import javax.swing.JCheckBox;
import java.awt.BorderLayout;
import javax.swing.JTextField;
import javax.swing.JLabel;
import javax.swing.ImageIcon;

public class Mesas extends JInternalFrame {
	private JTextField textField;
	private JTextField textField_1;
	private JTextField textField_2;
	private JTextField textField_5;
	private JTextField textField_3;
	private JTextField textField_4;
	private JTextField textField_6;
	private JTextField textField_7;
	private JTextField textField_8;
	private JTextField textField_9;
	private JTextField textField_10;
	private JTextField textField_11;
	private JTextField textField_12;
	private JTextField textField_13;
	private JTextField textField_14;
	private JTextField textField_15;
	private JTextField textField_16;
	private JTextField textField_17;
	private JTextField textField_18;
	private JTextField textField_19;
	private JTextField textField_20;
	private JTextField textField_21;
	private JLabel label;
	private JLabel lblHoraMarcada;
	private JTextField textField_22;
	private JTextField textField_23;
	private JTextField textField_24;
	private JTextField textField_25;
	private JTextField textField_26;
	private JTextField textField_27;
	private JTextField textField_28;
	private JTextField textField_29;
	private JTextField textField_30;
	private JTextField textField_31;
	private JTextField textField_32;
	private JTextField textField_33;
	private JTextField textField_34;
	private JTextField textField_35;

	/**
	 * Launch the application.
	 */
	public static void main(String[] args) {
		EventQueue.invokeLater(new Runnable() {
			public void run() {
				try {
					Mesas frame = new Mesas();
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
	public Mesas() {
		setTitle("Reservas");
		setClosable(true);
		setBounds(0, 0, 536, 605);
		getContentPane().setLayout(null);
		
		JCheckBox chckbxNewCheckBox = new JCheckBox("Mesa 1");
		chckbxNewCheckBox.setBounds(6, 105, 86, 23);
		getContentPane().add(chckbxNewCheckBox);
		
		JCheckBox chckbxMesa = new JCheckBox("Mesa 2");
		chckbxMesa.setBounds(6, 131, 86, 23);
		getContentPane().add(chckbxMesa);
		
		JCheckBox chckbxMesa_1 = new JCheckBox("Mesa 3");
		chckbxMesa_1.setBounds(6, 157, 86, 23);
		getContentPane().add(chckbxMesa_1);
		
		JCheckBox chckbxMesa_2 = new JCheckBox("Mesa 4");
		chckbxMesa_2.setBounds(6, 185, 86, 23);
		getContentPane().add(chckbxMesa_2);
		
		JCheckBox chckbxMesa_3 = new JCheckBox("Mesa 5");
		chckbxMesa_3.setBounds(6, 211, 86, 23);
		getContentPane().add(chckbxMesa_3);
		
		JCheckBox chckbxMesa_4 = new JCheckBox("Mesa 6");
		chckbxMesa_4.setBounds(6, 237, 86, 23);
		getContentPane().add(chckbxMesa_4);
		
		JCheckBox chckbxMesa_5 = new JCheckBox("Mesa 7");
		chckbxMesa_5.setBounds(6, 267, 86, 23);
		getContentPane().add(chckbxMesa_5);
		
		JCheckBox chckbxMesa_6 = new JCheckBox("Mesa 8");
		chckbxMesa_6.setBounds(6, 293, 86, 23);
		getContentPane().add(chckbxMesa_6);
		
		JCheckBox chckbxMesa_7 = new JCheckBox("Mesa 10");
		chckbxMesa_7.setBounds(6, 324, 86, 23);
		getContentPane().add(chckbxMesa_7);
		
		textField = new JTextField();
		textField.setBounds(422, 106, 51, 20);
		getContentPane().add(textField);
		textField.setColumns(10);
		
		textField_1 = new JTextField();
		textField_1.setBounds(326, 132, 86, 20);
		getContentPane().add(textField_1);
		textField_1.setColumns(10);
		
		textField_2 = new JTextField();
		textField_2.setText("");
		textField_2.setBounds(422, 132, 51, 20);
		getContentPane().add(textField_2);
		textField_2.setColumns(10);
		
		textField_5 = new JTextField();
		textField_5.setText("");
		textField_5.setBounds(326, 106, 86, 20);
		getContentPane().add(textField_5);
		textField_5.setColumns(10);
		
		textField_3 = new JTextField();
		textField_3.setText("");
		textField_3.setColumns(10);
		textField_3.setBounds(326, 158, 86, 20);
		getContentPane().add(textField_3);
		
		textField_4 = new JTextField();
		textField_4.setText("");
		textField_4.setColumns(10);
		textField_4.setBounds(326, 186, 86, 20);
		getContentPane().add(textField_4);
		
		textField_6 = new JTextField();
		textField_6.setText("");
		textField_6.setColumns(10);
		textField_6.setBounds(326, 212, 86, 20);
		getContentPane().add(textField_6);
		
		textField_7 = new JTextField();
		textField_7.setText("");
		textField_7.setColumns(10);
		textField_7.setBounds(326, 238, 86, 20);
		getContentPane().add(textField_7);
		
		textField_8 = new JTextField();
		textField_8.setText("");
		textField_8.setColumns(10);
		textField_8.setBounds(326, 268, 86, 20);
		getContentPane().add(textField_8);
		
		textField_9 = new JTextField();
		textField_9.setText("");
		textField_9.setColumns(10);
		textField_9.setBounds(326, 294, 86, 20);
		getContentPane().add(textField_9);
		
		textField_10 = new JTextField();
		textField_10.setText("");
		textField_10.setColumns(10);
		textField_10.setBounds(326, 325, 86, 20);
		getContentPane().add(textField_10);
		
		textField_11 = new JTextField();
		textField_11.setText("");
		textField_11.setColumns(10);
		textField_11.setBounds(326, 356, 86, 20);
		getContentPane().add(textField_11);
		
		textField_12 = new JTextField();
		textField_12.setText("");
		textField_12.setColumns(10);
		textField_12.setBounds(326, 387, 86, 20);
		getContentPane().add(textField_12);
		
		textField_13 = new JTextField();
		textField_13.setColumns(10);
		textField_13.setBounds(422, 158, 51, 20);
		getContentPane().add(textField_13);
		
		textField_14 = new JTextField();
		textField_14.setColumns(10);
		textField_14.setBounds(422, 186, 51, 20);
		getContentPane().add(textField_14);
		
		textField_15 = new JTextField();
		textField_15.setColumns(10);
		textField_15.setBounds(422, 212, 51, 20);
		getContentPane().add(textField_15);
		
		textField_16 = new JTextField();
		textField_16.setColumns(10);
		textField_16.setBounds(422, 238, 51, 20);
		getContentPane().add(textField_16);
		
		textField_17 = new JTextField();
		textField_17.setColumns(10);
		textField_17.setBounds(422, 268, 51, 20);
		getContentPane().add(textField_17);
		
		textField_18 = new JTextField();
		textField_18.setColumns(10);
		textField_18.setBounds(422, 294, 51, 20);
		getContentPane().add(textField_18);
		
		textField_19 = new JTextField();
		textField_19.setColumns(10);
		textField_19.setBounds(422, 325, 51, 20);
		getContentPane().add(textField_19);
		
		textField_20 = new JTextField();
		textField_20.setColumns(10);
		textField_20.setBounds(422, 356, 51, 20);
		getContentPane().add(textField_20);
		
		textField_21 = new JTextField();
		textField_21.setColumns(10);
		textField_21.setBounds(422, 387, 51, 20);
		getContentPane().add(textField_21);
		
		JLabel lblReservas = new JLabel("");
		lblReservas.setIcon(new ImageIcon(Mesas.class.getResource("/br/com/smoke/icones/reservas.JPG")));
		lblReservas.setBounds(346, 47, 115, 28);
		getContentPane().add(lblReservas);
		
		JLabel lblCliente = new JLabel("Cliente");
		lblCliente.setBounds(346, 86, 46, 14);
		getContentPane().add(lblCliente);
		
		JLabel lblMesa = new JLabel("Mesa");
		lblMesa.setBounds(435, 86, 46, 14);
		getContentPane().add(lblMesa);
		
		JCheckBox chckbxMesa_8 = new JCheckBox("Mesa 11");
		chckbxMesa_8.setBounds(6, 355, 86, 23);
		getContentPane().add(chckbxMesa_8);
		
		JCheckBox chckbxMesa_9 = new JCheckBox("Mesa 12");
		chckbxMesa_9.setBounds(6, 386, 86, 23);
		getContentPane().add(chckbxMesa_9);
		
		JCheckBox chckbxBistr = new JCheckBox("Bistr\u00F4 1");
		chckbxBistr.setBounds(110, 105, 97, 23);
		getContentPane().add(chckbxBistr);
		
		JCheckBox chckbxBistr_1 = new JCheckBox("Bistr\u00F4 2");
		chckbxBistr_1.setBounds(110, 131, 97, 23);
		getContentPane().add(chckbxBistr_1);
		
		JCheckBox chckbxBistr_2 = new JCheckBox("Bistr\u00F4 3");
		chckbxBistr_2.setBounds(110, 157, 97, 23);
		getContentPane().add(chckbxBistr_2);
		
		JCheckBox chckbxBistr_3 = new JCheckBox("Bistr\u00F4 4");
		chckbxBistr_3.setBounds(110, 183, 97, 23);
		getContentPane().add(chckbxBistr_3);
		
		JCheckBox chckbxBistr_4 = new JCheckBox("Bistr\u00F4 5");
		chckbxBistr_4.setBounds(110, 211, 97, 23);
		getContentPane().add(chckbxBistr_4);
		
		JCheckBox chckbxBistr_5 = new JCheckBox("Bistr\u00F4 6");
		chckbxBistr_5.setBounds(110, 237, 97, 23);
		getContentPane().add(chckbxBistr_5);
		
		JCheckBox chckbxBistr_6 = new JCheckBox("Bistr\u00F4 7");
		chckbxBistr_6.setBounds(110, 267, 97, 23);
		getContentPane().add(chckbxBistr_6);
		
		JCheckBox chckbxBistr_7 = new JCheckBox("Bistr\u00F4 8");
		chckbxBistr_7.setBounds(110, 293, 97, 23);
		getContentPane().add(chckbxBistr_7);
		
		label = new JLabel("");
		label.setIcon(new ImageIcon(Mesas.class.getResource("/br/com/smoke/icones/mesas2.JPG")));
		label.setBounds(6, 47, 169, 28);
		getContentPane().add(label);
		
		lblHoraMarcada = new JLabel("Hora marcada");
		lblHoraMarcada.setBounds(240, 86, 76, 14);
		getContentPane().add(lblHoraMarcada);
		
		textField_22 = new JTextField();
		textField_22.setText("");
		textField_22.setColumns(10);
		textField_22.setBounds(230, 106, 86, 20);
		getContentPane().add(textField_22);
		
		textField_23 = new JTextField();
		textField_23.setText("");
		textField_23.setColumns(10);
		textField_23.setBounds(230, 132, 86, 20);
		getContentPane().add(textField_23);
		
		textField_24 = new JTextField();
		textField_24.setText("");
		textField_24.setColumns(10);
		textField_24.setBounds(230, 158, 86, 20);
		getContentPane().add(textField_24);
		
		textField_25 = new JTextField();
		textField_25.setText("");
		textField_25.setColumns(10);
		textField_25.setBounds(230, 186, 86, 20);
		getContentPane().add(textField_25);
		
		textField_26 = new JTextField();
		textField_26.setText("");
		textField_26.setColumns(10);
		textField_26.setBounds(230, 212, 86, 20);
		getContentPane().add(textField_26);
		
		textField_27 = new JTextField();
		textField_27.setText("");
		textField_27.setColumns(10);
		textField_27.setBounds(230, 238, 86, 20);
		getContentPane().add(textField_27);
		
		textField_28 = new JTextField();
		textField_28.setText("");
		textField_28.setColumns(10);
		textField_28.setBounds(230, 268, 86, 20);
		getContentPane().add(textField_28);
		
		textField_29 = new JTextField();
		textField_29.setText("");
		textField_29.setColumns(10);
		textField_29.setBounds(230, 294, 86, 20);
		getContentPane().add(textField_29);
		
		textField_30 = new JTextField();
		textField_30.setText("");
		textField_30.setColumns(10);
		textField_30.setBounds(230, 325, 86, 20);
		getContentPane().add(textField_30);
		
		textField_31 = new JTextField();
		textField_31.setText("");
		textField_31.setColumns(10);
		textField_31.setBounds(230, 356, 86, 20);
		getContentPane().add(textField_31);
		
		textField_32 = new JTextField();
		textField_32.setText("");
		textField_32.setColumns(10);
		textField_32.setBounds(230, 387, 86, 20);
		getContentPane().add(textField_32);
		
		textField_33 = new JTextField();
		textField_33.setText("");
		textField_33.setColumns(10);
		textField_33.setBounds(230, 418, 86, 20);
		getContentPane().add(textField_33);
		
		textField_34 = new JTextField();
		textField_34.setText("");
		textField_34.setColumns(10);
		textField_34.setBounds(326, 418, 86, 20);
		getContentPane().add(textField_34);
		
		textField_35 = new JTextField();
		textField_35.setColumns(10);
		textField_35.setBounds(422, 418, 51, 20);
		getContentPane().add(textField_35);

	}
}

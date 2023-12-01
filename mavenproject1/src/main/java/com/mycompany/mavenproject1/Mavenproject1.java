/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 */

package com.mycompany.mavenproject1;

/**
 *
 * @author Miche
 */
import java.sql.*;
import java.util.logging.Level;
import java.util.logging.Logger;
public class Mavenproject1 {

    public static void main(String[] args) {
        String usuario = "root";
        String password = "";
        String url = "jdbc:mysql://localhost:3306:prueba";
        
        Connection conexion;
        Statement statement;
        ResultSet rs;
        
        try {
            Class.forName("com.mysql.cj.jdbc.Driver");
        } catch (ClassNotFoundException ex) {
            Logger.getLogger(Mavenproject1.class.getName()).log(Level.SEVERE, null, ex);
        }
        
        try {
            conexion = DriverManager.getConnection(url,usuario,password);
            statement = conexion.createStatement();
            statement.executeUpdate("INSERT INTO CLIENTES(ID_CLIENTE,PASSWORD) VALUES ('123','ABC123')");
            rs = statement.executeQuery("SELECT * FROM CLIENTES");
            rs.next();
            do{
                System.out.println(rs.getInt("id_cliente"));
            }while(rs.next());
            
        } catch (SQLException ex) {
            Logger.getLogger(Mavenproject1.class.getName()).log(Level.SEVERE, null, ex);
        }
        
    }
}

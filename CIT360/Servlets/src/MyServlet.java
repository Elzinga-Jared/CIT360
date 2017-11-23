package Servlet;

import java.io.IOException;
import javax.servlet.ServletException;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
import java.io.PrintWriter;

public class MyServlet extends HttpServlet { 
  protected void doGet(HttpServletRequest request, 
      HttpServletResponse response) throws ServletException, IOException 
  {
// this is where the program gets the information that the user entered
    String state= request.getParameter("state");   
    String color= request.getParameter("color"); 
    PrintWriter out = response.getWriter();
    out.println ("<!DOCTYPE html>\n" + "<html> \n" + "<head> \n" +
          "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=ISO-8859-1\"> \n" +
          "<title>Servlet</title> \n" + "</head> \n" + "<body> \n" +
          "<font size=\"28px\" color=\"black\">This is the State in which you live in your favorite color: </font> \n" +
          "<font size=\"36px\" color=\"" + color + "\">" + state + "</font> \n" +
        "</body> \n" + "</html>");  
  }  
}
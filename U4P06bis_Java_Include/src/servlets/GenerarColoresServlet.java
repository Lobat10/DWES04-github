package servlets;

import java.io.IOException;
import java.io.PrintWriter;
import javax.servlet.RequestDispatcher;
import javax.servlet.ServletContext;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

@WebServlet("/GenerarColores")
public class GenerarColoresServlet extends HttpServlet {
	private static final long serialVersionUID = 1L;

	public GenerarColoresServlet() {
		super();
		// TODO Auto-generated constructor stub
	}

	protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {

		ServletContext contexto = getServletContext();

		int num1 = 0,num2 = 0,num3 = 0;
		if (request.getAttribute("numero") != null) {

			num1=(int)(Math.random()*255+1);
			request.setAttribute("numero1", num1);
		
			num2=(int)(Math.random()*255+1);
			request.setAttribute("numero2", num2);
		
			num3=(int)(Math.random()*255+1);
			request.setAttribute("numero3", num3);
		}

		PrintWriter out = response.getWriter();
		
		out.println("<h2>Escribiendo en Servelt GenerarColores </h2>");

		
		out.println("<h2>"+num1+" </h2>");
		out.println("<h2>"+num2+" </h2>");
		out.println("<h2>"+num3+" </h2>");
		
	}

	protected void doPost(HttpServletRequest request, HttpServletResponse response)
			throws ServletException, IOException {
		// TODO Auto-generated method stub
		doGet(request, response);
	}

}

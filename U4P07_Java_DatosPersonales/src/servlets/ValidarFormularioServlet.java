package servlets;

import java.io.IOException;
import java.util.Date;

import javax.servlet.RequestDispatcher;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

/**
 * Servlet implementation class ValidarFormularioServlet
 */
@WebServlet("/ValidarFormulario")
public class ValidarFormularioServlet extends HttpServlet {
	private static final long serialVersionUID = 1L;

	/**
	 * @see HttpServlet#HttpServlet()
	 */
	public ValidarFormularioServlet() {
		super();
		// TODO Auto-generated constructor stub
	}

	/**
	 * @see HttpServlet#doGet(HttpServletRequest request, HttpServletResponse
	 *      response)
	 */
	protected void doGet(HttpServletRequest request, HttpServletResponse response)
			throws ServletException, IOException {
		char especiales[] = { '*', '-', '+', '?', '¿', '!', '¡' };
		String pass = request.getParameter("pass");
		boolean encontradoNum = false;
		boolean encontradoChar = false;
		boolean encontradoMayus = false;

		char clave;

		for (int i = 0; i < pass.length(); i++) {
			clave = pass.charAt(i);
			String passValue = String.valueOf(clave);
			if (passValue.matches("[A-Z]")) {
				encontradoMayus = true;
				
			} else if (passValue.matches("[0-9]")) {
				encontradoNum = true;
			}
		}
		for (int i = 0; i < pass.length() && !encontradoChar; i++) {

			for (int j = 0; j < especiales.length && !encontradoChar; j++) {
				if (pass.charAt(i) == especiales[j]) {
					encontradoChar = true;
				}
			}
		}
		
		Date actual=new Date();
		
		

		if (!encontradoNum || !encontradoChar || !encontradoMayus) {

			response.sendRedirect("./index.html");

		} else if (encontradoNum && encontradoChar && encontradoMayus) {
			
			if(actual.compareTo((Date)request.getParameter("fecha"))) {
				
				response.sendRedirect("./index.html");

			}else {
			RequestDispatcher rd = request.getRequestDispatcher("/ProcesarDatos");
			rd.forward(request, response);
			}
		}
	}

	/**
	 * @see HttpServlet#doPost(HttpServletRequest request, HttpServletResponse
	 *      response)
	 */
	protected void doPost(HttpServletRequest request, HttpServletResponse response)
			throws ServletException, IOException {
		// TODO Auto-generated method stub
		doGet(request, response);
	}

}

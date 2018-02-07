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

/**
 * Servlet implementation class GenerarNumeroServlet
 */
@WebServlet("/MostrarNumero")
public class MostrarNumeroServlet extends HttpServlet {
	private static final long serialVersionUID = 1L;

	/**
	 * @see HttpServlet#HttpServlet()
	 */
	public MostrarNumeroServlet() {
		super();
		// TODO Auto-generated constructor stub
	}

	protected void doGet(HttpServletRequest request, HttpServletResponse response)
			throws ServletException, IOException {

		PrintWriter out = response.getWriter();
		int number, number1, number2, number3;
		ServletContext contexto = getServletContext();
		response.setContentType("text/html;UTF-8");
		out.println("<html><head><meta charset='UTF-8'/></head>");
		out.println("<h1> Mostrar numero coloreado.</h1>");
		out.println("<body>");

		RequestDispatcher rd = request.getRequestDispatcher("/Sorpresa");
		rd.include(request, response);
		if (request.getAttribute("numero") != null) {

			rd = request.getRequestDispatcher("/GenerarColores");
			rd.include(request, response);
			
			if (request.getAttribute("numero1") != null || request.getAttribute("numero2") != null
					|| request.getAttribute("numero3") != null) {

				number = (int) request.getAttribute("numero");
				number1 = (int) request.getAttribute("numero1");
				number2 = (int) request.getAttribute("numero2");
				number3 = (int) request.getAttribute("numero3");

				out.println("<h2>Escribiendo en Servelt MostrarNumero </h2>");
				out.println("<h1 style='color:rgb("+number1+","+number2+","+number3+")'>" + number + "</h1>");
				out.println("<p><a href='./index.html'>Index</a></p>");
				out.close();
			}else{
				out.println("<h1>Error, no llegan los atributos</h1>");
				out.println("<p><a href='./index.html'>Index</a></p>");
				out.close();
			}
		}else{
			out.println("<h1>Error, no llegan los atributos</h1>");
			out.println("<p><a href='./index.html'>Index</a></p>");
			out.close();
		}
		out.println("</body>");
		out.println("</html>");
		out.close();
	}

}
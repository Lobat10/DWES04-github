package servlets;

import java.io.IOException;

import javax.servlet.RequestDispatcher;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

import com.sun.javafx.geom.Rectangle;

import figuras.Circunferencia;
import figuras.Color;
import figuras.Cuadrado;
import figuras.Elipse;
import figuras.Figura;
import figuras.Rectangulo;

/**
 * Servlet implementation class CrearFiguraServlet
 */
@WebServlet("/CrearFigura")
public class CrearFiguraServlet extends HttpServlet {
	private static final long serialVersionUID = 1L;

	/**
	 * @see HttpServlet#HttpServlet()
	 */
	public CrearFiguraServlet() {
		super();
		// TODO Auto-generated constructor stub
	}

	/**
	 * @see HttpServlet#doGet(HttpServletRequest request, HttpServletResponse
	 *      response)
	 */
	protected void doGet(HttpServletRequest request, HttpServletResponse response)
			throws ServletException, IOException {
		int ladoX=0, ladoY = 0, radioX=0, radioY=0;

		if(request.getParameter("ladox") != "") {
			ladoX = Integer.parseInt(request.getParameter("ladox"));
			
		}
		if(request.getParameter("ladoy") != "") {
			ladoY = Integer.parseInt(request.getParameter("ladoy"));

		}
		if(request.getParameter("radiox") != "") {
			radioX = Integer.parseInt(request.getParameter("radiox"));

		}
		if(request.getParameter("radioy") != "") {
			radioY = Integer.parseInt(request.getParameter("radioy"));

		}
		int border=1;
		if(request.getParameter("borde").contains("si")) {
			border=1;
			request.setAttribute("border", border);
		}else {
			border=0;
			request.setAttribute("border", border);
		}
		
		Color color = null;
		if (request.getParameter("colores").contains("aqua")) {
			color = Color.aqua;
		} else if (request.getParameter("colores").contains("azure")) {
			color = Color.azure;
		} else if (request.getParameter("colores").contains("bisque")) {
			color = Color.bisque;
		} else if (request.getParameter("colores").contains("coral")) {
			color = Color.coral;
		} else if (request.getParameter("colores").contains("gold")) {
			color = Color.gold;
		}

		if (request.getParameter("ladox") == null && request.getParameter("ladoy") == null
				&& request.getParameter("radiox") == null && request.getParameter("radioy") == null) {
			response.sendRedirect("./index.html");

		} else if ((request.getParameter("ladox") != "" || request.getParameter("ladoy") != "")
				&& (request.getParameter("radiox") != "" || request.getParameter("radioy") != "")) {

			response.sendRedirect("./index.html");

		} else {
			if (request.getParameter("ladox") != "") {
				if (request.getParameter("ladoy") == "") {
					Cuadrado cua1 = new Cuadrado(ladoX, color);
					request.setAttribute("figura", cua1);
					RequestDispatcher rd = request.getRequestDispatcher("/MostrarFigura");
					rd.forward(request, response);

				} else {
					Rectangulo rec1 = new Rectangulo(ladoX, ladoY, color);
					request.setAttribute("figura", rec1);
					RequestDispatcher rd = request.getRequestDispatcher("/MostrarFigura");
					rd.forward(request, response);
				}
			} else if (request.getParameter("radiox") != "") {
				if (request.getParameter("radioy") == "") {
					Circunferencia cir1 = new Circunferencia(radioX, color);
					request.setAttribute("figura", cir1);
					RequestDispatcher rd = request.getRequestDispatcher("/MostrarFigura");
					rd.forward(request, response);
				} else {
					Elipse eli1 = new Elipse(radioX, radioY, color);
					request.setAttribute("figura", eli1);
					RequestDispatcher rd = request.getRequestDispatcher("/MostrarFigura");
					rd.forward(request, response);
				}
			} else {
				response.sendRedirect("./index.html");
			}
		}
	}

	protected void doPost(HttpServletRequest request, HttpServletResponse response)
			throws ServletException, IOException {
		// TODO Auto-generated method stub
		doGet(request, response);
	}

}

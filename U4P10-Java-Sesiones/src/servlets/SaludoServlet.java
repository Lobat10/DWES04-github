package servlets;

import java.io.IOException;
import java.io.PrintWriter;

import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

/**
 * Servlet implementation class SaludoServlet
 */
@WebServlet("/SaludoServlet")
public class SaludoServlet extends HttpServlet {
	private static final long serialVersionUID = 1L;
       
    /**
     * @see HttpServlet#HttpServlet()
     */
    public SaludoServlet() {
        super();
        // TODO Auto-generated constructor stub
    }

	/**
	 * @see HttpServlet#doGet(HttpServletRequest request, HttpServletResponse response)
	 */
	protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		PrintWriter out = response.getWriter();
		out.println("<html><head><meta charset='UTF-8'/>" + "<style> .error {color: red}</style>"
				+ "<title>Sesiones en JavaEE</title></head><body>");
		response.setContentType("text/html;UTF-8");
		out.println("<h2>Información sobre la sesión</h2>");
		out.println("<form action='" + request.getRequestURI() + "' method='post'>"
				+ "<label>Introduce tu nombre para dirigirnos a ti:</label>" + "<input type='text' name='usuario'/>"
				+ "<span class='error'>" +  + "</span><br/>"
				+ "<input type='submit' name='enviar' value='Enviar'/></form>");
		out.println("<p><a href='" + request.getRequestURI() + "?reiniciarSesion=true'>Borrar la sesión</a></p>");
		
		out.println("</body></html>");
		out.close();
	}

	/**
	 * @see HttpServlet#doPost(HttpServletRequest request, HttpServletResponse response)
	 */
	protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		// TODO Auto-generated method stub
		doGet(request, response);
	}

}

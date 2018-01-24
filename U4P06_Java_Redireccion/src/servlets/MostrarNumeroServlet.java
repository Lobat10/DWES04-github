package servlets;

import java.io.IOException;
import java.io.PrintWriter;
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

	
	protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		
		PrintWriter out = response.getWriter();

		double number;

		
			if(request.getAttribute("numero")!=null) {
				
				number=(double)request.getAttribute("numero");
				out.println("<h1>"+number+"</h1>");
				out.println("<p><a href='./index.html'>Index</a></p>");
				out.close();
			}else {
				out.println("<p>Dato nulo,ejecute : http://localhost:8080/U4P06_Java_Redireccion/</p>");
				out.close();
			}
			
		

	}

}
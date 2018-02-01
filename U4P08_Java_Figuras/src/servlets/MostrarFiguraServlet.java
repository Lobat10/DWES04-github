package servlets;

import java.io.IOException;
import java.io.PrintWriter;

import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

import figuras.Figura;

/**
 * Servlet implementation class MostrarFiguraServlet
 */
@WebServlet("/MostrarFigura")
public class MostrarFiguraServlet extends HttpServlet {
	private static final long serialVersionUID = 1L;
       
    /**
     * @see HttpServlet#HttpServlet()
     */
    public MostrarFiguraServlet() {
        super();
        // TODO Auto-generated constructor stub
    }

	/**
	 * @see HttpServlet#doGet(HttpServletRequest request, HttpServletResponse response)
	 */
	protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		response.setContentType("text/html;UTF-8");
		
		Figura f=(Figura)request.getAttribute("figura");

		PrintWriter out = response.getWriter();
		out.println("<html>");
		out.println("<h1>FIGURAS</h1>");
		out.println("<body>");
		out.println("<h3 style='color:"+request.getParameter("colores").toString()+"; border: "+request.getAttribute("border")+"px solid "+request.getParameter("colores").toString()+";'>"+f.imprimir()+"</h3>");
		out.println("</body>");
		out.println("</html>");
	}

	/**
	 * @see HttpServlet#doPost(HttpServletRequest request, HttpServletResponse response)
	 */
	protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		// TODO Auto-generated method stub
		doGet(request, response);
	}

}

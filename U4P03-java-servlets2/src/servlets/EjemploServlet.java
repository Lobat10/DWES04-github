package servlets;

import java.io.IOException;
import java.io.PrintWriter;

import javax.servlet.Servlet;
import javax.servlet.ServletConfig;
import javax.servlet.ServletException;
import javax.servlet.ServletRequest;
import javax.servlet.ServletResponse;
import javax.servlet.annotation.WebServlet;

@WebServlet(urlPatterns="/EjemploServlet", loadOnStartup=1)
public class EjemploServlet implements Servlet {
	private ServletConfig config;
	private static final long serialVersionUID = 1L;

	public void init(ServletConfig cfg) throws ServletException {
		config = cfg;
		config.getServletContext().log("Iniciando el servlet");
	}

	public void service(ServletRequest request, ServletResponse response) throws ServletException, IOException {
		config.getServletContext().log("Petición recibida desde " + request.getRemoteAddr());
		PrintWriter out = response.getWriter();
		out.println("<html><head><meta charset='UTF-8'/></head>");
		out.println("<body><p>Implementando la interfaz Servlet</p>");
		out.println("<p><a href='./index.html'>Index</a></p>");
		out.println("</body></html>");
		out.close();

	}

	public void destroy() {
		config.getServletContext().log("Destruyendo el servlet");
	}

	public String getServletInfo() {
		return "Servlet de Ejemplo";
	}

	public ServletConfig getServletConfig() {
		return config;
	}
}
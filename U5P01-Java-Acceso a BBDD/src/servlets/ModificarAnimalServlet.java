package servlets;

import java.io.IOException;
import java.io.PrintWriter;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.ResultSet;
import java.sql.Statement;

import javax.servlet.ServletContext;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

/**
 * Servlet implementation class ModificarAnimalServlet
 */
@WebServlet("/ModificarAnimalServlet")
public class ModificarAnimalServlet extends HttpServlet {
	private static final long serialVersionUID = 1L;
       
    /**
     * @see HttpServlet#HttpServlet()
     */
    public ModificarAnimalServlet() {
        super();
        // TODO Auto-generated constructor stub
    }

	/**
	 * @see HttpServlet#doGet(HttpServletRequest request, HttpServletResponse response)
	 */
	protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		ServletContext contexto = getServletContext();
		response.setContentType("text/html;UTF-8");
		PrintWriter out = response.getWriter();
		out.println("<html><head><meta charset='UTF-8'/></head><body>");

		Connection conn = null;
		Statement sentencia = null;
		try {
			// Paso 1: Cargar el driver JDBC.
			Class.forName("org.mariadb.jdbc.Driver").newInstance();

			// Paso 2: Conectarse a la Base de Datos utilizando la clase Connection
			String userName = contexto.getInitParameter("usuario");
			String password = contexto.getInitParameter("password");
			String url = contexto.getInitParameter("url");
			conn = DriverManager.getConnection(url, userName, password);

			// Paso 3: Crear sentencias SQL, utilizando objetos de tipo Statement
			sentencia = conn.createStatement();

			// Paso 4: Ejecutar la sentencia SQL a través de los objetos Statement
			String consultaUpdate = "UPDATE animal SET especie='jabali' WHERE nombre='Babe'";
			try {
				int nFilas = sentencia.executeUpdate(consultaUpdate);
			  out.println("<p>"+ nFilas + " filas afectadas</p>");
			} catch(Exception e) {
			  out.println("<p>No se pudo actualizar la base de datos</p>");
			}
			// Paso 5: Mostrar resultados
			
		
			/*
			out.println("<table>");
			out.println("<tr style='background-color: red'>");
			out.println("<th>Número chip </th>");
			out.println("<th>Nombre </th>");
			out.println("<th>Especie</th>");
			out.println("<th>Foto</th>");
			out.println("</tr>");
			while (rset.next()) {
				out.println("<tr style='background-color: blue'>");
				out.println("<td>" + rset.getString("chip") +"</td>");
				out.println("<td>" + rset.getString("nombre") + "</td>");
				out.println("<td>" + rset.getString("especie") + "</td>");
				out.println("<td><img src='img/" + rset.getString("imagen") +"'></td>");
				out.println("</tr>");
			}
			out.println("</table>");
			*/
			// Paso 6: Desconexión
			if (sentencia != null)
				sentencia.close();
			if (conn != null)
				conn.close();
		} catch (Exception e) {
			e.printStackTrace();
		}

		out.println("</body></html>");
	}

	/**
	 * @see HttpServlet#doPost(HttpServletRequest request, HttpServletResponse response)
	 */
	protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		// TODO Auto-generated method stub
		doGet(request, response);
	}

}

// ✅ Mostrar mensaje con borde de color
function mostrarAlerta(titulo, mensaje, tipo = "info") {
    const divMensaje = document.getElementById("mensaje");

    let colorBorde = "#ccc";
    let colorFondo = "#f9f9f9";
    let colorTexto = "#000";

    if (tipo === "success") {
        colorBorde = "#28a745";
        colorFondo = "#d4edda";
        colorTexto = "#155724";
    } else if (tipo === "error") {
        colorBorde = "#dc3545";
        colorFondo = "#f8d7da";
        colorTexto = "#721c24";
    } else if (tipo === "warning") {
        colorBorde = "#ffc107";
        colorFondo = "#fff3cd";
        colorTexto = "#856404";
    } else if (tipo === "info") {
        colorBorde = "#17a2b8";
        colorFondo = "#d1ecf1";
        colorTexto = "#0c5460";
    }

    divMensaje.innerHTML = `
        <div style="
            border: 2px solid ${colorBorde};
            background-color: ${colorFondo};
            color: ${colorTexto};
            padding: 10px 15px;
            border-radius: 8px;
            font-weight: 500;
        ">
            <strong>${titulo}:</strong> ${mensaje}
        </div>
    `;
}

async function cargarToken() {
    try {
        const respuesta = await fetch('src/controller/token.php?tipo=ver');
        const json = await respuesta.json();
        if (json.status) {
            document.getElementById('token').value = json.data.token;
        } else {
            mostrarAlerta("Advertencia", json.msg || "No se encontró token guardado", "warning");
        }
    } catch (error) {
        console.error("Error cargando token:", error);
        mostrarAlerta("Error", "No se pudo obtener el token desde el servidor", "error");
    }
}

async function llamar_api() {
    const formulario = document.getElementById('frmApi');
    const datos = new FormData(formulario);
    const ruta_api = document.getElementById('ruta_api').value;
    const contenido = document.getElementById('contenido');
    contenido.innerHTML = "";

    try {
        const respuesta = await fetch(ruta_api, {
            method: 'POST',
            mode: 'cors',
            body: datos
        });

        const json = await respuesta.json();
        console.log("Respuesta API:", json);

        if (json.msg && json.msg.trim() !== "") {
            const tipo = json.status ? "success" : "error";
            mostrarAlerta("Mensaje del servidor", json.msg, tipo);
        }

        if (json.status && json.contenido && json.contenido.length > 0) {
            let contador = 0;
            json.contenido.forEach(perrito => {
                contador++;
                contenido.innerHTML += `
                    <tr>
                        <td>${contador}</td>
                        <td>${perrito.nombre}</td>
                        <td>${perrito.raza}</td>
                        <td>${perrito.edad}</td>
                        <td>${perrito.peso}</td>
                        <td>${perrito.color}</td>
                        <td>${perrito.genero}</td>
                        <td>${perrito.vacunado}</td>
                    </tr>`;
            });
        } else if (!json.status && (!json.contenido || json.contenido.length === 0)) {
            contenido.innerHTML = `<tr><td colspan="8">🐾 No se encontraron perritos.</td></tr>`;
        }

    } catch (error) {
        console.error("Error al conectar con la API:", error);
        contenido.innerHTML = `<tr><td colspan="8">⚠️ Error de conexión con el servidor.</td></tr>`;
        mostrarAlerta("Error", "No se pudo conectar con la API o el servidor no responde", "error");
    }
}

document.addEventListener("DOMContentLoaded", cargarToken);

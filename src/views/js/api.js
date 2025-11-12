// ✅ Función para mostrar alertas con SweetAlert2
function mostrarAlerta(titulo, mensaje, tipo = "info") {
    Swal.fire({
        title: titulo,
        text: mensaje,
        icon: tipo,
        confirmButtonColor: "#a77af5",
        confirmButtonText: "Aceptar"
    });
}

// ✅ Cargar token desde el controlador PHP
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

// ✅ Llamar API de perritos
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

        // 🟢 Si el servidor devuelve 'msg', mostrarlo
        if (json.msg && json.msg.trim() !== "") {
            const tipo = json.status ? "success" : "error";
            mostrarAlerta("Mensaje del servidor", json.msg, tipo);
        }

        // 🐕 Si hay perritos en el contenido, se muestran
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
        } 
        // 🟠 Si no hay resultados
        else if (!json.status && (!json.contenido || json.contenido.length === 0)) {
            contenido.innerHTML = `<tr><td colspan="8">${json.msg || '🐾 No se encontraron perritos.'}</td></tr>`;
        }

    } catch (error) {
        console.error("Error al conectar con la API:", error);
        contenido.innerHTML = `<tr><td colspan="8">⚠️ Error de conexión con el servidor.</td></tr>`;
        mostrarAlerta("Error", "No se pudo conectar con la API o el servidor no responde", "error");
    }
}

// 🔹 Cargar token automáticamente al iniciar la página
document.addEventListener("DOMContentLoaded", cargarToken);

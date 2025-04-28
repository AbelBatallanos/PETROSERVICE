
export async function registrarUsuario(datos) {
    try {
        const response = await fetch("http://localhost:3000/registrarse", {
            method: "POST",
            headers: { "Content-Type": "application/json" },
            body: JSON.stringify(datos)
        });
        console.log(response);
        if (!response.ok) throw new Error(`Error ${response.status}: ${response.statusText}`);

        return await response.json();
    } catch (error) {
        console.error("Error en el registro:", error);
        return { error: error.message };
    }
}
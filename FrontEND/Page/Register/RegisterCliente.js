window.onload=()=>{
    
    let formElement = document.querySelector("#Register")

    formElement.onsubmit = async (e) =>{
        e.preventDefault()
        let formData = new FormData(formElement);
        let url = "http://localhost/Proyecto2024/BackEND/Controller/ControllerCliente.php?function=Register"

        let config = {
                method: 'POST',
                body: formData
        }

        let respuesta = await fetch(url, config);
        let datos = await respuesta.json();
        console.log(datos);
    
        if (datos !=true){
            console.log("Ya existen");
        }else{
            console.log("Insertado conrrectamente");
        }
    }
}
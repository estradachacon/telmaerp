// Función para abrir el modal
function abrirModalClienteNew() {
    var modal = new bootstrap.Modal(document.getElementById('clienteNewModal'));
    modal.show();
}

// Función para enviar el formulario por AJAX
function guardarCliente() {
    const form = document.getElementById('clienteNewForm');
    const formData = new FormData(form);

    fetch('/clientes/create', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(res => {
        if(res.status === 'error') {
            alert(Object.values(res.errors).join("\n"));
        } else {
            alert(res.message);
            form.reset();
            var modal = bootstrap.Modal.getInstance(document.getElementById('clienteNewModal'));
            modal.hide();
        }
    });
}

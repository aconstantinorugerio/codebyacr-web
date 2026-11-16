document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('contactForm');
    const responseContainer = document.getElementById('mensajeRespuesta');

    if (!form || !responseContainer) return;

    const showMessage = (type, message) => {
        const alert = document.createElement('div');
        alert.className = `alert alert-${type}`;
        alert.setAttribute('role', type === 'success' ? 'status' : 'alert');

        if (type === 'success') {
            const icon = document.createElement('i');
            icon.className = 'fa-solid fa-circle-check me-2';
            alert.append(icon);
        }

        alert.append(document.createTextNode(message));
        responseContainer.replaceChildren(alert);
    };

    form.addEventListener('submit', async event => {
        event.preventDefault();

        const submitButton = form.querySelector('[type="submit"]');
        const csrfToken = document.querySelector('meta[name="csrf-token"]')?.content;
        if (submitButton) submitButton.disabled = true;

        try {
            const response = await fetch(form.action, {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': csrfToken || '',
                    Accept: 'application/json',
                },
                body: new FormData(form),
            });
            const data = await response.json();

            if (!response.ok || !data.success) {
                showMessage('danger', data.message || 'Revisa los datos e inténtalo nuevamente.');
                return;
            }

            showMessage('success', data.message);
            form.reset();
        } catch {
            showMessage('danger', 'Ocurrió un error al enviar el formulario.');
        } finally {
            if (submitButton) submitButton.disabled = false;
        }
    });
});

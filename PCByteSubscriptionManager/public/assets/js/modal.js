document.addEventListener('DOMContentLoaded', function () {
    const body = document.body;

    document.querySelectorAll('[data-modal-target]').forEach(button => {
        button.addEventListener('click', function () {
            const modalId = this.getAttribute('data-modal-target');
            const modal = document.getElementById(modalId);
            if (modal) {
                modal.classList.remove('hidden');
                body.classList.add('overflow-hidden'); // Prevent scrolling
            }
        });
    });

    document.querySelectorAll('[data-modal-close]').forEach(button => {
        button.addEventListener('click', function () {
            const modalId = this.getAttribute('data-modal-close');
            const modal = document.getElementById(modalId);
            if (modal) {
                modal.classList.add('hidden');
                body.classList.remove('overflow-hidden'); // Allow scrolling again
            }
        });
    });
});
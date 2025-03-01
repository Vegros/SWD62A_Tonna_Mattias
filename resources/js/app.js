import './bootstrap';

document.querySelectorAll('.college-delete').forEach((button) => {
    button.addEventListener('click', function (event) {
        event.preventDefault();
        if (confirm("Are you sure?")) {
            let action = this.getAttribute('href');
            let form = document.getElementById('form-college-delete');
            form.setAttribute('action', action);
            form.submit();
        }
    });
});

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
document.querySelectorAll('.student-delete').forEach((button) => {
    button.addEventListener('click', function (event) {
        event.preventDefault();
        if (confirm("Are you sure?")) {
            let action = this.getAttribute('href');
            let form = document.getElementById('form-student-delete');
            form.setAttribute('action', action);
            form.submit();
        }
    });
});
document.getElementById('filter-college-id').addEventListener('change',
    function(){
        let college_id = this.value || this.options[this.selectedIndex].value;
        let url = new URL(window.location.href);

        if (!college_id) {
            url.searchParams.delete('college_id');
        }
        else {
            url.searchParams.set('college_id', college_id);
        }

        window.location.href = url.toString();
    }
);

document.getElementById('sort-student-name').addEventListener('change',
    function(){
        let sort_type = this.value || this.options[this.selectedIndex].value;
        let url = new URL(window.location.href);

        if (!sort_type) {
            url.searchParams.delete('sort');
        }
        else {
            url.searchParams.set('sort', sort_type);
        }

        window.location.href = url.toString();
    }
);

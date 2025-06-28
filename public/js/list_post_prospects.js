

function openModal(id) {
    document.getElementById(id).style.display = 'flex';
}

function closeModal(id) {
    document.getElementById(id).style.display = 'none';

    if (id === 'confirmSelectModal') {

        document.getElementById('moveSelect').value = '';
    }
}




const select = document.getElementById('moveSelect');
const modal = document.getElementById('confirmSelectModal');

select.addEventListener('change', function () {
    if (this.value) {
        modal.style.display = 'flex';
    }
});

function approveSelect(id) {
    document.getElementById(id).style.display = 'none';
}



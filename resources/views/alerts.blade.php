<script>
    window.Swal = Swal.mixin({
        customClass: {
            confirmButton: "btn btn-success",
            cancelButton: "btn btn-secondary"
        },
        buttonsStyling: false
    });
    document.addEventListener('livewire:init', () => {
        Livewire.on('close', (event) => {
            document.querySelectorAll('.modal.fade.show').forEach(modalelement => {
                $(modalelement).modal('toggle')
            });
            if (event.text || event.title) {
                Swal.fire({
                    title: event.title,
                    text: event.text,
                    icon: event.icon,
                })
            }
        });
    });
</script>

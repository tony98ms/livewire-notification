<script type="text/javascript">
    Livewire.on('success', function(alert) {
        if (alert.modal !== null) {
            modalHide(alert.modal)
        }
        iziToast.success(Object.assign({}, {
                title: alert.options.title !== null &&
                    alert.options.title !== void 0 ? alert.options.title : '',
                message: alert.message !== null &&
                    alert.message !== void 0 ? alert.message : ''
            },
            alert.options));
    });
    Livewire.on('error', function(alert) {
        if (alert.modal !== null) {
            modalHide(alert.modal)
        }
        iziToast.error(Object.assign({}, {
                title: alert.options.title !== null &&
                    alert.options.title !== void 0 ? alert.options.title : '',
                message: alert.message !== null &&
                    alert.message !== void 0 ? alert.message : ''
            },
            alert.options));
    });
    Livewire.on('info', function(alert) {
        if (alert.modal !== null) {
            modalHide(alert.modal)
        }
        iziToast.info(Object.assign({}, {
                title: alert.options.title !== null &&
                    alert.options.title !== void 0 ? alert.options.title : '',
                message: alert.message !== null &&
                    alert.message !== void 0 ? alert.message : ''
            },
            alert.options));
    });
    Livewire.on('warning', function(alert) {
        if (alert.modal !== null) {
            modalHide(alert.modal)
        }
        iziToast.warning(Object.assign({}, {
                title: alert.options.title !== null &&
                    alert.options.title !== void 0 ? alert.options.title : '',
                message: alert.message !== null &&
                    alert.message !== void 0 ? alert.message : ''
            },
            alert.options));
    });

    function modalHide(modalId) {
        $(modalId).modal('hide');
    }
</script>

<script type="text/javascript">
    Livewire.on('success', function(data) {
        if (data.modal !== null) {
            modalHide(data.modal)
        }
        iziToast.success(Object.assign({}, {
                title: data.options.title !== null &&
                    data.options.title !== void 0 ? data.options.title : '',
                message: data.mensaje !== null &&
                    data.mensaje !== void 0 ? data.mensaje : ''
            },
            data.options));
    });
    Livewire.on('error', function(data) {
        if (data.modal !== null) {
            modalHide(data.modal)
        }
        iziToast.error(Object.assign({}, {
                title: data.options.title !== null &&
                    data.options.title !== void 0 ? data.options.title : '',
                message: data.mensaje !== null &&
                    data.mensaje !== void 0 ? data.mensaje : ''
            },
            data.options));
    });
    Livewire.on('info', function(data) {
        if (data.modal !== null) {
            modalHide(data.modal)
        }
        iziToast.info(Object.assign({}, {
                title: data.options.title !== null &&
                    data.options.title !== void 0 ? data.options.title : '',
                message: data.mensaje !== null &&
                    data.mensaje !== void 0 ? data.mensaje : ''
            },
            data.options));
    });
    Livewire.on('warning', function(data) {
        if (data.modal !== null) {
            modalHide(data.modal)
        }
        iziToast.warning(Object.assign({}, {
                title: data.options.title !== null &&
                    data.options.title !== void 0 ? data.options.title : '',
                message: data.mensaje !== null &&
                    data.mensaje !== void 0 ? data.mensaje : ''
            },
            data.options));
    });

    function modalHide(modalId) {
        $(modalId).modal('hide');
    }
</script>

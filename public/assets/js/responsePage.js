

(() => {
    'use strict'
    const responsePageFunctions = () => {
        return {
            notificationOpen: false,
            notificationTimer: null,
            showNotification() {
                this.notificationOpen = true;

                if(this.notificationOpen){
                    clearTimeout(this.notificationTimer)
                    this.notificationTimer = setTimeout(() => this.notificationOpen = false, 3000);
                } else {
                    this.notificationOpen = true;
                    this.notificationTimer = setTimeout(() => this.notificationOpen = false, 3000);
                }
            },
            copyOnClipboard() {
                let copyText = document.getElementById("short-code-input-alltext")
                // Select the text field
                copyText.select();
                copyText.setSelectionRange(0, 99999); // For mobile devices
                navigator.clipboard.writeText(copyText.value);
                this.showNotification();
            },
            sendQrCodeInMail() {
                let url = document.getElementById('send_email_form').getAttribute('action')
                fetch(url, {
                    headers: {
                        "Content-Type": "application/json",
                    },
                    method: "post",
                    body: JSON.stringify({
                        _token:  document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                        user_mail: document.getElementById('user_name_input').value,
                        qrcode: document.getElementById('short-code-input-alltext').value
                    })
                })
                    .then((res) => {
                        if(res.status == 200){
                            this.showNotification()
                            document.getElementById('send_email_form').reset()
                        }
                    })
                    .catch((error) => {
                        error.status == 400 ? this.showNotification():""
                    })
            }
        }

    }


    const copyQrImage = () => {
        let copyImageQrBtn = document.getElementById('btn_copy_qr');
        if (copyImageQrBtn) {
            let contentqrcode = document.querySelector('#qrcode_content svg');
            copyImageQrBtn.addEventListener('click', () => {
                contentqrcode.select()
                // navigator.clipboard.writeText(contentqrcode.value);
                toastBootstrap.show()
            })
        }
    }

    const sendContactMail = () => {
        let submitSendEmailContactBtn = document.getElementById('send_contact_form');
        if (submitSendEmailContactBtn) {
            submitSendEmailContactBtn.addEventListener('submit', (e) => {
                e.preventDefault()
                let url = document.getElementById('send_contact_form').getAttribute('action')
                fetch(url, {
                    headers: {
                        "Content-Type": "application/json",
                    },
                    method: "post",
                    body: JSON.stringify({
                        _token:  document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                        fullname: document.getElementById('fullname').value,
                        email: document.getElementById('email').value,
                        message: document.getElementById('message').value,
                    })
                })
                    .then((res) => {
                        if(res.status == 200){
                            const toastBootstrap = Toast.getOrCreateInstance( document.getElementById('sendEmailToast') )
                            document.getElementById('send_contact_form').reset()

                            toastBootstrap.show()
                        }
                    })
                    .catch((error) => {
                        const toastBootstrap = Toast.getOrCreateInstance( document.getElementById('sendEmailToastError') )
                        error.status == 400 ? toastBootstrap.show():""
                    })
            });
        }


    }




    window.addEventListener('DOMContentLoaded', () => {
    //     copyOnClipboard();
    //     copyQrImage();
    //     sendQrCodeInMail();
    //     sendContactMail();
    //
    })



    window.responsePageFunctions = responsePageFunctions;

})()

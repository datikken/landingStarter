import MicroModal from "micromodal";
import disableScroll from "disable-scroll";
import Inputmask from 'inputmask';
import * as yup from 'yup';

document.addEventListener('DOMContentLoaded', function() {
    MicroModal.init();
    Inputmask("+7(999)999-99-99").mask('#tel');

    const closeBtnClass = '.btn-close';
    const popupWhatsappClass = ".popup-whatsapp";
    const submitBtnClass = '.btn-submit';
    const formContactClass = '#form-contact';
    const formErrorClass = '.form-error';

    const whatsBtn = document.querySelector(popupWhatsappClass);
    const closeBtn = document.querySelector(closeBtnClass);
    const submitBtn = document.querySelector(submitBtnClass);
    const form = document.querySelector(formContactClass);
    const formError = document.querySelector(formErrorClass);

    const inputs = form.querySelectorAll('input');
    const textarea = form.querySelector('textarea');

    const submit = async (formData) => {
        const url = 'order-new';
        const token = document.querySelector('[name=csrf-token]').content;

        await fetch(url,{
            method: 'POST',
            body: JSON.stringify(formData),
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-Token': token
            }
        })
            .then((response) => {
                response.json()
            })
            .then(() => {
                MicroModal.close('modal-1');
            });
    }

    submitBtn.addEventListener('click', () => {
        let schema = yup.object().shape({
            name: yup.string().required(),
            tel: yup.string().required(),
            theme: yup.string().required(),
        });

        const formValues = {
            name: inputs[0].value,
            tel: inputs[1].value,
            theme: textarea.value
        };

        schema
            .validate(formValues)
            .then(function (valid) {
                if (valid) {
                    formError.classList.add('hidden')
                    console.log(valid, formValues)
                    submit(formValues)
                }
            })
            .catch(function (err) {
                formError.classList.remove('hidden')
                console.log(err, 'error')
            })
    });


    inputs.forEach(input => {
        input.addEventListener('focus', () => {
            formError.classList.add('hidden')
        })
    });

    textarea.addEventListener('focus', () => {
        formError.classList.add('hidden')
    });

    whatsBtn.addEventListener('click', () => {
        MicroModal.show('modal-1');
        disableScroll.on();
    });

    closeBtn.addEventListener('click', () => {
        MicroModal.close('modal-1');
        disableScroll.off();
    });
});

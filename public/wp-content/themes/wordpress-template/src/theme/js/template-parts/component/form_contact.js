import $ from 'jquery';
import api from '../../services/api';
import Swal from 'sweetalert2';

export default function () {
    const formContact = $('.template-part-form-contact form');

    const convertSerializeToObject = (formData) => {
        const formObject = {};

        $.each(formData, (i, v) => {
            formObject[v.name] = v.value;
        });

        return formObject;
    }

    const resetForm = (form) => {
        form.find('input').val('');
        form.find('textarea').val('');
    }

    const submitForm = (form) => {
        form.submit(function (e) {
            e.preventDefault();
            const Form = $(this);
            const buttonSubmit = $(this).find('button[type=submit]');
            const textSend = buttonSubmit.text();
            const formData = $(this).serializeArray();
            const formDataParsed = convertSerializeToObject(formData);

            buttonSubmit.text('Enviando...');

            api.post('contact/v1/send', formDataParsed).then((response) => {
                buttonSubmit.text(textSend);

                if (response.data) {
                    Swal.fire(
                        'Mensagem enviada!',
                        'Agradecemos o contato, entraremos em contato assim que possível!',
                        'success'
                    )
                }
                resetForm(form);

            }).catch(() => {
                buttonSubmit.text(textSend);

                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Não conseguimos enviar sua mensagem, tente novamente mais tarde!'
                });

                resetForm(form);
            })
        });
    }

    const _construct = () => {
        formContact.each(function () {
            submitForm($(this));
        });
    }

    if (formContact.length > 0) _construct();
}
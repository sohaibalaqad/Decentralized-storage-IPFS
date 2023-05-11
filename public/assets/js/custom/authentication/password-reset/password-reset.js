"use strict";
var KTPasswordResetGeneral = function () {
    var t, e, i;
    return {
        init: function () {
            t = document.querySelector("#kt_password_reset_form"),
            e = document.querySelector("#kt_password_reset_submit"),
            i = FormValidation.formValidation(t, {
                fields: {
                    email: {
                        validators: {
                            notEmpty: {message: "Email address is required"},
                            emailAddress: {message: "The value is not a valid email address"}
                        }
                    }
                },
                plugins: {
                    trigger: new FormValidation.plugins.Trigger,
                    bootstrap: new FormValidation.plugins.Bootstrap5({
                        rowSelector: ".fv-row",
                        eleInvalidClass: "",
                        eleValidClass: ""
                    })
                }
            }), e.addEventListener("click", (function (o) {
                o.preventDefault(), i.validate().then((function (i) {
                    "Valid" == i ? (e.setAttribute("data-kt-indicator", "on"),
                        e.disabled = !0,
                        setTimeout((function () {
                            $.ajaxSetup({
                                headers: {
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                }
                            });
                            $.ajax({
                                type: 'POST',
                                url: '/forgot-password',
                                data: $(t).serialize(),
                                success: function (data) {
                                    // console.log(data.statusCode);
                                    e.removeAttribute("data-kt-indicator");
                                    e.disabled = false;
                                    Swal.fire({
                                        text: "A link has been sent to your email, check it out.",
                                        icon: "success",
                                        buttonsStyling: !1,
                                        confirmButtonText: "Ok, Back to login",
                                        customClass: {confirmButton: "btn btn-primary"}
                                    }).then(function (data) {
                                        window.location.href = '/login';
                                    });
                                },
                                error: function (data) {
                                    e.removeAttribute("data-kt-indicator");
                                    e.disabled = false;
                                    Swal.fire({
                                        text: data.responseJSON.message,
                                        icon: "error",
                                        buttonsStyling: !1,
                                        confirmButtonText: "Ok",
                                        customClass: {confirmButton: "btn btn-primary"}
                                    });
                                }
                            });
                        // e.removeAttribute("data-kt-indicator"),
                        // e.disabled = !1,
                        // Swal.fire({
                        //     text: "You have successfully logged in!",
                        //     icon: "success",
                        //     buttonsStyling: !1,
                        //     confirmButtonText: "Ok, got it!",
                        //     customClass: {confirmButton: "btn btn-primary"}
                        // }).then((function (e) {
                        //     e.isConfirmed && (t.querySelector('[name="email"]').value = "")
                        // }))
                    }), 1500)) : Swal.fire({
                        text: "Sorry, looks like there are some errors detected, please try again.",
                        icon: "error",
                        buttonsStyling: !1,
                        confirmButtonText: "Ok, got it!",
                        customClass: {confirmButton: "btn btn-primary"}
                    })
                }))
            }))
        }
    }
}();
KTUtil.onDOMContentLoaded((function () {
    KTPasswordResetGeneral.init()
}));

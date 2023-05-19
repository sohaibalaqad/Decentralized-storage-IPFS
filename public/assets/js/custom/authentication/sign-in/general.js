// "use strict";
// var KTSigninGeneral = function () {
//     var t, e, i;
//     return {
//         init: function () {
//             t = document.querySelector("#kt_sign_in_form"), e = document.querySelector("#kt_sign_in_submit"), i = FormValidation.formValidation(t, {
//                 fields: {
//                     email: {
//                         validators: {
//                             notEmpty: {message: "Email address is required"},
//                             emailAddress: {message: "The value is not a valid email address"}
//                         }
//                     }, password: {validators: {notEmpty: {message: "The password is required"}}}
//                 },
//                 plugins: {
//                     trigger: new FormValidation.plugins.Trigger,
//                     bootstrap: new FormValidation.plugins.Bootstrap5({rowSelector: ".fv-row"})
//                 }
//             }), e.addEventListener("click", (function (n) {
//                 n.preventDefault(), i.validate().then((function (i) {
//                     "Valid" == i ? (e.setAttribute("data-kt-indicator", "on"), e.disabled = !0, setTimeout((function () {
//                         e.removeAttribute("data-kt-indicator"), e.disabled = !1, Swal.fire({
//                             text: "You have successfully logged in!",
//                             icon: "success",
//                             buttonsStyling: !1,
//                             confirmButtonText: "Ok, got it!",
//                             customClass: {confirmButton: "btn btn-primary"}
//                         }).then((function (e) {
//                             e.isConfirmed && (t.querySelector('[name="email"]').value = "", t.querySelector('[name="password"]').value = "")
//                         }))
//                     }), 2e3)) : Swal.fire({
//                         text: "Sorry, looks like there are some errors detected, please try again.",
//                         icon: "error",
//                         buttonsStyling: !1,
//                         confirmButtonText: "Ok, got it!",
//                         customClass: {confirmButton: "btn btn-primary"}
//                     })
//                 }))
//             }))
//         }
//     }
// }();
// KTUtil.onDOMContentLoaded((function () {
//     KTSigninGeneral.init()
// }));

"use strict";
var KTSigninGeneral = function () {
    var t, e, i;
    return {
        init: function () {
            t = document.querySelector("#kt_sign_in_form"),
                e = document.querySelector("#kt_sign_in_submit"),
                i = FormValidation.formValidation(t, {
                    fields: {
                        email: {
                            validators: {
                                notEmpty: {message: "Email address is required"},
                                emailAddress: {message: "The value is not a valid email address"}
                            }
                        }, password: {validators: {notEmpty: {message: "The password is required"}}}
                    },
                    plugins: {
                        trigger: new FormValidation.plugins.Trigger,
                        bootstrap: new FormValidation.plugins.Bootstrap5({rowSelector: ".fv-row"})
                    }
                }), e.addEventListener("click", (function (n) {
                n.preventDefault(), i.validate().then((function (i) {
                    "Valid" == i ? (
                        e.setAttribute("data-kt-indicator", "on"),
                            e.disabled = !0,
                            setTimeout((function () {
                                    $.ajaxSetup({
                                        headers: {
                                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                        }
                                    });
                                    $.ajax({
                                        type: 'POST',
                                        url: '/login',
                                        data: $(t).serialize(),
                                        success: function (data) {
                                            // console.log(data.statusCode);
                                            e.removeAttribute("data-kt-indicator");
                                            e.disabled = false;
                                            Swal.fire({
                                                text: "You have successfully logged in!",
                                                icon: "success",
                                                buttonsStyling: !1,
                                                confirmButtonText: "Ok, go to dashboard",
                                                customClass: {confirmButton: "btn btn-primary"}
                                            }).then(function (data) {
                                                window.location.href = '/dashboard';
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
                                }
                            ), 2e3)) : Swal.fire({
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
    KTSigninGeneral.init()
}));

/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
var __webpack_exports__ = {};
/*!**********************************************************************************!*\
  !*** ../../../themes/metronic/html/demo1/src/js/custom/modals/create-account.js ***!
  \**********************************************************************************/


// Class definition
var KTCreateAccount = function () {
	// Elements
	var modal;	
	var modalEl;

	var stepper;
	var form;
	var formSubmitButton;

	// Variables
	var stepperObj;
	var validations = [];

	// Private Functions
	var initStepper = function () {
		// Initialize Stepper
		stepperObj = new KTStepper(stepper);

		// Validation before going to next page
		stepperObj.on('kt.stepper.next', function (stepper) {
			console.log('stepper.next');

			// Validate form before change stepper step
			var validator = validations[stepper.getCurrentStepIndex() - 1]; // get validator for currnt step

			if (validator) {
				validator.validate().then(function (status) {
					console.log('validated!');

					if (status == 'Valid') {
						stepper.goNext();

						KTUtil.scrollTop();
					} else {
						Swal.fire({
							text: "Sorry, looks like there are some errors detected, please try again.",
							icon: "error",
							buttonsStyling: false,
							confirmButtonText: "Ok, got it!",
							customClass: {
								confirmButton: "btn btn-light"
							}
						}).then(function () {
							KTUtil.scrollTop();
						});
					}
				});
			} else {
				stepper.goNext();

				KTUtil.scrollTop();
			}
		});

		// Prev event
		stepperObj.on('kt.stepper.previous', function (stepper) {
			console.log('stepper.previous');

			stepper.goPrevious();
			KTUtil.scrollTop();
		});
	}

	var handleForm = function() {
		formSubmitButton.addEventListener('click', function (e) {

			
			// Prevent default button action
			e.preventDefault();

			// Disable button to avoid multiple click 
			formSubmitButton.disabled = true;

			// Show loading indication
			formSubmitButton.setAttribute('data-kt-indicator', 'on');

			// Simulate form submission
			setTimeout(function() {
				// Hide loading indication
				formSubmitButton.removeAttribute('data-kt-indicator');

				// Enable button
				formSubmitButton.disabled = false;
				
				// Show popup confirmation. For more info check the plugin's official documentation: https://sweetalert2.github.io/
				Swal.fire({
					text: "Form has been successfully submitted!",
					icon: "success",
					buttonsStyling: false,
					confirmButtonText: "Ok, got it!",
					customClass: {
						confirmButton: "btn btn-primary"
					}
				}).then(function (result) {
					if (result.isConfirmed) {
						if (modal) {
							modal.hide(); // close modal
						}
						//form.submit(); // Submit form
					}
				});				
			}, 2000);   
		});

		// Expiry month. For more info, plase visit the official plugin site: https://select2.org/
        $(form.querySelector('[name="card_expiry_month"]')).on('change', function() {
            // Revalidate the field when an option is chosen
            validations[3].revalidateField('card_expiry_month');
        });

		// Expiry year. For more info, plase visit the official plugin site: https://select2.org/
        $(form.querySelector('[name="card_expiry_year"]')).on('change', function() {
            // Revalidate the field when an option is chosen
            validations[3].revalidateField('card_expiry_year');
        });

		// Expiry year. For more info, plase visit the official plugin site: https://select2.org/
        $(form.querySelector('[name="business_type"]')).on('change', function() {
            // Revalidate the field when an option is chosen
            validations[2].revalidateField('business_type');
        });
	}

	var initValidation = function () {
		// Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
		// Step 1
		validations.push(FormValidation.formValidation(
			form,
			{
				fields: {
					'firstname': {
						validators: {
							notEmpty: {
								message: 'Firstname Required'
							}
						}
					},
				
					'surname': {
						validators: {
							notEmpty: {
								message: 'Surname Required'
							}
						}
					},
					'email': {
						validators: {
							notEmpty: {
								message: 'Email Required'
							},
							emailAddress: {
								message: 'This is not a valid email address'
							}
						}
					},
					'mobilenumber': {
						validators: {
							notEmpty: {
								message: 'Mobile Number Required'
							},
							numeric: {
								message: 'This is not a valid Mobile Number'
							}
						}
					},
					'dob': {
						validators: {
							notEmpty: {
								message: 'DOB is Required'
							},
							
						}
					},
					'address': {
						validators: {
							notEmpty: {
								message: 'Address is Required'
							},
							
						}
					},
					'nationality': {
						validators: {
							notEmpty: {
								message: 'Nationality is Required'
							},
							
						}
					},
					'state': {
						validators: {
							notEmpty: {
								message: 'State is Required'
							},
							
						}
					},
					'lga': {
						validators: {
							notEmpty: {
								message: 'LGA is Required'
							},
							
						}
					},
					'gender': {
						validators: {
							notEmpty: {
								message: 'Gender is Required'
							},
							
						}
					},
					'password': {
						validators: {
							notEmpty: {
								message: 'Password is required'
							},
							
						}
					},
					'password_confirmation': {
                        validators: {
                            notEmpty: {
                                message: 'The password confirmation is required'
                            },
                            identical: {
                                compare: function() {
                                    return form.querySelector('[name="password"]').value;
                                },
                                message: 'The password and its confirm are not the same'
                            }
                        }
                    },
				},
				plugins: {
					trigger: new FormValidation.plugins.Trigger(),
					bootstrap: new FormValidation.plugins.Bootstrap5({
						rowSelector: '.fv-row',
                        eleInvalidClass: '',
                        eleValidClass: ''
					})
				}
			}
		));

		// Step 2
		validations.push(FormValidation.formValidation(
			form,
			{
				fields: {
					'profile': {
						validators: {
							notEmpty: {
								message: 'Profile Image is required'
							},
							file: {
								extension: 'jpeg,jpg,png',
								type: 'image/jpeg,image/png',
								message: 'The selected file is not valid Upload only JPEG/JPG/PNG'
							},
						}
					},
					
					
				},
				plugins: {
					trigger: new FormValidation.plugins.Trigger(),
					// Bootstrap Framework Integration
					bootstrap: new FormValidation.plugins.Bootstrap5({
						rowSelector: '.fv-row',
                        eleInvalidClass: '',
                        eleValidClass: ''
					})
				}
			}
		));

		// Step 3
		validations.push(FormValidation.formValidation(
			form,
			{
				fields: {
					'admission_type': {
						validators: {
							notEmpty: {
								message: 'Admission type is required'
							}
						}
					},
					'is_hotel': {
						validators: {
							notEmpty: {
								message: 'Hotel is required'
							}
						}
					},
					
				},
				plugins: {
					trigger: new FormValidation.plugins.Trigger(),
					// Bootstrap Framework Integration
					bootstrap: new FormValidation.plugins.Bootstrap5({
						rowSelector: '.fv-row',
                        eleInvalidClass: '',
                        eleValidClass: ''
					})
				}
			}
		));

		// Step 4
		validations.push(FormValidation.formValidation(
			form,
			{
				fields: {
					'guardian_firstname': {
						validators: {
							notEmpty: {
								message: 'Guardian First name required'
							}
						}
					},
					'guardian_surname': {
						validators: {
							notEmpty: {
								message: 'Guardian surname required'
							},
                            
						}
					},
					'guardian_email': {
						validators: {
							notEmpty: {
								message: 'Guardian email required'
							},
							emailAddress: {
								message: 'This is not a valid email address'
							}
						}
					},
					'guardian_mobile': {
						validators: {

							notEmpty: {
								message: 'Guardian mobile required'
							},
							numeric: {
								message: 'This is not a valid Mobile Number'
							}
						}
					},
					'guardian_gender': {
						validators: {
							notEmpty: {
								message: 'Guardian Gender required'
							},
							
						}
					},
					'guardian_contact': {
						validators: {
							notEmpty: {
								message: 'Guardian Address required'
							},
							
						}
					}
				},

				plugins: {
					trigger: new FormValidation.plugins.Trigger(),
					// Bootstrap Framework Integration
					bootstrap: new FormValidation.plugins.Bootstrap5({
						rowSelector: '.fv-row',
                        eleInvalidClass: '',
                        eleValidClass: ''
					})
				}
			}
		));
		
	}

	return {
		// Public Functions
		init: function () {
			// Elements
			modalEl = document.querySelector('#kt_modal_create_account');

			if (modalEl) {
				modal = new bootstrap.Modal(modalEl);	
			}			

			stepper = document.querySelector('#kt_create_account_stepper');

			form = stepper.querySelector('#kt_create_account_form');

			initStepper();
			initValidation();
			handleForm();
		}
	};
}();

// On document ready
KTUtil.onDOMContentLoaded(function() {
    KTCreateAccount.init();
});
/******/ })()
;
//# sourceMappingURL=create-account.js.map

// Form-Validation.js
// ====================================================================
// This file should not be included in your project.
// This is just a sample how to initialize plugins or components.
//
// - ThemeOn.net -


$(document).ready(function() {
    var faIcon = {
        valid: 'fa fa-check-circle fa-lg text-success',
        invalid: 'fa fa-times-circle fa-lg',
        validating: 'fa fa-refresh'
    }
    // FORM VALIDATION ON ACCORDION
    // =================================================================
    $('#demo-bv-accordion').bootstrapValidator({
        message: 'This value is not valid',
        feedbackIcons: faIcon,
        fields: {
            nm: {
                validators: {
                    notEmpty: {
                        message: 'Nama tidak boleh kosong'
                    },
                    regexp: {
                        regexp: /^[A-Z\s]+$/i,
                        message: 'Nama hanya terdiri huruf alfabet dan spasi'
                    }
                }
            },
            nama: {
                validators: {
                    notEmpty: {
                        message: 'Nama tidak boleh kosong'
                    },
                    regexp: {
                        regexp: /^[A-Z\s]+$/i,
                        message: 'Nama hanya terdiri huruf alfabet dan spasi, sesuai KTP/KK'
                    }
                }
            },
            lastName: {
                validators: {
                    notEmpty: {
                        message: 'The last name is required and cannot be empty'
                    },
                    regexp: {
                        regexp: /^[A-Z\s]+$/i,
                        message: 'The last name can only consist of alphabetical characters and spaces'
                    }
                }
            },
            confirmPassword: {
                validators: {
                    notEmpty: {
                        message: 'mohon isikan confirm password'
                    },
                    identical: {
                        field: 'password',
                        message: 'password tidak sama'
                    }
                }
            },
            foto_formal: {
                validators: {
                    notEmpty: {
                        message: 'mohon isikan foto formal'
                    },
                    file: {
                        extension: 'jpg',
                        type: 'application/pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document,application/rtf,application/zip',
                        maxSize: 5*1024*1024,
                        message: 'Tidak menerima file (doc,docx,pdf,zip,rtf) dan maksimal file 5 MB'
                    }
                }
            },
            s_pernyataan: {
                validators: {
                    notEmpty: {
                        message: 'mohon isikan scan surat pernyataan'
                    },
                    file: {
                        extension: 'jpg',
                        type: 'application/pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document,application/rtf,application/zip',
                        maxSize: 5*1024*1024,
                        message: 'Tidak menerima file (doc,docx,pdf,zip,rtf) dan maksimal file 5 MB'
                    }
                }
            },
            scan_ktp: {
                validators: {
                    notEmpty: {
                        message: 'mohon isikan scan ktp'
                    },
                    file: {
                        extension: 'jpg',
                        type: 'application/pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document,application/rtf,application/zip',
                        maxSize: 5*1024*1024,
                        message: 'Tidak menerima file (doc,docx,pdf,zip,rtf) dan maksimal file 5 MB'
                    }
                }
            },
            image: {
                validators: {
                    file: {
                        extension: 'jpg,png',
                        type: 'image/jpeg,image/png',
                        maxSize: 2*1024*1024,
                        message: 'Tidak menerima file (doc,pdf,docx,zip,rtf) dan maksimal file 2 MB'
                    }
                }
            },
            scan_kta :{
                validators:{
                    notEmpty:{
                        message: 'mohon isikan scan kta'
                    },
                    file:{
                        extension: 'jpg',
                        type: 'application/pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document,application/rtf,application/zip',
                        maxSize: 5*1024*1024,
                        message: 'Tidak menerima file (doc,docx,pdf,zip,rtf) dan maksimal file 5 MB'
                    }
                }
            },
            scan_ijazah:{
                validators:{
                    notEmpty:{
                        message: 'mohon isikan scan ijazah'
                    },
                    file:{
                        extension: 'jpg',
                        type: 'application/pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document,application/rtf,application/zip',
                        maxSize: 5*1024*1024,
                        message: 'Tidak menerima file (doc,docx,pdf,zip,rtf) dan maksimal file 5 MB'
                    }
                }
            },
            scan_sertifikat:{
                validators:{
                    notEmpty:{
                        message: 'mohon isikan scan serifikat pelatihan'
                    },
                    file:{
                        extension: 'jpg',
                        type: 'application/pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document,application/rtf,application/zip',
                        maxSize: 5*1024*1024,
                        message: 'Tidak menerima file (doc,docx,pdf,zip,rtf) dan maksimal file 5 MB'
                    }
                }
            },
            scan_skck:{
                validators:{
                    notEmpty:{
                        message: 'mohon isikan scan skck'
                    },
                    file:{
                        extension: 'jpg',
                        type: 'application/pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document,application/rtf,application/zip',
                        maxSize: 5*1024*1024,
                        message: 'Tidak menerima file (doc,docx,pdf,zip,rtf) dan maksimal file 5 MB'
                    }
                }
            },
            scan_skbn:{
                validators:{
                    notEmpty:{
                        message: 'mohon isikan scan surat keterangan bebas narkoba'
                    },
                    file:{
                        extension: 'jpg',
                        type: 'application/pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document,application/rtf,application/zip',
                        maxSize: 5*1024*1024,
                        message: 'Tidak menerima file (doc,docx,pdf,zip,rtf) dan maksimal file 5 MB'
                    }
                }
            },
            scan_kk:{
                validators:{
                    notEmpty:{
                        message: 'mohon isikan scan kartu keluarga'
                    },
                    file:{
                        extension: 'jpg',
                        type: 'application/pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document,application/rtf,application/zip',
                        maxSize: 5*1024*1024,
                        message: 'Tidak menerima file (doc,docx,pdf,zip,rtf) dan maksimal file 5 MB'
                    }
                }
            },
            scan_akte:{
                validators:{
                    notEmpty:{
                        message: 'mohon isikan scan akta kelahiran'
                    },
                    file:{
                        extension: 'jpg',
                        type: 'application/pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document,application/rtf,application/zip',
                        maxSize: 5*1024*1024,
                        message: 'Tidak menerima file (doc,docx,pdf,zip,rtf) dan maksimal file 5 MB'
                    }
                }
            },
            piagam:{
                validators:{
                    notEmpty:{
                        message: 'mohon isikan scan piagam'
                    },
                    file:{
                        extension: 'jpg',
                        type: 'application/pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document,application/rtf,application/zip',
                        maxSize: 5*1024*1024,
                        message: 'Tidak menerima file (doc,docx,pdf,zip,rtf) dan maksimal file 5 MB'
                    }
                }
            },
            nama_ayah: {
                validators: {
                    notEmpty: {
                        message: 'Mohon isikan nama ayah'
                    }
                }
            },
            namaIbu: {
                validators: {
                    notEmpty: {
                        message: 'Mohon isikan nama ibu'
                    }
                }
            },
            is: {
                validators: {
                    notEmpty: {
                        message: 'Mohon masukkan pesan anda'
                    }
                }
            },
            posisi: {
                validators: {
                    notEmpty:{
                        message: 'mohon pilih salah 1 dari 3 pilihan tersebut'
                    }
                }
            },
            jumlahSaudara: {
                validators: {
                    notEmpty: {
                        message: 'Mohon isikan jumlah saudara'
                    },
                    stringLength:{
                        min: 1,
                        max: 2,
                        message: 'jumlah saudara tidak boleh lebih dari 2 digit angka'
                    },
                    digits:{
                        message: 'mohon isikan dengan angka'
                    }
                }
            },
            no_ktp: {
                validators: {
                    notEmpty: {
                        message: 'mohon isikan no ktp'
                    },
                    digits: {
                        message: 'mohon diisi dengan angka'
                    }
                }
            },
             no_skp: {
                validators: {
                    notEmpty: {
                        message: 'mohon isikan nomor SKP pengantar dari desa/kecamatan'
                    }
                }
            },
            no_kk: {
                validators: {
                    notEmpty: {
                        message: 'mohon isikan nomor KK'
                    },
                    stringLength:{
                        min: 16,
                        max: 16,
                        message: 'mohon diisi dengan 16 digit nomor KK'
                    },
                    digits: {
                        message: ' '
                    }
                }
            },
            nik: {
                validators: {
                    notEmpty: {
                        message: 'mohon isikan NIK'
                    },
                     stringLength:{
                        min: 16,
                        max: 16,
                        message: 'mohon diisi dengan 16 digit angka NIK'
                    },
                    digits: {
                        message: ' '
                    }
                }
            },
            jk:{
                validators:{
                    notEmpty:{
                        message: 'mohon pilih salah 1 dari 2 pilihan tersebut'
                    }
                }
            },
            agama:{
                validators:{
                    notEmpty:{
                        message: 'mohon pilih salah 1 dari 5 pilihan tersebut'
                    }
                }
            },
            gol_darah:{
                validators:{
                    notEmpty:{
                        message: 'mohon pilih salah 1 dari 4 pilihan tersebut'
                    }
                }
            },
            status_perkawinan:{
                validators:{
                    notEmpty:{
                        message: 'mohon pilih salah 1 dari 2 pilihan tersebut'
                    }
                }
            },
            tinggi_badan:{
                validators:{
                    notEmpty:{
                        message: 'mohon isikan tinggi badan'
                    },
                    stringLength:{
                        min: 1,
                        max: 3,
                        message: 'tinggi badan tidak boleh lebih dari 3 digit angka'
                    },
                    digits: {
                        message: 'mohon isikan dengan angka'
                    }
                }
            },
            berat_badan:{
                validators:{
                    notEmpty:{
                        message: 'mohon isikan berat badan'
                    },
                    stringLength:{
                        min: 1,
                        max: 3,
                        message: 'berat badan tidak boleh lebih dari 3 digit angka'
                    },
                    digits:
                    {
                        message: 'mohon isikan dengan angka'
                    }
                }
            },
            no_hp: {
                validators:{
                    notEmpty:{
                        message: 'mohon isikan no hp'
                    },
                    stringLength:{
                        min: 1,
                        max: 13,
                        message: 'no hp tidak boleh lebih dari 13 digit angka'
                    },
                    digits:{
                        message: 'mohon isikan dengan angka'
                    }
                }
            },
            tempat_lahir: {
                validators: {
                    notEmpty: {
                        message: 'mohon isikan tempat lahir'
                    }
                }
            },
            tanggal_lahir:{
                validators:{
                    notEmpty:{
                        message: 'mohon isikan tanggal lahir'
                    }
                }
            },
            alamat:{
                validators:{
                    notEmpty:{
                        message: 'mohon isikan alamat dengan lengkap'
                    }
                }
            },
            dusun:{
                validators:{
                    notEmpty:{
                        message: 'mohon isikan dusun/jalan dengan benar'
                    }
                }
            },
            kodepos:{
                validators:{
                    notEmpty:{
                        message: 'mohon isikan kode pos dengan benar'
                    }
                }
            },
            kelurahan:{
                validators:{
                    notEmpty:{
                        message: 'mohon isikan kelurahan dengan benar'
                    }
                }
            },
            kecamatan:{
                validators:{
                    notEmpty:{
                        message: 'mohon isikan kecamatan dengan benar'
                    }
                }
            },
            username: {
                message: 'The username is not valid',
                validators: {
                    notEmpty: {
                        message: 'The username is required and cannot be empty'
                    },
                    stringLength: {
                        min: 4,
                        max: 30,
                        message: 'The username must be more than 4 and less than 30 characters long'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z0-9_\.]+$/,
                        message: 'The username can only consist of alphabetical, number, dot and underscore'
                    },
                    different: {
                        field: 'password',
                        message: 'The username and password cannot be the same as each other'
                    }
                }
            },
            email: {
                validators: {
                    notEmpty: {
                        message: 'mohon isikan email dengan lengkap'
                    },
                    emailAddress: {
                        message: 'silahkan isikan email anda dengan lengkap'
                    }
                }
            },
             mail: {
                validators: {
                    notEmpty: {
                        message: 'mohon isikan email dengan lengkap'
                    },
                    emailAddress: {
                        message: 'silahkan isikan email anda dengan lengkap'
                    }
                }
            },
            password: {
                validators: {
                    notEmpty: {
                        message: 'mohon isikan password'
                    },
                    different: {
                        field: 'username',
                        message: 'The password cannot be the same as username'
                    }
                }
            },
            memberType: {
                validators: {
                    notEmpty: {
                        message: 'The gender is required'
                    }
                }
            },
            bio:{
                validators: {
                    notEmpty: {
                        message: 'The bio is required and cannot be empty'
                    },
                }
            },
            phoneNumber: {
                validators: {
                    notEmpty: {
                        message: 'The phone number is required and cannot be empty'
                    },
                    digits: {
                        message: 'The value can contain only digits'
                    }
                }
            },
            city:{
                validators: {
                    notEmpty: {
                        message: 'The city is required and cannot be empty'
                    },
                }
            }
        }
    }).on('status.field.bv', function(e, data) {
        var $form = $(e.target),
        validator = data.bv,
        $collapsePane = data.element.parents('.collapse'),
        colId = $collapsePane.attr('id');

        if (colId) {
            var $anchor = $('a[href="#' + colId + '"][data-toggle="collapse"]');
            var $icon = $anchor.find('i');

        // Add custom class to panel containing the field
        if (data.status == validator.STATUS_INVALID) {
            $anchor.addClass('bv-col-error');
            $icon.removeClass(faIcon.valid).addClass(faIcon.invalid);
        } else if (data.status == validator.STATUS_VALID) {
            var isValidCol = validator.isValidContainer($collapsePane);
            if (isValidCol) {
                $anchor.removeClass('bv-col-error');
            }else{
                $anchor.addClass('bv-col-error');
            }
            $icon.removeClass(faIcon.valid + " " + faIcon.invalid).addClass(isValidCol ? faIcon.valid : faIcon.invalid);
        }
    }
});


    // FORM VALIDATION CUSTOM ERROR CONTAINER
    // =================================================================
    // Indicate where the error messages are shown.
    // Tooltip, Popover, Custom Container.
    // =================================================================
    



    // MASKED INPUT
    // =================================================================
    // Require Masked Input
    // http://digitalbush.com/projects/masked-input-plugin/
    // =================================================================


    // Initialize Masked Inputs
    // a - Represents an alpha character (A-Z,a-z)
    // 9 - Represents a numeric character (0-9)
    // * - Represents an alphanumeric character (A-Z,a-z,0-9)
    $('#demo-msk-date').mask('99/99/9999');
    $('#demo-msk-date2').mask('99-99-9999');
    $('#demo-msk-phone').mask('(999) 999-9999');
    $('#demo-msk-phone-ext').mask('(999) 999-9999? x99999');
    $('#demo-msk-taxid').mask('99-9999999');
    $('#demo-msk-ssn').mask('999-99-9999');
    $('#demo-msk-pkey').mask('a*-999-a999');



});

/**
 *	Copyright (C) 2015-19 CERBER TECH INC., https://wpcerber.com
 */
jQuery(document).ready(function ($) {

    /* Select2 */
    var crb_admin = $('#crb-admin');

    var crb_se2 = crb_admin.find('.crb-select2-ajax');
    if (crb_se2.length) {
        crb_se2.select2({
            allowClear: true,
            placeholder: crb_se2.data( 'placeholder' ),
            minimumInputLength: crb_se2.data('min_symbols') ? crb_se2.data('min_symbols') : '1',
            ajax: {
                url: ajaxurl,
                dataType: 'json',
                delay: 1000,
                data: function (params) {
                    return {
                        user_search: params.term,
                        action: 'cerber_ajax',
                        ajax_nonce: crb_ajax_nonce,
                    };
                },
                processResults: function( data ) {
                    return {
                        results: data
                    };
                },
                // cache: true // doesn't work due to "no-cache" header, see also: https://github.com/select2/select2/issues/3862
            }
        });
    }

    crb_se2 = crb_admin.find('.crb-select2');
    if (crb_se2.length) {
        crb_se2.select2();
    }

    //crb_se2 = crb_admin.find('#crb-select2-tags');
    crb_se2 = $('#crb-select2-tags');
    if (crb_se2.length) {
        crb_se2.select2({
            tags: true,
            allowClear: true
        });
    }

    /* WP Comments page */
    var comtable = 'table.wp-list-table.comments';

    if (typeof crb_lab_available !== 'undefined' && crb_lab_available && $(comtable).length) {
        $(comtable + " td.column-author").each(function (index) {
            var ip = $(this).find('a').last().text();
            var ip_id = cerber_get_id_ip(ip);
            //$(this).append('<p><img data-ip-id="' + ip_id + '" class="crb-no-hostname" src="' + crb_ajax_loader + '" style="float: none;"/></p>');
            $(this).append('<p><img data-ip-id="' + ip_id + '" class="crb-no-country" src="' + crb_ajax_loader + '" style="float: none;"/></p>');
        });
        //cerberLoadData('hostname');
        //cerberLoadData('country');
    }

    /* Load IP address data with AJAX */

    if ($(".crb-no-country").length) {
        cerberLoadData('country');
    }

    if ($(".crb-no-hostname").length) {
        cerberLoadData('hostname');
    }

    function cerberLoadData(slug) {
        var ip_list = $(".crb-no-" + slug).map(
            function () {
                return $(this).data('ip-id');
            }
        );
        if (ip_list.length !== 0) {
            $.post(ajaxurl, {
                action: 'cerber_ajax',
                crb_ajax_slug: slug,
                crb_ajax_list: ip_list.toArray(),
                ajax_nonce: crb_ajax_nonce
            }, cerberSetData);
        }
    }

    function cerberSetData(server_response) {
        var server_data = $.parseJSON(server_response);
        if (!server_data['data']) {
            console.log('No data loaded from server!');
            return;
        }
        var data = server_data['data'];
        var slug = server_data['slug'];
        $(".crb-no-" + slug).each(function (index) {
            $(this).replaceWith(data[$(this).data('ip-id')]);
        });
    }

    // ACL management

    $(".acl-table .delete_entry").click(function () {
        /* if (!confirm('<?php _e('Are you sure?','wp-cerber') ?>')) return; */
        $.post(ajaxurl, {
                action: 'cerber_ajax',
                acl_delete: $(this).data('ip'),
                ajax_nonce: crb_ajax_nonce
            },
            onDeleteSuccess
        );
        /*$(this).parent().parent().fadeOut(500);*/
        /* $(this).closest("tr").FadeOut(500); */
    });
    function onDeleteSuccess(server_data) {
        var cerber_response = $.parseJSON(server_data);
        $('.delete_entry[data-ip="' + cerber_response['deleted_ip'] + '"]').parent().parent().fadeOut(300);
    }

    //

    /*
     $('#add-acl-black').submit(function( event ) {
     $(this).find('[name="add_acl_B"]').val($(this).find("button:focus").val());
     });
     */

    $(".cerber-dismiss").click(function () {
        $(this).closest('.cerber-msg').fadeOut(500);

        $.get(ajaxurl, {
                action: 'cerber_ajax',
                ajax_nonce: crb_ajax_nonce,
                dismiss_info: 1,
                button_id: $(this).attr('id'),
            }
        );
    });

    $(".diag-text").on("keypress", function(e) {
        e.preventDefault();
    });

    function cerber_get_id_ip(ip) {
        var id = ip.replace(/\./g, '-');
        id = id.replace(/:/g, '_');

        return id;
    }

    /* Traffic */

    var crb_traffic = $('#crb-traffic');

    crb_traffic.find('tr.crb-toggle td.crb-request').click(function () {
        var request_details = $(this).parent().next();
        //request_details.slideToggle(100);
        request_details.toggle();
        //request_details.data('session-id');
    });

    crb_traffic.find('tr').mouseenter(function() {
        $(this).find('a.crb-traffic-more').show();
    });

    crb_traffic.find('tr').mouseleave(function() {
        $(this).find('a.crb-traffic-more').hide();
    });

    /* Enabling conditional input setting fields */

    var setting_form = $('.crb-settings');
    setting_form.find('input').change(function () {
        var enabler_id = $(this).attr('id');
        var enabler_val;
        if ('checkbox' === $(this).attr('type')) {
            if ($(this).is(':checked')) {
                enabler_val = true;
            }
            else {
                enabler_val = false;
            }
        }
        else {
            enabler_val = $(this).val();
        }
        setting_form.find('[data-enabler="' + enabler_id + '"]').each(function () {
            var input_data = $(this).data();
            var method;
            if (typeof input_data['enabler_value'] !== "undefined") {
                if (enabler_val === input_data['enabler_value']) {
                    method = 'show';
                }
                else {
                    method = 'hide';
                }
            }
            else {
                if (enabler_val) {
                    method = 'show';
                }
                else {
                    method = 'hide';
                }
            }

            var element = $(this).closest('tr');
            element[method]();
        });
    });

});

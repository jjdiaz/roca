'use strict';
/*
 * /src/Acme/Bundle/BlogBundle/Resources/public/js/configuration/tab.js
 */
define([
        'underscore',
        'oro/translator',
        'routing',
        'jquery',
        'pim/form',
        'pim/fetcher-registry',
        'pim/formatter/choices/base',
        'pim/initselect2',
        'cloudinary/template/system/group/configuration'
       ],

    function (_,
              __,
              Routing,
              $,
              BaseForm,
              FetcherRegistry,
              ChoicesFormatter,
              initSelect2,
              template){
        return BaseForm.extend({
            events: {
                'change .asm-cloudinary-config': 'updateModel',
                'click #check-connection': 'checkConnection'
            },

            isGroup: true,
            label: 'Cloudinary',    // 'asm_cloudinary_connector.configuration.tab.label',
            template: _.template(template),
            areCredentialsValid: null,

            configure() {
                this.trigger('tab:register', {
                    code: this.code,
                    label: this.label,
                });

                return BaseForm.prototype.configure.apply(this, arguments);
            },

            /**
             * {@inheritdoc}
             */
            render() {
                this.$el.html(this.template({
                    cloudname: this.getFormData()['cloudinaryconnector___cloud_name'] ?
                        this.getFormData()['cloudinaryconnector___cloud_name'] : '',
                    apikey: this.getFormData()['cloudinary_connector___api_key'] ?
                        this.getFormData()['cloudinary_connector___api_key'] : '',
                    apisecret: this.getFormData()['cloudinary_connector___api_secret'] ?
                        this.getFormData()['cloudinary_connector___api_secret'] : '',
                }));

                // const searchOptions = {
                //     options: {
                //         types: [
                //             'pim_catalog_text',
                //             'pim_catalog_textarea'
                //         ]
                //     }
                // };
                //
                // FetcherRegistry.getFetcher('attribute').search(searchOptions)
                //     .then(function (attributes) {
                //         const choices = _.chain(attributes)
                //             .filter(function (attribute) {
                //                 return attribute.localizable;
                //             })
                //             .map(function (attribute) {
                //                 return ChoicesFormatter.formatOne(attribute);
                //             })
                //             .value();
                //         initSelect2.init(this.$('input.select-field'), {
                //             data: choices,
                //             multiple: true,
                //             containerCssClass: 'input-xxlarge'
                //         });
                //     }.bind(this));


                this.$('.switch').bootstrapSwitch();
                this.delegateEvents();
                console.dir(this);
                return BaseForm.prototype.render.apply(this, arguments);
            },


            checkConnection() {
              const data = this.getFormData();
              const form_cloud_name = data.cloud_name ? data.cloud_name : '';
              const form_cloud_api_key = data.api_key ? data.api_key : '';
              const form_clour_api_secret = data.api_secret ? data.api_secret : '';
                console.dir(data);
              $.ajax({
                  type: 'POST',
                  url: Routing.generate('cloudinary_connector_check'),
                  data: {cloud_name: form_cloud_name, api_key: form_cloud_api_key, api_secret: form_clour_api_secret },
                  success: function () {
                      const prototype = $('#connection-status-prototype').html();
                      const replacements = {
                          '%granted%': 'granted',
                          '%icon%': 'ok',
                          '%status_message%': 'Credentials are valid'
                      };
                      const connectionStatusHtml = prototype.replace(/%\w+%/g, function (all) {
                          return replacements[all] || all;
                      });
                      $('#connection-status').html(connectionStatusHtml);
                  },
                  error: function () {
                      const prototype = $('#connection-status-prototype').html();
                      const replacements = {
                          '%granted%': 'nonGranted',
                          '%icon%': 'remove',
                          '%status_message%': 'Login and/or password is not valid'
                      };
                      const connectionStatusHtml = prototype.replace(/%\w+%/g, function (all) {
                          return replacements[all] || all;
                      });
                      $('#connection-status').html(connectionStatusHtml);
                  }
              });
            },
            /**
             * {@inheritdoc}
             * @returns {*}
             */



            /**
             * Update model after value change
             *
             * @param {Event} event
             */
            updateModel: function (event) {
                const name = event.target.name;
                const data = this.getFormData();
                let newValue = event.target.value;
                if ('checkbox' == $(event.target).attr('type')) {
                    newValue = $(event.target).prop('checked') ? true : false;
                }
                if (name in data) {
                    data[name].value = newValue;
                } else {
                    data[name] = {value: newValue};
                }
                this.setData(data);
            },


            /**
             * Update model after value change
             *
             * @param {Event} event
             */
            updateModelOld(event) {

                const name = event.target.name;
                const data = this.getFormData();
                let newValue = event.target.value;

                if(name in data){
                    data[name].value = newValue;
                    data[name].scope= 'app';
                    data[name].use_parent_scope_value = false;
                }else {
                    data[name] = {value: newValue, scope: 'app', use_parent_scope_value: false};
                }

                //data['pim_ui___loading_messages']= {value: newValue};

                this.setData(data);
                console.dir(data);
            }
        });
    }
);
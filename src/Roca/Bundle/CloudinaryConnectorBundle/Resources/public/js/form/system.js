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
        'cloudinaryconnector/js/templates/system/group/configuration.html'
       ],

    function (_,
              __,
              Routing,
              $,
              BaseForm,
              FetcherRegistry,
              ChoicesFormatter,
              initSelect2,
              template
    ){
        return BaseForm.extend({
            events: {
                'change .asm-cloudinary-config': 'updateModel',
                'click #check-connection': 'checkConnection'
            },

            isGroup: true,
            label: 'asm_cloudinary_connector.configuration.tab.label',
            template: _.template(template),
            areCredentialsValid: null,
            fallbackChannel: null,

            /**
             * {@inheritdoc}
             */
            configure() {
                this.trigger('tab:register', {
                    code: this.code,
                    label: this.label,
                });

                return BaseForm.prototype.configure.apply(this, arguments);
            },
            checkConnection() {
              const data = this.getFormData();
              const form_cloud_name = data.cloud_name ? data.cloud_name : '';
              const form_cloud_api_key = data.api_key ? data.api_key : '';
              const form_clour_api_secret = data.api_secret ? data.api_secret : '';

              $.ajax({
                  type: 'POST',
                  url: Routing.generate('asm_cloudinary_connector_check'),
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
            render() {
                this.$el.html(this.template({
                    cloud_name: this.getFormData().cloud_name ? this.getFormData().cloud_name : '',
                    api_key: this.getFormData().api_key ? this.getFormData().api_key : '',
                    api_secret: this.getFormData().api_secret ? this.getFormData().api_secret : '',
                }));
                this.$('.switch').bootstrapSwitch();
                this.delegateEvents();
                return BaseForm.prototype.render.apply(this, arguments);
            },

            /**
             * Update model after value change
             *
             * @param {Event} event
             */
            updateModel(event) {

                const name = 'pim_cloudinary___' + event.target.name;
                const data = this.getFormData();
                const newValue = event.target.value;

                if(name in data){
                    data[name].value = newValue;
                    data[name].scope= 'app';
                    data[name].use_parent_scope_value = false;
                }else {
                    data[name] = {value: newValue, scope: 'app', use_parent_scope_value: false};
                }

                data['pim_ui___loading_messages']= {value: newValue};

                this.setData(data);
                console.dir(data);
            }
        });
    }
);
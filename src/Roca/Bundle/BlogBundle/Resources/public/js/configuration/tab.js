'use strict';
/*
 * /src/Acme/Bundle/BlogBundle/Resources/public/js/configuration/tab.js
 */
define(['pim/form'],
    function (BaseForm) {
        return BaseForm.extend({
            configure: function () {
                this.trigger('tab:register', {
                    code: this.code,
                    isVisible: this.isVisible.bind(this),
                    label: 'My tab'
                });

                return BaseForm.prototype.configure.apply(this, arguments);
            },
            render: function () {
                this.$el.html('<br> Hello world');

                return this;
            },
            isVisible: function () {
                return true;
            }
        });
    }
);
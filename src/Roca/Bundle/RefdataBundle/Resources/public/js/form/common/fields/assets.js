/**

/**
 * @author    Pierre Allard <pierre.allard@akeneo.com>
 * @copyright 2018 Akeneo SAS (http://www.akeneo.com)
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 */
'use strict';

define(
    [
        'jquery',
        'underscore',
        'pim/form/common/fields/field',
        'pimee/picker/asset-collection'
    ],
    function (
        $,
        _,
        Field,
        AssetCollectionPicker
    ) {
        return Field.extend({
            /**
             * {@inheritdoc}
             */
            initialize() {
                this.assetCollectionPicker = new AssetCollectionPicker();

                this.assetCollectionPicker.on('collection:change', function (assets) {
                    this.setData(assets);
                    var data = [];
                    data.push({'code': assets[0]});
                    this.setData(data);
                    console.dir(this);
                }.bind(this));

                Field.prototype.initialize.apply(this, arguments);
            },
            /**
             * {@inheritdoc}
             */
            setValues() {
                Field.prototype.setValues.apply(this, arguments);

                this.assetCollectionPicker.setData(this.getCurrentValue().data);
            },

            /**
             * {@inheritdoc}
             */
            renderInput: function(templateContext) {
                // console.dir(templateContext);
                // const entityType = templateContext.context.entity.meta.model_type;
                // const entityIdentifier = 'product_model' === entityType
                //     ? templateContext.context.entity.code
                //     : templateContext.context.entity.identifier;

                console.dir(this);
                const entityType = 'designline';
                const entityIdentifier = '2';

                // const context = _.extend(
                //     {},
                //     this.context,
                //     {editMode: templateContext.editMode},
                //     {attributeCode: templateContext.attribute.code},
                //     {entityIdentifier: entityIdentifier},
                //     {entityType: entityType}
                // );


                const context = _.extend(
                    {},
                    this.context,
                    {editMode: false},
                    {locale: "en_INT_GB", scope: "ecommerce"},
                    {attributeCode: 0},
                    {entityIdentifier: 'designline'},
                    {entityType: 'custom'}
                );


                this.assetCollectionPicker.setContext(context);
                return this.assetCollectionPicker.render().$el;
            },
            setFocus() {
                this.el.scrollIntoView(false);
            }
        });
    });

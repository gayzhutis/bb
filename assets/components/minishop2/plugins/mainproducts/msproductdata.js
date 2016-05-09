miniShop2.combo.Available = function(config) {
    config = config || {};
    Ext.applyIf(config,{
        name: config.name || 'not_available'
        ,fieldLabel: _('ms2_product_' + config.name || 'not_available')
        ,hiddenName: config.name || 'currency'
        ,description: '<b></b>'+_('ms2_product_not_available_help')
        ,displayField: 'not_available'
        ,valueField: 'id'
        ,anchor: '99%'
        ,fields: ['id', 'name']
        ,pageSize: 20
        ,url: miniShop2.config.connector_url
        ,typeAhead: false
        ,editable: false
        ,allowBlank: false
        ,store: [['1', 'Товар закончился'],['0', 'В продаже']]
    });
    miniShop2.combo.Vendor.superclass.constructor.call(this,config);
};
Ext.extend(miniShop2.combo.Available,MODx.combo.ComboBox);
Ext.reg('minishop2-combo-available',miniShop2.combo.Available);

miniShop2.combo.Yes_no = function(config) {
    config = config || {};
    Ext.applyIf(config,{
        name: config.name
        ,fieldLabel: _('ms2_product_' + config.name)
        ,hiddenName: config.name
        ,description: '<b></b>'+_('ms2_product_'+config.name+'_help')
        ,displayField: config.name
        ,valueField: 'id'
        ,anchor: '99%'
        ,fields: ['id', 'name']
        ,pageSize: 20
        ,url: miniShop2.config.connector_url
        ,typeAhead: false
        ,editable: false
        ,allowBlank: false
        ,store: [['1', 'Да'],['0', 'Нет']]
    });
    miniShop2.combo.Vendor.superclass.constructor.call(this,config);
};
Ext.extend(miniShop2.combo.Yes_no,MODx.combo.ComboBox);
Ext.reg('minishop2-combo-yes-no',miniShop2.combo.Yes_no);

miniShop2.window.RichText = function(config) {
    config = config || {};
      
    Ext.applyIf(config,{
        layout: 'form'
        ,fields: [{
            xtype: 'textarea'
            ,name: 'rte_field'
            ,id: 'mycmp-rte-field'
            ,fieldLabel: 'Rich Text Field'
        }]
    });
    miniShop2.window.RichText.superclass.constructor.call(this,config);
    /*
    this.on('activate',function() {
        // load Rich Text Editor
        if (typeof Tiny != 'undefined' && !this.RTEloaded) { 
            MODx.loadRTE('mycmp-rte-field');
            this.RTEloaded = true;
        }
    },this);
    this.on('show',function() {
            if (this.RTEloaded) {
                tinyMCE.get('mycmp-rte-field').setContent('new content...');
            }                 
    },this);
    */
};
Ext.extend(miniShop2.window.RichText,MODx.Window);
Ext.reg('mycmp-window-richtext',miniShop2.window.RichText);

miniShop2.plugin.pluginname = {
    getFields: function(config) {
        if (config.record['template']=='37'){//ограничение полей для Комплектов
            return {
                not_available: {xtype: 'minishop2-combo-available', description: '<b></b><br />'+_('ms2_product_not_available_help')},
                free_shaker: {xtype: 'minishop2-combo-yes-no', description: '<b></b><br />'+_('ms2_product_free_shaker_help')},
                free_shipping: {xtype: 'minishop2-combo-yes-no', description: '<b></b><br />'+_('ms2_product_free_shipping_help')},
                custom: {xtype: 'minishop2-combo-yes-no', description: '<b></b><br />'+_('ms2_product_custom_help')},
                composition: {xtype: 'htmleditor', description: '<b></b><br />'+_('ms2_product_composition_help')}
            }
        }
        return {//поля по умолчанию для всех товаров
            currency_price: {xtype: 'numberfield', description: '<b></b><br />'+_('ms2_product_currency_price_help')},
            currency_skidka_price: {xtype: 'numberfield', description: '<b></b><br />'+_('ms2_product_currency_skidka_price_help')},
            currency: {xtype: 'minishop2-combo-autocomplete', description: '<b></b><br />'+_('ms2_product_currency_help')},
            manufacturer: {xtype: 'minishop2-combo-autocomplete', description: '<b></b><br />'+_('ms2_product_manufacturer_help')},
            category: {xtype: 'minishop2-combo-autocomplete', description: '<b></b><br />'+_('ms2_product_category_help')},
            subcategs: {xtype: 'minishop2-combo-autocomplete', description: '<b></b><br />'+_('ms2_product_subcategs_help')},
            sport: {xtype: 'minishop2-combo-autocomplete', description: '<b></b><br />'+_('ms2_product_sport_help')},
            ingredients: {xtype: 'minishop2-combo-autocomplete', description: '<b></b><br />'+_('ms2_product_ingredients_help')},
            goal: {xtype: 'minishop2-combo-autocomplete', description: '<b></b><br />'+_('ms2_product_goal_help')},
            packing: {xtype: 'numberfield', decimalPrecision: 4, description: '<b></b><br />'+_('ms2_product_packing_help')},
            packing_unit: {xtype: 'minishop2-combo-autocomplete', description: '<b></b><br />'+_('ms2_product_packing_unit_help')},
            number_of_servings: {xtype: 'numberfield', decimalPrecision: 1, description: '<b></b><br />'+_('ms2_product_number_of_servings_help')},
            taste: {xtype: 'minishop2-combo-autocomplete', description: '<b></b><br />'+_('ms2_product_taste_help')},
            // composition: {xtype: 'mycmp-window-richtext', description: '<b></b><br />'+_('ms2_product_composition_help')},
            recommendations: {xtype: 'minishop2-combo-autocomplete', description: '<b></b><br />'+_('ms2_product_recommendations_help')},
            analogs: {xtype: 'textfield', description: '<b></b><br />'+_('ms2_product_analogs_help')},
            gender: {xtype: 'minishop2-combo-autocomplete', description: '<b></b><br />'+_('ms2_product_gender_help')},
            barcode: {xtype: 'minishop2-combo-autocomplete', description: '<b></b><br />'+_('ms2_product_barcode_help')},
            not_available: {xtype: 'minishop2-combo-available', description: '<b></b><br />'+_('ms2_product_not_available_help')},
            free_shaker: {xtype: 'minishop2-combo-yes-no', description: '<b></b><br />'+_('ms2_product_free_shaker_help')},
            free_shipping: {xtype: 'minishop2-combo-yes-no', description: '<b></b><br />'+_('ms2_product_free_shipping_help')},
            custom: {xtype: 'minishop2-combo-yes-no', description: '<b></b><br />'+_('ms2_product_custom_help')},
            composition: {xtype: 'htmleditor', description: '<b></b><br />'+_('ms2_product_composition_help')}
        }
    }
    ,getColumns: function() {
        return {
            manufacturer: {width:50, sortable:false, editor: {xtype:'minishop2-combo-autocomplete', name: 'manufacturer'}},
            category: {width:50, sortable:false, editor: {xtype:'minishop2-combo-autocomplete', name: 'category'}},
            subcategs: {width:50, sortable:false, editor: {xtype:'minishop2-combo-autocomplete', name: 'subcategs'}},
            sport: {width:50, sortable:false, editor: {xtype:'minishop2-combo-autocomplete', name: 'sport'}},
            ingridients: {width:50, sortable:false, editor: {xtype:'minishop2-combo-autocomplete', name: 'ingridients'}},
            goal: {width:50, sortable:false, editor: {xtype:'minishop2-combo-autocomplete', name: 'goal'}},
            packing: {width:50, sortable:false, editor: {xtype:'numberfield', decimalPrecision: 1, name: 'packing'}},
            packing_unit: {width:50, sortable:false, editor: {xtype:'minishop2-combo-autocomplete', name: 'packing_unit'}},
            number_of_servings: {width:50, sortable:false, editor: {xtype:'numberfield', decimalPrecision: 1, name: 'number_of_servings'}},
            taste: {width:50, sortable:false, editor: {xtype:'minishop2-combo-autocomplete', name: 'taste'}},
            composition: {width:450, sortable:false, editor: {xtype:'tinymce', name: 'composition'}},
            recommendations: {width:50, sortable:false, editor: {xtype:'minishop2-combo-autocomplete', name: 'recommendations'}},
            custom: {width:50, sortable:false, editor: {xtype:'minishop2-combo-yes-no', name: 'custom'}},
            gender: {width:50, sortable:false, editor: {xtype:'minishop2-combo-autocomplete', name: 'gender'}},
        }
    }
};
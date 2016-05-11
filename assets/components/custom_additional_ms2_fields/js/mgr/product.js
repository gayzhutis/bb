var add = {
    composition: {
        xtype: 'textarea',
        id: 'composition-rte-field',
        fieldLabel: 'Состав товара',
        height: '100px'
    },
    /*features: {
        xtype: 'textarea',
        fieldLabel: 'Характеристики'
    },
    exposition: {
        xtype: 'textarea',
        fieldLabel: 'Описание'
    },
    device: {
        xtype: 'textarea',
        fieldLabel: 'Механизм'
    },
    compositionset: {
        xtype: 'textarea',
        fieldLabel: 'Состав набора'
    },
    technology: {
        xtype: 'textarea',
        fieldLabel: 'Технологии'
    }*/
};
var items = [];
 
Ext.ComponentMgr.onAvailable('minishop2-product-settings-panel', function() {
    this.on('beforerender', function() {
        var listeners = {
            change: {
                fn: MODx.fireResourceFormChange
            },
            select: {
                fn: MODx.fireResourceFormChange
            },
            keydown: {
                fn: MODx.fireResourceFormChange
            },
            check: {
                fn: MODx.fireResourceFormChange
            },
            uncheck: {
                fn: MODx.fireResourceFormChange
            }
        };
        var main = Ext.getCmp('minishop2-product-settings');
        if (!!main) {
            var record = main.initialConfig.items[0].record;
        }
        for (var i = 0; i < custom.fields.length; i++) {
            var field = custom.fields[i];
            if (add[field]) {
                Ext.applyIf(add[field], {
                    name: field,
                    cls: 'custom-' + field,
                    anchor: '99%',
                    listeners: listeners
                });
                if (!!record[field]) {
                    Ext.applyIf(add[field], {
                        value: record[field]
                    });
                }
                items.push(add[field]);
            }
        }
 
        this.add({
            title: 'Дополнительно',
            hideMode: 'offsets',
            items: [
                /*{
                 html: 'Дополнительные характеристики товара',
                 cls: 'modx-page-header container',
                 border: false
                 },*/
                {
                    layout: 'column',
                    border: false,
                    bodyCssClass: 'tab-panel-wrapper ',
                    style: 'padding: 15px;',
                    items: [{
                        columnWidth: 1,
                        xtype: 'panel',
                        border: false,
                        layout: 'form',
                        labelAlign: 'top',
                        preventRender: true,
                        items: items
                    }]
                }
            ]
        });
    });
});

// Tiny Rich MCE initialization.
Ext.onReady(function() {
    MODx.loadRTE('composition-rte-field');
});
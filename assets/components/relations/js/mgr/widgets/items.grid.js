function startImport(e) {
    var w = MODx.load({
        xtype: 'relations-window-import-product'
    });
    w.fp.getForm().reset().setValues({
        'import-offset-products':0
    });
    w.show(e.target,function() {},this);
}

function  startPriceRecount(e) {
    var w = MODx.load({
        xtype: 'relations-price-rec'
    });    
    w.show(e.target,function() {},this);
} 
function  startExport(e) {
    var w = MODx.load({
        xtype: 'relations-export'
    });    
    w.show(e.target,function() {},this);
} 

Relations.panel.Items = function(config) {
    config = config || {};
    Ext.applyIf(config,{
        id: 'relations-grid-items'
        ,
        url: Relations.config.connector_url
        ,
        baseParams: {
            action: 'mgr/item/getlist'
        }
        ,
        autoHeight: true
        ,
        paging: false
        ,
        resizable: true
        ,
        columns: [

        ]
        ,
        tbar: [{
            xtype: 'buttongroup',
            title: '',
            defaults: {
                scale: 'large'
            }
            ,
            columns: 3,
            items: [
                {
                    text: 'Импорт прайса товаров'
                    ,
                    handler: this.importProduct
                    ,
                    scope: this
                },
                {
                    text: 'Пересчет цен'
                    ,
                    handler: this.startRecount
                    ,
                    scope: this
                }
                ,
                {
                    text: 'Экспорт прайса'
                    ,
                    handler: this.startExportPrice
                    ,
                    scope: this
                }
            ]

        }]

    });
    Relations.panel.Items.superclass.constructor.call(this,config);
};
Ext.extend(Relations.panel.Items,MODx.FormPanel,{
    windows: {}

    ,
    createItem: function(btn,e) {
    }
    ,
    updateItem: function(btn,e) {

    }
    ,
    importProduct: function(btn,e) {
        startImport(e);
    }
    ,
    startRecount: function(btn,e) {
        startPriceRecount(e);
    }
    ,
    startExportPrice: function(btn,e) {
        startExport(e);
    }
    ,
    removeItem: function(btn,e) {
    }
});
Ext.reg('relations-grid-items',Relations.panel.Items);

//import запчастей
Relations.window.importProduct = function(config) {
    config = config || {};
    this.ident = config.ident || 'mecitem'+Ext.id();
    Ext.applyIf(config,{
        title: 'Импорт прайса товаров'
        ,
        id: this.ident
        ,
        height: 250
        ,
        width: 475
        ,
        url: Relations.config.connector_url
        ,
        action: 'mgr/item/import_price'
        ,
        fields: [
            {
                xtype: 'numberfield'
                ,
                id: 'import-offset-products'
                ,
                name: 'offset'
                ,
                allowDecimals: false
                ,
                allowNegative: false
                ,
                inputValue: 0
                ,
                value: '0'
                ,
                anchor: '100%'
                ,
                fieldLabel: 'Номер строки, с которой начать импорт'
                //,allowBlank: false
            }
            ,{
                xtype: 'modx-combo-browser'
                ,
                name: 'file'
                ,
                anchor: '100%'
                ,
                emptyText: 'Выберите файл'
                ,
                value: ''
                ,
                allowBlank: false
                ,
                hideFiles: true
                ,
                allowedFileTypes: 'xlsx'
                ,
                source: 3
                ,
                editable: false
            }
        ]
        ,
        listeners: {
            'select': {
                fn: function(data) {
                },
                scope: this
            }
            ,
            'success': {
                fn:function(result) {
                    this.checkImport(result);
                }
            }
            ,
            'failure': {
                fn:function() {
                    this.enable();
                }
            }
            ,
            'hide': {
                fn:function() {
                    this.destroy();
                }
            }


        },
        buttons: [{
            text: _('close')
            ,
            scope: this
            ,
            handler: function() {
                this.close();
            }
        },{
            text: 'Импорт'
            ,
            scope: this
            ,
            handler: function() {
                this.submit(false);
            }
        }
        ]
    });
    Relations.window.importProduct.superclass.constructor.call(this,config);
};
Ext.extend(Relations.window.importProduct,MODx.Window, {

    checkImport: function(result) {
        result = result.a.result;
        //Ext.MessageBox.alert(result.message);
        if (result.message != 'ok') {
            Ext.getCmp('import-offset-products').setValue(result.message);
            this.submit(false);
        }
        else {
            //Ext.MessageBox.alert(result.message);
            this.close();
        }


    }

});
Ext.reg('relations-window-import-product',Relations.window.importProduct);

Relations.window.PriceRec = function(config) {
    config = config || {};
    this.ident = config.ident || 'mecitem'+Ext.id();
    Ext.applyIf(config,{
        title: 'Кеширование цен'
        ,
        id: this.ident
        ,
        height: 150
        ,
        width: 475
        ,
        url: Relations.config.connector_url
        ,
        action: 'mgr/item/pricerec'
        ,
        fields: [    	
        {
            xtype: 'numberfield'
            ,
            id: 'import-offset'
            ,
            name: 'offset'
            ,
            allowDecimals: false
            ,
            allowNegative: false
            ,
            inputValue: 0
            ,
            value: '0'
            ,
            anchor: '100%'
            ,
            fieldLabel: 'Номер строки'
        }
        ]
        ,
        listeners: {                             
            'failure': {
                fn:function() {
                    this.enable();
                }
            }
            ,
            'hide': {
                fn:function() {
                    this.destroy();
                }
            }		 
            ,
            'success': {
                fn:function(result) {                        
                    this.checkDelete(result);    			       
                }
            }	    
        },
        buttons: [        
        {
            text: _('close')
            ,
            scope: this
            ,
            handler: function() {
                this.close();
            }
        },{
            text: 'Приступить'
            ,
            scope: this
            ,
            handler: function() {
                this.submit(false);
            }
        }		                
        ]
    });
    Relations.window.PriceRec.superclass.constructor.call(this,config);
};
Ext.extend(Relations.window.PriceRec,MODx.Window, {
    
    checkDelete: function(result) {
        result = result.a.result;       
       // Ext.MessageBox.alert(result.message);
        
        if (result.message != 'ok') { 
           // Ext.MessageBox.alert(result.message);
            Ext.getCmp('import-offset').setValue(result.message);    		
            this.submit(false);            
        }
        else {
            //Ext.MessageBox.alert(result.message);
            this.close();
        }
       
        
    }
	
});
Ext.reg('relations-price-rec',Relations.window.PriceRec);

//export

Relations.window.Export = function(config) {
    config = config || {};
    this.ident = config.ident || 'mecitem'+Ext.id();
    Ext.applyIf(config,{
        title: 'Экспорт прайса'
        ,
        id: this.ident
        ,
        height: 150
        ,
        width: 475
        ,
        url: Relations.config.connector_url
        ,
        action: 'mgr/item/export'
        ,
        fields: [   	
       
        ]
        ,
        listeners: {                             
            'failure': {
                fn:function() {
                    this.enable();
                }
            }
            ,
            'hide': {
                fn:function() {
                    this.destroy();
                }
            }		 
            ,
            'success': {
                fn:function(result) {                        
                    this.checkDelete(result);    			       
                }
            }	    
        },
        buttons: [        
        {
            text: _('close')
            ,
            scope: this
            ,
            handler: function() {
                this.close();
            }
        },{
            text: 'Приступить'
            ,
            scope: this
            ,
            handler: function() {
                this.submit(false);
            }
        }		                
        ]
    });
    Relations.window.Export.superclass.constructor.call(this,config);
};
Ext.extend(Relations.window.Export,MODx.Window, {
    
    checkDelete: function(result) {
        result = result.a.result;       
       // Ext.MessageBox.alert(result.message);
        
        if (result.message != 'ok') { 
           // Ext.MessageBox.alert(result.message);
            Ext.getCmp('import-offset').setValue(result.message);    		
            this.submit(false);            
        }
        else {
            //Ext.MessageBox.alert(result.message);
            this.close();
        }
       
        
    }
	
});
Ext.reg('relations-export',Relations.window.Export);
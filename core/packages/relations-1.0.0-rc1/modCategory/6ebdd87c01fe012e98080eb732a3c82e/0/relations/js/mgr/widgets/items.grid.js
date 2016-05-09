Relations.grid.Items = function(config) {
	config = config || {};
	Ext.applyIf(config,{
		id: 'relations-grid-items'
		,url: Relations.config.connector_url
		,baseParams: {
			action: 'mgr/item/getlist'
		}
		,fields: ['id','name','description']
		,autoHeight: true
		,paging: true
		,remoteSort: true
		,columns: [
			{header: _('id'),dataIndex: 'id',width: 70}
			,{header: _('name'),dataIndex: 'name',width: 200}
			,{header: _('description'),dataIndex: 'description',width: 250}
		]
		,tbar: [{
			text: _('relations.item_create')
			,handler: this.createItem
			,scope: this
		}]
	});
	Relations.grid.Items.superclass.constructor.call(this,config);
};
Ext.extend(Relations.grid.Items,MODx.grid.Grid,{
	windows: {}

	,getMenu: function() {
		var m = [];
		m.push({
			text: _('relations.item_update')
			,handler: this.updateItem
		});
		m.push('-');
		m.push({
			text: _('relations.item_remove')
			,handler: this.removeItem
		});
		this.addContextMenuItem(m);
	}
	
	,createItem: function(btn,e) {
		if (!this.windows.createItem) {
			this.windows.createItem = MODx.load({
				xtype: 'relations-window-item-create'
				,listeners: {
					'success': {fn:function() { this.refresh(); },scope:this}
				}
			});
		}
		this.windows.createItem.fp.getForm().reset();
		this.windows.createItem.show(e.target);
	}
	,updateItem: function(btn,e) {
		if (!this.menu.record || !this.menu.record.id) return false;
		var r = this.menu.record;

		if (!this.windows.updateItem) {
			this.windows.updateItem = MODx.load({
				xtype: 'relations-window-item-update'
				,record: r
				,listeners: {
					'success': {fn:function() { this.refresh(); },scope:this}
				}
			});
		}
		this.windows.updateItem.fp.getForm().reset();
		this.windows.updateItem.fp.getForm().setValues(r);
		this.windows.updateItem.show(e.target);
	}
	
	,removeItem: function(btn,e) {
		if (!this.menu.record) return false;
		
		MODx.msg.confirm({
			title: _('relations.item_remove')
			,text: _('relations.item_remove_confirm')
			,url: this.config.url
			,params: {
				action: 'mgr/item/remove'
				,id: this.menu.record.id
			}
			,listeners: {
				'success': {fn:function(r) { this.refresh(); },scope:this}
			}
		});
	}
});
Ext.reg('relations-grid-items',Relations.grid.Items);




Relations.window.CreateItem = function(config) {
	config = config || {};
	this.ident = config.ident || 'mecitem'+Ext.id();
	Ext.applyIf(config,{
		title: _('relations.item_create')
		,id: this.ident
		,height: 150
		,width: 475
		,url: Relations.config.connector_url
		,action: 'mgr/item/create'
		,fields: [
			{xtype: 'textfield',fieldLabel: _('name'),name: 'name',id: 'relations-'+this.ident+'-name',width: 300}
			,{xtype: 'textarea',fieldLabel: _('description'),name: 'description',id: 'relations-'+this.ident+'-description',width: 300}
		]
	});
	Relations.window.CreateItem.superclass.constructor.call(this,config);
};
Ext.extend(Relations.window.CreateItem,MODx.Window);
Ext.reg('relations-window-item-create',Relations.window.CreateItem);


Relations.window.UpdateItem = function(config) {
	config = config || {};
	this.ident = config.ident || 'meuitem'+Ext.id();
	Ext.applyIf(config,{
		title: _('relations.item_update')
		,id: this.ident
		,height: 150
		,width: 475
		,url: Relations.config.connector_url
		,action: 'mgr/item/update'
		,fields: [
			{xtype: 'hidden',name: 'id',id: 'relations-'+this.ident+'-id'}
			,{xtype: 'textfield',fieldLabel: _('name'),name: 'name',id: 'relations-'+this.ident+'-name',width: 300}
			,{xtype: 'textarea',fieldLabel: _('description'),name: 'description',id: 'relations-'+this.ident+'-description',width: 300}
		]
	});
	Relations.window.UpdateItem.superclass.constructor.call(this,config);
};
Ext.extend(Relations.window.UpdateItem,MODx.Window);
Ext.reg('relations-window-item-update',Relations.window.UpdateItem);
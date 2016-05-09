Relations.panel.Home = function(config) {
	config = config || {};
	Ext.apply(config,{
		border: false
		,baseCls: 'modx-formpanel'
		,items: [{
			html: '<h2>'+_('relations')+'</h2>'
			,border: false
			,cls: 'modx-page-header container'
		},{
			xtype: 'modx-tabs'
			,bodyStyle: 'padding: 10px'
			,defaults: { border: false ,autoHeight: true }
			,border: true
			,activeItem: 0
			,hideMode: 'offsets'
			,items: [{
				title: _('relations.items')
				,items: [{
					html: _('relations.intro_msg')
					,border: false
					,bodyCssClass: 'panel-desc'
					,bodyStyle: 'margin-bottom: 10px'
				},{
					xtype: 'relations-grid-items'
					,preventRender: true
				}]
			}]
		}]
	});
	Relations.panel.Home.superclass.constructor.call(this,config);
};
Ext.extend(Relations.panel.Home,MODx.Panel);
Ext.reg('relations-panel-home',Relations.panel.Home);

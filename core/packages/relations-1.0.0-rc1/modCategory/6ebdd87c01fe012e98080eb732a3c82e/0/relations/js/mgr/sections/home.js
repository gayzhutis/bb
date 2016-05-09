Ext.onReady(function() {
	MODx.load({ xtype: 'relations-page-home'});
});

Relations.page.Home = function(config) {
	config = config || {};
	Ext.applyIf(config,{
		components: [{
			xtype: 'relations-panel-home'
			,renderTo: 'relations-panel-home-div'
		}]
	}); 
	Relations.page.Home.superclass.constructor.call(this,config);
};
Ext.extend(Relations.page.Home,MODx.Component);
Ext.reg('relations-page-home',Relations.page.Home);
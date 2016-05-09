var Relations = function(config) {
	config = config || {};
	Relations.superclass.constructor.call(this,config);
};
Ext.extend(Relations,Ext.Component,{
	page:{},window:{},grid:{},tree:{},panel:{},combo:{},config: {},view: {}
});
Ext.reg('relations',Relations);

Relations = new Relations();
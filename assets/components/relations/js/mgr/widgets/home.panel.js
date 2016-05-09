Relations.panel.Home = function(config) {
	config = config || {};
	Ext.apply(config,{
		border: false
		,baseCls: 'modx-formpanel'
		,items: [{
			html: '<h2>Импорт прайсов</h2>'
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
				title: 'Компонент для импорта'
				,items: [{
					html: 'Для импорта или обновления прайса нажмите на кнопку "Импорт прайса товаров" ниже и выберите нужный документ .xlsx (Если необходимо, можно указать номер строки в прайсе, с которой начнется добавление или обновление товаров).'
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

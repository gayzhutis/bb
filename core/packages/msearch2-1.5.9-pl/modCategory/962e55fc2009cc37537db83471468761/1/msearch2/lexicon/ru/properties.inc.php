<?php
/**
 * Properties Russian Lexicon Entries for mSearch2
 *
 * @package msearch2
 * @subpackage lexicon
 */

$_lang['mse2_prop_tpl'] = 'Чанк оформления для каждого результата';
$_lang['mse2_prop_limit'] = 'Лимит выборки результатов';
$_lang['mse2_prop_offset'] = 'Пропуск результатов с начала выборки';
$_lang['mse2_prop_outputSeparator'] = 'Необязательная строка для разделения результатов работы.';
$_lang['mse2_prop_toPlaceholder'] = ' Сниппет mFilter2 сохранит данные в плейсхолдеры: [[+filters]], [[+results]] и [[+total]].';
$_lang['mse2_prop_toPlaceholder'] = 'Если не пусто, сниппет сохранит все данные в плейсхолдер с этим именем, вместо вывода не экран.';
$_lang['mse2_prop_toPlaceholders'] = 'Если не пусто, mFilter2 сохранит все данные в плейсхолдеры: "filters", "results" and "total" с префиксом, указанным в этом параметре. Например, если вы указжете &toPlaceholders=`my.`, то получите: [[+my.filters]], [[+my.results]] и [[+my.total]]';
//$_lang['mse2_prop_toSeparatePlaceholders'] = 'Работает так же, как и "&toPlaceholders" но плейсхолдер "filters" разбивается на отдельные значения с именем фильтра. Например, если вы укажете &toSeparatePlaceholders=`my.` и &filters=`tv|test,resource|pagetitle`, то получите плейхолдеры: [[+my.results]], [[+my.total]], [[+my.tv|test]] и [[+my.resource|pagetitle]].';

$_lang['mse2_prop_returnIds'] = 'Вернуть только список id подходящих страниц, через запятую.';
$_lang['mse2_prop_showLog'] = 'Показывать дополнительную информацию о работе сниппета. Только для авторизованных в контекте "mgr".';
$_lang['mse2_prop_fastMode'] = 'Если включено - в чанк результата будут подставлены только значения из БД. Все необработанные теги MODX, такие как фильтры, вызов сниппетов и другие - будут вырезаны.';

$_lang['mse2_prop_parents'] = 'Список категорий, через запятую, для ограничения вывода результатов. По умолчанию, нет.';
$_lang['mse2_prop_depth'] = 'Глубина поиска ресурсов от каждого родителя.';

$_lang['mse2_prop_includeTVs'] = 'Список ТВ параметров для выборки, через запятую. Например: "action,time" дадут плейсхолдеры [[+action]] и [[+time]].';
$_lang['mse2_prop_tvPrefix'] = 'Префикс для ТВ плейсхолдеров, например "tv.". По умолчанию параметр пуст.';

$_lang['mse2_prop_where'] = 'Дополнительные параметры выборки, закодированные в JSON.';
$_lang['mse2_prop_showUnpublished'] = 'Показывать неопубликованные товары.';
$_lang['mse2_prop_showDeleted'] = 'Показывать удалённые ресурсы.';
$_lang['mse2_prop_showHidden'] = 'Показывать ресурсы, скрытые в меню.';
$_lang['mse2_prop_hideContainers'] = 'Скрывать ресурсы-контейнеры.';

$_lang['mse2_prop_introCutBefore'] = 'Укажите количество символов для вывода в плейсхолдере [[+intro]] перед первым совпадением в тексте. По умолчанию - "50".';
$_lang['mse2_prop_introCutAfter'] = 'Укажите количество символов для вывода в плейсхолдере [[+intro]] после первого совпадения в тексте. По умолчанию - "250".';

$_lang['mse2_prop_htagOpen'] = 'Открывающий тег для подсветки найденных результатов в [[+intro]].';
$_lang['mse2_prop_htagClose'] = 'Закрывающий тег для подсветки найденных результатов в [[+intro]].';

$_lang['mse2_prop_minQuery'] = 'Минимальная длина поискового запроса.';
$_lang['mse2_prop_parentsVar'] = 'Имя переменной для дополнительной фильтрации по родителям. По умолчанию - "parents", может быть передано через $_REQUEST.';
$_lang['mse2_prop_queryVar'] = 'Имя переменной для получения поискового запроса из $_REQUEST. По умолчанию - "query"';

$_lang['mse2_prop_paginator'] = 'Сниппет для постраничной навигации, по умолчанию "getPage".';
$_lang['mse2_prop_element'] = 'Сниппет, который будет вызываться для вывода результатов работы. По умолчанию - "mSearch2".';
$_lang['mse2_prop_resources'] = 'Список ресурсов для вывода, через запятую. Этот список может быть отфильтрован другими параметрами, такими как "parents", "showDeleted", "showHidden" и "showUnpublished".';
$_lang['mse2_prop_showEmptyFilters'] = 'Показывать фильтры всего с одним значением.';
$_lang['mse2_prop_sort'] = 'Список полей ресурса для сортировки. Указывается в формате "таблица|поле:направление". Можно указывать несколько полей через запятую, например: "resource:publisedon:desc,ms|price:asc".';
$_lang['mse2_prop_filters'] = 'Список фильтров ресурсов, через запятую. Указывается в формате "таблица|поле:метод". По умолчанию: "resource|parent:parents".';
$_lang['mse2_prop_aliases'] = 'Список псевдонимов для фильтров, которые будут использованы в URL фильтра, через запятую. Указывается в формате "таблица|поле==псевдоним". Например: "resource|parent==category".';
$_lang['mse2_prop_suggestions'] = 'Этот параметр включает предположительное количество результатов, которое показывается возле каждого фильтра. Отключите, если вы недовольны скоростью фильтрации.';
$_lang['mse2_prop_suggestionsMaxFilters'] = 'Максимальное количество фильтров, для которых работают предварительные результаты. Если фильтров будет больше - suggestions отключатся.';
$_lang['mse2_prop_suggestionsMaxResults'] = 'Максимальное количество ресурсов, для которых работают предварительные результаты. Если ресурсов будет больше - suggestions отключатся.';
$_lang['mse2_prop_suggestionsRadio'] = 'Список фильтров-радиокнопок, через запятую. Предсказания этих групп фильтров не суммируются между собой. Например: "resource|class_key,ms|new"';

$_lang['mse2_prop_filter_delimeter'] = 'Разделитель кодового имени таблицы и поля фильтра. По умолчанию - "|"';
$_lang['mse2_prop_method_delimeter'] = 'Разделитель полного имени фильтра и метода его обработки. По умолчанию - ":"';
$_lang['mse2_prop_values_delimeter'] = 'Разделитель значений фильтров в адресной строке сайта. По умолчанию - ","';

$_lang['mse2_prop_tplOuter'] = 'Чанк оформления всего блока фильтров и результатов.';
$_lang['mse2_prop_tplFilter.outer.default'] = 'Стандартный чанк оформления одной группы фильтров.';
$_lang['mse2_prop_tplFilter.row.default'] = 'Стандартный чанк оформления одного фильтра в группе. По умолчанию выводится как checkbox.';

$_lang['mse2_prop_tpls'] = 'Список чанков для оформления строк, через запятую. Вы можете переключать их указанием в $_REQUEST параметра "tpl". 0 - это чанк по умолчанию, а дальше по порядку. Например: "&tpls=`default,chunk1,chunk2`", для вывода товаров чанком "chunk1", нужно прислать в запросе "$_REQUEST[tpl] = 1".';
$_lang['mse2_prop_tplWrapper'] = 'Чанк-обёртка, для заворачивания всех результатов. Знает плейсхолдеры: [[+output]], [[+total]], [[+query]] и [[+parents]].';
$_lang['mse2_prop_wrapIfEmpty'] = 'Включает вывод чанка-обертки (tplWrapper) даже если результатов нет.';
$_lang['mse2_prop_forceSearch'] = 'Обязательный поиск для вывода результатов. Если нет поискового запроса - ничего не выводится.';

$_lang['mse2_prop_tplForm'] = 'Чанк с формой для вывода.';
$_lang['mse2_prop_autocomplete'] = 'Настройка автодополнения. Возможные варианты: "results" - поиск по сайту (для вывода результатов будет вызван сниппет, указанный в "element"), "queries" - поиск по таблице запросов, "0" - выключить автодополнение.';
$_lang['mse2_prop_pageId'] = 'Id страницы, на которую будет отправлен поисковый запрос. По умолчанию - текущая страница.';

$_lang['mse2_prop_fields'] = 'Список проиндексированных полей ресурса для поиска. Каждому полю можно указывать поисковый вес через двоеточие.';
$_lang['mse2_prop_onlyIndex'] = 'Искать только по индексу слов, без добавления бонусов за точное совпадение фразы в простом поиске через LIKE.';
$_lang['mse2_prop_onlyAllWords'] = 'Выводить только те ресурсы, в которых найдены все слова поискового запроса.';
$_lang['mse2_prop_showSearchLog'] = 'Вывести подробный лог поиска при включенной опции showLog.';

$_lang['mse2_prop_filterOptions'] = 'JSON строка с переменными для javascript фильтра. Например: {"pagination":"#mse2_pagination", "selected_values_delimeter":", "}';

$_lang['mse2_prop_ajaxMode'] = 'Режим работы ajax пагинации: "default", "button" или "scroll".';
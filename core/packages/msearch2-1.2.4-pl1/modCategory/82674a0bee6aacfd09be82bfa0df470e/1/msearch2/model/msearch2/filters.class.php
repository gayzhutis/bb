<?php

class mse2FiltersHandler {
	/* @var mSearch2 $mse2 */
	public $mse2;
	/* @var modX $modx */
	public $modx;


	public function __construct(mSearch2 &$mse2,array $config = array()) {
		$this->modx =& $mse2->modx;
		$this->mse2 =& $mse2;

		if (!empty($config['sortAliases']) && !is_array($config['sortAliases'])) {
			$config['sortAliases'] = $this->modx->fromJSON($config['sortAliases']);
		}
		$this->config = array_merge(array(
			'sortAliases' => array(
				'ms' => 'Data',
				'ms_data' => 'Data',
				'ms_product' => 'msProduct',
				'ms_category' => 'msCategory',
				'ms_vendor' => 'Vendor',
				'tv' => 'TV',
				'resource' => !empty($config['class']) && strtolower($config['class']) == 'msproduct'
					? 'msProduct'
					: 'modResource',
			)
		), $config);
	}


	/**
	 * Retrieves values from Template Variables table
	 *
	 * @param array $tvs Names of tvs
	 * @param array $ids Ids of needed resources
	 *
	 * @return array Array with tvs values as keys and resources ids as values
	 */
	public function getTvValues(array $tvs, array $ids) {
		$filters = array();
		$q = $this->modx->newQuery('modTemplateVarResource');
		$q->innerJoin('modTemplateVar', 'modTemplateVar', '`modTemplateVarResource`.`tmplvarid` = `modTemplateVar`.`id` AND `modTemplateVar`.`name` IN ("' . implode('","', $tvs).'")');
		$q->where(array('`modTemplateVarResource`.`contentid`:IN' => $ids));
		$q->select('`name`,`contentid`,`value`,`type`');
		$tstart = microtime(true);
		if ($q->prepare() && $q->stmt->execute()) {
			$this->modx->queryTime += microtime(true) - $tstart;
			$this->modx->executedQueries++;
			while ($row = $q->stmt->fetch(PDO::FETCH_ASSOC)) {
				if ($row['type'] == 'tag' || $row['type'] == 'autotag') {
					$row['value'] = str_replace(',', '||', $row['value']);
				}
				$tmp = strpos($row['value'], '||') !== false
					? explode('||', $row['value'])
					: array($row['value']);
				foreach ($tmp as $v) {
					$v = trim($v);
					if ($v == '') {continue;}
					$name = strtolower($row['name']);
					if (isset($filters[$name][$v])) {
						$filters[$name][$v][] = $row['contentid'];
					}
					else {
						$filters[$name][$v] = array($row['contentid']);
					}
				}
			}
		}
		else {
			$this->modx->log(modX::LOG_LEVEL_ERROR, "[mSearch2] Error on get filter params.\nQuery: ".$q->toSql()."\nResponse: ".print_r($q->stmt->errorInfo(),1));
		}

		return $filters;
	}


	/**
	 * Retrieves values from miniShop2 Product table
	 *
	 * @param array $fields Names of ms2 fields
	 * @param array $ids Ids of needed resources
	 *
	 * @return array Array with ms2 fields as keys and resources ids as values
	 */
	public function getMsValues(array $fields, array $ids) {
		$filters = array();
		$q = $this->modx->newQuery('msProductData');
		$q->where(array('id:IN' => $ids));
		$q->select('id,' . implode(',', $fields));
		$tstart = microtime(true);
		if ($q->prepare() && $q->stmt->execute()) {
			$this->modx->queryTime += microtime(true) - $tstart;
			$this->modx->executedQueries++;
			while ($row = $q->stmt->fetch(PDO::FETCH_ASSOC)) {
				foreach ($row as $k => $v) {
					$v = trim($v);
					if ($v == '' || $k == 'id') {continue;}
					else if (isset($filters[$k][$v])) {
						$filters[$k][$v][] = $row['id'];
					}
					else {
						$filters[$k][$v] = array($row['id']);
					}

				}
			}
		}
		else {
			$this->modx->log(modX::LOG_LEVEL_ERROR, "[mSearch2] Error on get filter params.\nQuery: ".$q->toSql()."\nResponse: ".print_r($q->stmt->errorInfo(),1));
		}

		return $filters;
	}


	/**
	 * Retrieves values from miniShop2 Vendor table
	 *
	 * @param array $fields
	 * @param array $ids
	 *
	 * @return array
	 */
	public function getMsVendorValues(array $fields, array $ids) {
		$filters = array();
		$q = $this->modx->newQuery('msVendor');
		$q->innerJoin('msProductData','Product','Product.vendor = msVendor.id');
		$q->where(array('Product.id:IN' => $ids));
		$q->select('Product.id,' . $this->modx->getSelectColumns('msVendor','msVendor','',$fields));
		$tstart = microtime(true);
		if ($q->prepare() && $q->stmt->execute()) {
			$this->modx->queryTime += microtime(true) - $tstart;
			$this->modx->executedQueries++;
			while ($row = $q->stmt->fetch(PDO::FETCH_ASSOC)) {
				foreach ($row as $k => $v) {
					$v = trim($v);
					if ($v == '' || $k == 'id') {continue;}
					else if (isset($filters[$k][$v])) {
						$filters[$k][$v][] = $row['id'];
					}
					else {
						$filters[$k][$v] = array($row['id']);
					}

				}
			}
		}
		else {
			$this->modx->log(modX::LOG_LEVEL_ERROR, "[mSearch2] Error on get filter params.\nQuery: " . $q->toSql() . "\nResponse: " . print_r($q->stmt->errorInfo(), 1));
		}

		return $filters;
	}

	/**
	 * Retrieves values from miniShop2 Product table
	 *
	 * @param array $keys Keys of ms2 products options
	 * @param array $ids Ids of needed resources
	 *
	 * @return array Array with ms2 fields as keys and resources ids as values
	 */
	public function getMsOptionValues(array $keys, array $ids) {
		$filters = array();
		$q = $this->modx->newQuery('msProductOption');
		$q->where(array('product_id:IN' => $ids, 'key:IN' => $keys));
		$q->select('`product_id`,`key`,`value`');
		$tstart = microtime(true);
		if ($q->prepare() && $q->stmt->execute()) {
			$this->modx->queryTime += microtime(true) - $tstart;
			$this->modx->executedQueries++;
			while ($row = $q->stmt->fetch(PDO::FETCH_ASSOC)) {
				$value = trim($row['value']);
				if ($value == '') {continue;}
				$key = $row['key'];
				// Get ready for the special options in "key==value" format
				if (strpos($value, '==')) {
					list($key, $value) = explode('==', $value);
					$key = preg_replace('/\s+/', '_', $key);
				}
				// --
				if (isset($filters[$key][$value])) {
					$filters[$key][$value][] = $row['product_id'];
				}
				else {
					$filters[$key][$value] = array($row['product_id']);
				}
			}
		}
		else {
			$this->modx->log(modX::LOG_LEVEL_ERROR, "[mSearch2] Error on get filter params.\nQuery: ".$q->toSql()."\nResponse: ".print_r($q->stmt->errorInfo(),1));
		}

		return $filters;
	}


	/**
	 * Retrieves values from Resource table
	 *
	 * @param array $fields Names of resource fields
	 * @param array $ids Ids of needed resources
	 *
	 * @return array Array with resource fields as keys and resources ids as values
	 */
	public function getResourceValues(array $fields, array $ids) {
		$filters = array();
		$no_id = false;
		if (!in_array('id', $fields)) {
			$fields[] = 'id';
			$no_id = true;
		}
		$q = $this->modx->newQuery('modResource');
		$q->select(implode(',', $fields));
		$q->where(array('modResource.id:IN' => $ids));
		if (in_array('parent', $fields) && $this->mse2->checkMS2()) {
			$q->leftJoin('msCategoryMember','Member', '`Member`.`product_id` = `modResource`.`id`');
			$q->orCondition(array('Member.product_id:IN' => $ids));
			$q->select('category_id');
		}
		$tstart = microtime(true);
		if ($q->prepare() && $q->stmt->execute()) {
			$this->modx->queryTime += microtime(true) - $tstart;
			$this->modx->executedQueries++;
			while ($row = $q->stmt->fetch(PDO::FETCH_ASSOC)) {
				foreach ($row as $k => $v) {
					$v = trim($v);
					if ($k == 'category_id') {
						if ($row['parent'] == $v) {continue;}
						else {$k = 'parent';}
					}
					if ($v == '' || ($k == 'id' && $no_id)) {
						continue;
					}
					elseif (isset($filters[$k][$v])) {
						$filters[$k][$v][] = $row['id'];
					}
					else {
						$filters[$k][$v] = array($row['id']);
					}
				}
			}
		}
		else {
			$this->modx->log(modX::LOG_LEVEL_ERROR, "[mSearch2] Error on get filter params.\nQuery: ".$q->toSql()."\nResponse: ".print_r($q->stmt->errorInfo(),1));
		}

		return $filters;
	}


	/**
	 * Prepares values for filter
	 * Sorts and returns given values
	 *
	 * @param array $values
	 * @param string $name
	 *
	 * @return array Prepared values
	 */
	public function buildDefaultFilter(array $values, $name = '') {
		if (count($values) < 2 && empty($this->config['showEmptyFilters'])) {
			return array();
		}

		$results = array();
		foreach ($values as $value => $ids) {
			$results[$value] = array(
				'title' => $value
				,'value' => $value
				,'type' => 'default'
				,'resources' => $ids
			);
		}

		ksort($results);
		return $results;
	}


	/**
	 * Prepares values for filter
	 * Returns array with minimum and maximum value
	 *
	 * @param array $values
	 * @param string $name
	 *
	 * @return array Prepared values
	 */
	public function buildDecimalFilter(array $values, $name = '') {
		$tmp = array_keys($values);
		if (empty($values) || (count($tmp) < 2 && empty($this->config['showEmptyFilters']))) {
			return array();
		}

		sort($tmp);
		if (count($values) >= 2) {
			$min = array_shift($tmp);
			$max = array_pop($tmp);
		}
		else {
			$min = $max = $tmp[0];
		}

		return array(
			array(
				'title' => $this->modx->lexicon('mse2_filter_number_min')
				,'value' => $min
				,'type' => 'number'
				,'resources' => null
			)
			,array(
				'title' => $this->modx->lexicon('mse2_filter_number_max')
				,'value' => $max
				,'type' => 'number'
				,'resources' => null
			)
		);
	}


	/**
	 * Returns array with rounded minimum and maximum value
	 *
	 * @param array $values
	 * @param string $name
	 *
	 * @return array
	 */
	public function buildNumberFilter(array $values, $name = '') {
		if ($filters = $this->buildDecimalFilter($values, $name)) {
			$filters[0]['value'] = floor($filters[0]['value']);
			$filters[1]['value'] = ceil($filters[1]['value']);
		}

		return $filters;
	}


	/**
	 * Prepares values for filter
	 * Retrieves names of ms2 vendors and replaces ids in array keys by it
	 *
	 * @param array $values
	 * @param string $name
	 *
	 * @return array Prepared values
	 */
	public function buildVendorsFilter(array $values, $name = '') {
		$vendors = array_keys($values);
		if (empty($vendors) || (count($vendors) < 2 && empty($this->config['showEmptyFilters']))) {
			return array();
		}

		$results = array();
		$q = $this->modx->newQuery('msVendor', array('id:IN' => $vendors));
		$q->select('id,name');
		$tstart = microtime(true);
		if ($q->prepare() && $q->stmt->execute()) {
			$this->modx->queryTime += microtime(true) - $tstart;
			$this->modx->executedQueries++;
			$vendors = array();
			while ($row = $q->stmt->fetch(PDO::FETCH_ASSOC)) {
				$vendors[$row['id']] = $row['name'];
			}

			foreach ($values as $vendor => $ids) {
				$title = !isset($vendors[$vendor]) ? $this->modx->lexicon('mse2_filter_boolean_no') : $vendors[$vendor];
				$results[$title] = array(
					'title' => $title
					,'value' => $vendor
					,'type' => 'vendor'
					,'resources' => $ids
				);
			}
		}

		ksort($results);
		return $results;
	}


	/**
	 * Prepares values for filter
	 * Retrieves names of multiselect TVs
	 *
	 * @param array $values IDs of resources
	 * @param string $name Name of template variable
	 *
	 * @return array Prepared values
	 */
	public function buildTVsFilter(array $values, $name = '') {
		$keys = array_keys($values);
		if (empty($keys) || (count($keys) < 2 && empty($this->config['showEmptyFilters']))) {
			return array();
		}

		$results = $names = array();
		$q = $this->modx->newQuery('modTemplateVar', array('name' => $name/*, 'type:IN' => array('listbox','listbox-multiple')*/));
		$q->select('elements');
		$tstart = microtime(true);
		if ($q->prepare() && $q->stmt->execute()) {
			$this->modx->queryTime += microtime(true) - $tstart;
			$this->modx->executedQueries++;
			$tmp = $q->stmt->fetchColumn();
			$names = array();
			if (strpos($tmp, '||') && strpos($tmp, '==')) {
				$tmp = explode('||', $tmp);
				foreach ($tmp as $v) {
					list($key, $value) = explode('==', $v);
					if ($key && $value) {
						$names[$value] = $key;
					}
				}
			}
		}
		foreach ($values as $value => $ids) {
			$title = isset($names[$value]) ? $names[$value] : $value;
			$results[$title] = array(
				'title' => $title,
				'value' => $value,
				'type' => 'tv',
				'resources' => $ids,
			);
		}

		ksort($results);
		return $results;
	}


	/**
	 * Prepares values for filter
	 * Returns array with human-readable keys "yes" and "no"
	 *
	 * @param array $values
	 * @param string $name
	 *
	 * @return array Prepared values
	 */
	public function buildBooleanFilter(array $values, $name = '') {
		if (count($values) < 2 && empty($this->config['showEmptyFilters'])) {
			return array();
		}

		$results = array();
		foreach ($values as $value => $ids) {
			$title = empty($value) ? $this->modx->lexicon('mse2_filter_boolean_no') : $this->modx->lexicon('mse2_filter_boolean_yes');
			$results[$title] = array(
				'title' => $title
				,'value' => $value
				,'type' => 'boolean'
				,'resources' => $ids
			);
		}

		ksort($results);
		return $results;
	}


	/**
	 * Prepares values for filter
	 * Returns array with human-readable parents of resources
	 *
	 * @param array $values
	 * @param string $name Filter name
	 * @param integer $depth
	 * @param string $separator
	 *
	 * @return array Prepared values
	 */
	public function buildParentsFilter(array $values, $name = '', $depth = 1, $separator = ' / ') {
		if (count($values) < 2 && empty($this->config['showEmptyFilters'])) {
			return array();
		}

		$results = $parents = $menuindex = array();
		$q = $this->modx->newQuery('modResource', array('id:IN' => array_keys($values), 'published' => 1));
		$q->select('id,pagetitle,context_key,menuindex');
		$tstart = microtime(true);
		if ($q->prepare() && $q->stmt->execute()) {
			$this->modx->queryTime += microtime(true) - $tstart;
			$this->modx->executedQueries++;
			while ($row = $q->stmt->fetch(PDO::FETCH_ASSOC)) {
				$parents[$row['id']] = $row;
				$menuindex[$row['id']] = $row['menuindex'];
			}
		}

		foreach ($values as $value => $ids) {
			if (!isset($parents[$value])) {continue;}

			$parent = $parents[$value];
			$titles = array();
			if ($depth > 0) {
				$pids = $this->modx->getParentIds($value, $depth, array('context' => $parent['context_key']));
				if (!empty($pids)) {
					$q = $this->modx->newQuery('modResource', array('id:IN' => array_reverse($pids), 'published' => 1));
					$q->select('id,pagetitle');
					$tstart = microtime(true);
					if ($q->prepare() && $q->stmt->execute()) {
						$this->modx->queryTime += microtime(true) - $tstart;
						$this->modx->executedQueries++;
						while ($row = $q->stmt->fetch(PDO::FETCH_ASSOC)) {
							$titles[$row['id']] = $row['pagetitle'];
						}
					}
				}
			}
			$titles[$value] = $parent['pagetitle'];

			$title = implode($separator, $titles);
			$results[$menuindex[$value]][$title] = array(
				'title' => $title,
				'value' => $value,
				'type' => 'parents',
				'resources' => $ids,
			);
		}

		ksort($results);
		$tmp = array();
		foreach ($results as $v) {
			foreach ($v as $k2 => $v2) {
				$tmp[$k2] = $v2;
			}
		}

		return $tmp;
	}


	/**
	 * Prepares values for filter
	 * Returns array with human-readable parent of resource
	 *
	 * @param array $values
	 * @param string $name
	 *
	 * @return array Prepared values
	 */
	public function buildCategoriesFilter(array $values, $name = '') {
		return $this->buildParentsFilter($values, $name, 0);
	}


	/**
	 * Prepares values for filter
	 * Returns array with human-readable grandparent of resource
	 *
	 * @param array $values
	 * @param string $name
	 * @param boolean $filter
	 *
	 * @return array
	 */
	public function buildGrandParentsFilter(array $values, $name = '', $filter = false) {
		if (count($values) < 2 && empty($this->config['showEmptyFilters'])) {
			return array();
		}

		$grandparents = array();
		$q = $this->modx->newQuery('modResource', array('id:IN' => array_keys($values), 'published' => 1));
		$q->select('id,parent');
		$tstart = microtime(true);
		if ($q->prepare() && $q->stmt->execute()) {
			$this->modx->queryTime += microtime(true) - $tstart;
			$this->modx->executedQueries++;
			while ($row = $q->stmt->fetch(PDO::FETCH_ASSOC)) {
				$grandparents[$row['id']] = $row['parent'];
			}
		}

		$tmp = array();
		foreach ($values as $k => $v) {
			if (isset($grandparents[$k]) && $grandparents[$k] != 0) {
				$parent = $grandparents[$k];
				if (!isset($tmp[$parent])) {
					$tmp[$parent] = $v;
				}
				else {
					$tmp[$parent] = array_merge($tmp[$parent], $v);
				}
			}
			else {
				$tmp[$k] = $v;
			}
		}

		return $filter
			? $tmp
			: $this->buildParentsFilter($tmp, $name, 0);
	}


	/**
	 * Prepares values for filter
	 * Returns array with user id replaced to any field from modUserProfile
	 *
	 * @param array $values
	 * @param string $name Filter name
	 * @param string $field
	 *
	 * @return array Prepared values
	 */
	public function buildFullnameFilter(array $values, $name = '', $field = 'fullname') {
		$users = array_keys($values);
		if (empty($users) || (count($users) < 2 && empty($this->config['showEmptyFilters']))) {
			return array();
		}

		$results = array();
		$q = $this->modx->newQuery('modUserProfile', array('internalKey:IN' => $users));
		$q->select('id,'.$field);
		$tstart = microtime(true);
		if ($q->prepare() && $q->stmt->execute()) {
			$this->modx->queryTime += microtime(true) - $tstart;
			$this->modx->executedQueries++;
			$users = array();
			while ($row = $q->stmt->fetch(PDO::FETCH_ASSOC)) {
				$users[$row['id']] = $row[$field];
			}

			foreach ($values as $user => $ids) {
				$title = !isset($users[$user]) ? $this->modx->lexicon('mse2_filter_boolean_no') : $users[$user];
				$results[$title] = array(
					'title' => $title
					,'value' => $user
					,'type' => $field
					,'resources' => $ids
				);
			}
		}

		ksort($results);
		return $results;
	}


	/**
	 * Prepares values for filter
	 * Returns array with resources grouped by specified date format
	 *
	 * @param array $values
	 * @param string $name
	 * @param string $format
	 * @param string $sort
	 *
	 * @return array Prepared values
	 */
	public function buildDateFilter(array $values, $name = '', $format = 'Y-m-d', $sort = 'desc') {
		if (count($values) < 2 && empty($this->config['showEmptyFilters'])) {
			return array();
		}

		$results = array();
		foreach ($values as $value => $ids) {
			if (!is_numeric($value)) {
				$value = strtotime($value);
			}
			$value = date($format, $value);
			if (!isset($results[$value])) {
				$results[$value] = array(
					'title' => $value,
					'value' => $value,
					'type' => 'date',
					'resources' => $ids,
				);
			}
			else {
				$results[$value]['resources'] = array_merge(
					$results[$value]['resources'],
					$ids
				);
			}
		}

		if (strtolower($sort) == 'asc') {
			ksort($results);
		}
		else {
			krsort($results);
		}
		return $results;
	}


	/**
	 * Shorthand for group resources by year
	 *
	 * @param array $values
	 * @param string $name
	 * @param string $sort
	 *
	 * @return array Prepared values
	 */
	public function buildYearFilter(array $values, $name = '', $sort = 'desc') {
		return $this->buildDateFilter($values, $name, 'Y', $sort);
	}


	/**
	 * Returns string for insert into sorting properties of pdoTools snippet
	 *
	 * @param string
	 *
	 * @return string
	 */
	public function getSortFields($sort) {
		$data = array();

		$sort = explode(',', strtolower(trim($sort)));
		$resource_fields = array_keys($this->modx->getFieldMeta('modResource'));
		foreach ($sort as $string) {
			$table = '';
			$order = 'asc';

			$tmp = explode($this->config['filter_delimeter'], $string);
			if (!empty($tmp[1])) {
				$table = $tmp[0];
				$field = $tmp[1];
			}
			else {
				$field = $tmp[0];
			}

			$tmp = explode($this->config['method_delimeter'], $field);
			if (!empty($tmp[1])) {
				$field = $tmp[0];
				$order = $tmp[1];
			}

			if (isset($this->config['sortAliases'][$table])) {
				if ($table == 'tv') {
					$table = $this->config['sortAliases'][$table].$field;
					$field = 'value';
				}
				else {
					$table = $this->config['sortAliases'][$table];
				}
			}
			elseif (in_array($field, $resource_fields)) {
				$table = $this->config['sortAliases']['resource'];
			}
			else {
				$table = '';
			}

			$data[] = !empty($table)
				? "`$table`.`$field` $order"
				: "$field $order";
		}

		return implode(',', $data);
	}


	/**
	 * Default filtration method
	 *
	 * @param array $requested Filtered ids of resources
	 * @param array $values Filter data with value and ids of matching resources
	 * @param array $ids Ids of currently active resources
	 *
	 * @return array
	 */
	public function filterDefault(array $requested, array $values, array $ids) {
		$matched = array();

		$tmp = array_flip($ids);
		foreach ($requested as $value) {
			if (isset($values[$value])) {
				$resources = $values[$value];
				foreach ($resources as $id) {
					if (isset($tmp[$id])) {
						$matched[] = $id;
					}
				}
			}
		}

		return $matched;
	}


	/**
	 * Filtration method for grandparents
	 *
	 * @param array $requested
	 * @param array $values
	 * @param array $ids
	 *
	 * @return array
	 */
	public function filterGrandParents(array $requested, array $values, array $ids) {
		$values = $this->buildGrandParentsFilter($values, '', true);

		return $this->filterDefault($requested, $values, $ids);
	}


	/**
	 * Filters numbers. Values must be between min and max number
	 *
	 * @param array $requested Filtered ids of resources
	 * @param array $values Filter data with min and max number
	 * @param array $ids Ids of currently active resources
	 *
	 * @return array
	 */
	public function filterNumber(array $requested, array $values, array $ids) {
		$matched = array();

		$min = floor(min($requested));
		$max = ceil(max($requested));

		$tmp = array_flip($ids);
		foreach ($values as $number => $resources) {
			if ($number >= $min && $number <= $max) {
				foreach ($resources as $id) {
					if (isset($tmp[$id])) {
						$matched[] = $id;
					}
				}
			}
		}

		return $matched;
	}


	/**
	 * Filters decimals. Values must be between min and max number
	 *
	 * @param array $requested
	 * @param array $values
	 * @param array $ids
	 *
	 * @return array
	 */
	public function filterDecimal(array $requested, array $values, array $ids) {
		$matched = array();

		$min = min($requested);
		$max = max($requested);

		$tmp = array_flip($ids);
		foreach ($values as $number => $resources) {
			if ($number >= $min && $number <= $max) {
				foreach ($resources as $id) {
					if (isset($tmp[$id])) {
						$matched[] = $id;
					}
				}
			}
		}

		return $matched;
	}


	/**
	 * Filters dates. Values must be between min and max number
	 *
	 * @param array $requested Filtered ids of resources
	 * @param array $values Filter data with min and max number
	 * @param array $ids Ids of currently active resources
	 * @param string $format Format of date for combine resources
	 *
	 * @return array
	 */
	public function filterDate(array $requested, array $values, array $ids, $format = 'Y-m-d') {
		$array = array();
		foreach ($values as $value => $resources) {
			if (!is_numeric($value)) {
				$value = strtotime($value);
			}
			$value = date($format, $value);
			if (!isset($array[$value])) {
				$array[$value] = $resources;
			}
			else {
				foreach ($resources as $v) {
					$array[$value][] = $v;
				}
			}
		}

		return $this->filterDefault($requested, $array, $ids);
	}


	/**
	 * Shorthand for filter by year
	 *
	 * @param array $requested Filtered ids of resources
	 * @param array $values Filter data with min and max number
	 * @param array $ids Ids of currently active resources
	 *
	 * @return array
	 */
	public function filterYear(array $requested, array $values, array $ids) {
		return $this->filterDate($requested, $values, $ids, 'Y');
	}
}
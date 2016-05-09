<?php

class customFilter extends mse2FiltersHandler {
	
	/**
	 * Prepares values for filter
	 * Returns array with human-readable parents of resources
	 *
	 * @param array $values
	 *
	 * @return array Prepared values
	 */
	public function buildParentFilter(array $values, $depth = 1) {
		if (count($values) < 2 && empty($this->config['showEmptyFilters'])) {
			return array();
		}

		$results = $parents = array();
		foreach ($values as $value => $ids) {
            
            $q = $this->modx->newQuery('modResource', array('id' => $value));
			$q->select('id,pagetitle');
			if ($q->prepare() && $q->stmt->execute()) {
				$row = $q->stmt->fetch(PDO::FETCH_ASSOC);
				$title = $row['pagetitle'];
			}
            if ($title == '') continue;
            
			$results[$title] = array(
				'title' => $title
				,'value' => $value
				,'type' => 'parents'
				,'resources' => $ids
			);

		}

		ksort($results);
		return $results;
	}
    
}
<?php

class msdSaleMemberMultipleProcessor extends modProcessor {


	/**
	 * @return array|string
	 */
	public function process() {
		if (!$method = $this->getProperty('method', false)) {
			return $this->failure();
		}
		$ids = $this->modx->fromJSON($this->getProperty('ids'));
		if (empty($ids)) {
			return $this->success();
		}

		/** @var msDiscount $msDiscount */
		$msDiscount = $this->modx->getService('msDiscount');

		foreach ($ids as $item) {
			/** @var modProcessorResponse $response */
			$response = $this->modx->runProcessor(
				'mgr/sales/members/' . $method,
				array(
					'sale_id' => $item['sale_id'],
					'group_id' => $item['group_id'],
					'type' => $item['type'],
				),
				array('processors_path' => $msDiscount->config['processorsPath'])
			);
			if ($response->isError()) {
				return $response->getResponse();
			}
		}

		return $this->success();
	}

}

return 'msdSaleMemberMultipleProcessor';
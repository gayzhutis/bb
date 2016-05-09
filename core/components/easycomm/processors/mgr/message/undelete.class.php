<?php

/**
 * Mark ecMessage as deleted
 */
class easyCommMessageUnDeleteProcessor extends modObjectProcessor {
	public $objectType = 'ecMessage';
	public $classKey = 'ecMessage';
	public $languageTopics = array('easycomm');
	//public $permission = 'undelete';

    public $beforeSaveEvent = 'OnBeforeEcMessageUndelete';
    public $afterSaveEvent = 'OnEcMessageUndelete';

	/**
	 * @return array|string
	 */
	public function process() {
		if (!$this->checkPermissions()) {
			return $this->failure($this->modx->lexicon('access_denied'));
		}

		$ids = $this->modx->fromJSON($this->getProperty('ids'));
		if (empty($ids)) {
			return $this->failure($this->modx->lexicon('ec_message_err_ns'));
		}

        $threadIds = array();
		foreach ($ids as $id) {
			/** @var ecMessage $object */
			if (!$object = $this->modx->getObject($this->classKey, $id)) {
				return $this->failure($this->modx->lexicon('ec_message_err_nf'));
			}
            $threadId = $object->get('thread');
            if(!array_key_exists($threadId, $threadIds)) {
                $threadIds[] = $threadId;
            }

            $object->set('deleted', 0);
            $object->set('deletedon', null);
            $object->set('deletedby', 0);

			$object->save();
		}

        $threads = $this->modx->getCollection('ecThread', array('id:IN' => $threadIds));
        /** @var ecThread $thread */
        foreach($threads as $thread){
            $thread->updateMessagesInfo();
        }

		return $this->success();
	}

}

return 'easyCommMessageUnDeleteProcessor';
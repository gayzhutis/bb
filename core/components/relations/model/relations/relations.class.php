<?php
/**
 * The base class for Relations.
 *
 * @package relations
 */
class Relations {
	function __construct(modX &$modx,array $config = array()) {
		$this->modx =& $modx;

		$corePath = $this->modx->getOption('relations.core_path',$config,$this->modx->getOption('core_path').'components/relations/');
		$assetsUrl = $this->modx->getOption('relations.assets_url',$config,$this->modx->getOption('assets_url').'components/relations/');
		$connectorUrl = $assetsUrl.'connector.php';

		$this->config = array_merge(array(
			'assetsUrl' => $assetsUrl,
			'cssUrl' => $assetsUrl.'css/',
			'jsUrl' => $assetsUrl.'js/',
			'imagesUrl' => $assetsUrl.'images/',

			'connectorUrl' => $connectorUrl,

			'corePath' => $corePath,
			'modelPath' => $corePath.'model/',
			'chunksPath' => $corePath.'elements/chunks/',
			'templatesPath' => $corePath.'elements/templates/',
			'chunkSuffix' => '.chunk.tpl',
			'snippetsPath' => $corePath.'elements/snippets/',
			'processorsPath' => $corePath.'processors/',
		),$config);

		$this->modx->addPackage('relations',$this->config['modelPath']);
		$this->modx->lexicon->load('relations:default');
	}

	/**
	 * Initializes Relations into different contexts.
	 *
	 * @access public
	 * @param string $ctx The context to load. Defaults to web.
	 */
	public function initialize($ctx = 'web') {
		switch ($ctx) {
			case 'mgr':
				if (!$this->modx->loadClass('relations.request.RelationsControllerRequest',$this->config['modelPath'],true,true)) {
					return 'Could not load controller request handler.';
				}
				$this->request = new RelationsControllerRequest($this);
				return $this->request->handleRequest();
			break;
			case 'connector':
				if (!$this->modx->loadClass('relations.request.RelationsConnectorRequest',$this->config['modelPath'],true,true)) {
					return 'Could not load connector request handler.';
				}
				$this->request = new RelationsConnectorRequest($this);
				return $this->request->handle();
			break;
			default:
				/* if you wanted to do any generic frontend stuff here.
				 * For example, if you have a lot of snippets but common code
				 * in them all at the beginning, you could put it here and just
				 * call $relations->initialize($modx->context->get('key'));
				 * which would run this.
				 */
			break;
		}
	}

	/**
	 * Gets a Chunk and caches it; also falls back to file-based templates
	 * for easier debugging.
	 *
	 * @access public
	 * @param string $name The name of the Chunk
	 * @param array $properties The properties for the Chunk
	 * @return string The processed content of the Chunk
	 */
	public function getChunk($name,array $properties = array()) {
		$chunk = null;
		if (!isset($this->chunks[$name])) {
			$chunk = $this->modx->getObject('modChunk',array('name' => $name),true);
			if (empty($chunk)) {
				$chunk = $this->_getTplChunk($name,$this->config['chunkSuffix']);
				if ($chunk == false) return false;
			}
			$this->chunks[$name] = $chunk->getContent();
		} else {
			$o = $this->chunks[$name];
			$chunk = $this->modx->newObject('modChunk');
			$chunk->setContent($o);
		}
		$chunk->setCacheable(false);
		return $chunk->process($properties);
	}
	/**
	 * Returns a modChunk object from a template file.
	 *
	 * @access private
	 * @param string $name The name of the Chunk. Will parse to name.chunk.tpl by default.
	 * @param string $suffix The suffix to add to the chunk filename.
	 * @return modChunk/boolean Returns the modChunk object if found, otherwise
	 * false.
	 */
	private function _getTplChunk($name,$suffix = '.chunk.tpl') {
		$chunk = false;
		$f = $this->config['chunksPath'].strtolower($name).$suffix;
		if (file_exists($f)) {
			$o = file_get_contents($f);
			$chunk = $this->modx->newObject('modChunk');
			$chunk->set('name',$name);
			$chunk->setContent($o);
		}
		return $chunk;
	}
}
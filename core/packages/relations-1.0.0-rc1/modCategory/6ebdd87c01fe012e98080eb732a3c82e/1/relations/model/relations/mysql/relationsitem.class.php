<?php
/**
 * @package relations
 */
require_once (strtr(realpath(dirname(dirname(__FILE__))), '\\', '/') . '/relationsitem.class.php');
class RelationsItem_mysql extends RelationsItem {}
<?php
namespace Doctrine;

use \TYPO3\FLOW3\Package\Package as BasePackage;

/**
 * FLOW3 Package Bootstrap for the Doctrine package
 */
class Package extends BasePackage {

	/**
	 * Disable object management for this package.
	 * @var boolean
	 */
	protected $objectManagementEnabled = FALSE;

	/**
	 * Invokes custom PHP code directly after the package manager has been initialized.
	 *
	 * @param \TYPO3\FLOW3\Core\Bootstrap $bootstrap The current bootstrap
	 * @return void
	 */
	public function boot(\TYPO3\FLOW3\Core\Bootstrap $bootstrap) {
		require(__DIR__ . '/ORM/Mapping/Driver/DoctrineAnnotations.php');
	}
}

?>
<?php declare(strict_types = 1);
 /*
** Telindus-ISIT
** Copyright (C) 2020 - Wieger Bontekoe - Telindus-ISIT
**
** This program is free software; you can redistribute it and/or modify
** it under the terms of the GNU General Public License as published by
** the Free Software Foundation; either version 2 of the License, or
** (at your option) any later version.
**
**/
namespace Modules\ProblemView;
require_once("include/ServiceNow.inc.php");
use APP;
use CController as CAction;
 
/**
 * Please see Core\CModule class for additional reference.
 */
class Module extends \Core\CModule {
 
	/**
	 * Initialize module.
	 */
	public function init(): void {

		APP::Component()->get('menu.main')
			->findOrAdd(_('Integration'))
				->getSubmenu()
					->add((new \CMenuItem(_('SNOW TEST')))
						->setAction('customproblem.view')
					);
	}
 
	/**
	 * Event handler, triggered before executing the action.
	 *
	 * @param CAction $action  Action instance responsible for current request.
	 */
	public function onBeforeAction(CAction $action): void {
	}
 
	/**
	 * Event handler, triggered on application exit.
	 *
	 * @param CAction $action  Action instance responsible for current request.
	 */
	public function onTerminate(CAction $action): void {
	}
}

<?php

/** 
 * CazuelaException class, extends Exception
 * @author maraya
 * 
 * This file is part of Cazuela.
 *
 * Cazuela is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * Cazuela is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Cazuela. If not, see <http://www.gnu.org/licenses/>.
 */
 
class CazuelaException extends Exception {
	
	/**
	 * CazuelaException Construct
	 * @param string $message
	 * @param int $code
	 */
	public function __construct($message = "", $code = 0) {
		parent::__construct($message, $code);
	}
}

?>

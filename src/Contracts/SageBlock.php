<?php

namespace SageBlock\Contracts;

interface SageBlock {

	/**
	 * Data to be passed to the rendered block view.
	 *
	 * @param SageBlock $block
	 * @return array
	 */
	public function with( $block );
}

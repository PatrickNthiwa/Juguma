<?php
class Posterity_Skt13Framework_Uni{
	function __construct(){
		add_filter( 'posterity_docs_address', array( $this, 'docs_link' ), 10, 2 );
	}

	function docs_link() {
		return 'https://www.sktthemesdemo.net/documentation/posterity-doc';
	}
}

new Posterity_Skt13Framework_Uni();







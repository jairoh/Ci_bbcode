<?php if( !defined( 'BASEPATH' ) ) exit( 'No direct access allowed!' );

/**
* Replaces brackets tagged input into html tagged input
*@author Jairoh Tuada
*@disclaimer just push for updates if you have
*/
Class CI_bbcode {

	/**
	*@param input - brackets tagged input
	*@author Jairoh Tuada
	*@return html tagged input
	*/
	function bbcode ( $input ) {
		$input = strip_tags( $input );
		$input = htmlentities( $input );
		
		$search = array(
			'/\[b\](.*?)\[\/b\]/is',
			'/\[i\](.*?)\[\/i\]/is',
			'/\[u\](.*?)\[\/u\]/is',
			'/\[img\](.*?)\[\/img]/is',
			'/\[url=(.*?)\](.*?)\[\/url]/is',
			'/\[font color=(.*?) size=(.*?) face=(.*?)\](.*?)\[\/font\]/is',
			'/\[h1\](.*?)\[\/h1\]/is',
			'/\[code\](.*?)\[\/code]/is', 
			'/\[qoute author=(.*?) date=(.*?)\](.*?)/is',
			'/\[\/qoute]/is',
			'/\[video\]http\:\/\/www.youtube.com\/watch\?v\=(.*?)\[\/video\]/is'
		);

		$replace = array(
			'<b>$1</b>',
			'<i>$1</i>',
			'<u>$1</u>',
			'<img src="$1"/>',
			'<a href="$1" >$2</a>',
			'<font style="color:$1; font-size:$2; font-face:$3;">$4</font>',
			'<h1>$1</h1>',
			'<code>$1</code>',
			'<qoute ><span class="author_date" >"Posted by: $1 - $2</span>$3',
			'</qoute>',
			'<iframe width="560" height="315" src="//www.youtube.com/embed/$1" frameborder="0"></iframe>'
		);

		return preg_replace( $search, $replace, $input );
	}	
}

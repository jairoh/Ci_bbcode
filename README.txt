To install:

1. Put bbcode.php into /application/libraries
2. Load it like the other CI libraries
3. echo brackets tagged input wrapped w/ bb_code( "input here" )
  
  ex. 
  1.echo bb_code( "[b]Hello[/b]" )
  2. var hello = "[b]Hello[/b]";
  	echo bbcode( hello );

  Output: <b>Hello</b>
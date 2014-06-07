package HTMLTemplate;

use strict;
use warnings;

use HTML::Template;

sub output {
	my ($tmpl, $values) = @_;

	my $tmpl_path = '/home/sojiro/www/git/WorldCup2014/html/'.$tmpl.'.html';

	# open the html template
	my $template = HTML::Template->new( filename => $tmpl_path );
 
	# fill in some parameters
	$template->param(%$values);

	# send the obligatory Content-Type and print the template output
	print "Content-Type: text/html\n\n", $template->output;
}



1;

#!/usr/bin/perl

use strict;
use warnings;

use lib '/home/sojiro/www/git/WorldCup2014/pm';
require '/home/sojiro/www/git/WorldCup2014/conf/blue_girls.conf';

use HTMLTemplate;

my $girl_number = int(rand($BLUE_GIRLS::NUMBER->{max}));

my $image_url = $BLUE_GIRLS::IMAGE_URL->{$girl_number};

my $view_data = +{ IMAGE_URL => $image_url };

return HTMLTemplate::output('blue_girl', $view_data);

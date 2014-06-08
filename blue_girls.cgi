#!/usr/bin/perl

use strict;
use warnings;

use lib '/home/sojiro/www/git/WorldCup2014/pm';
require '/home/sojiro/www/git/WorldCup2014/conf/blue_girls.conf';

use HTMLTemplate;

my $girl_number = int(rand($BLUE_GIRLS::NUMBER->{max}));

my $image_path = 'http://sojiro.sakura.ne.jp/git/WorldCup2014/img/blue_girls/' . $BLUE_GIRLS::IMAGE_PATH->{$girl_number};

my $view_data = +{ IMAGE_PATH => $image_path };

return HTMLTemplate::output('blue_girl', $view_data);
